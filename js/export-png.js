(function () {
  const exportMenus = document.querySelectorAll('.export-menu');
  document.addEventListener('click', function (event) {
    exportMenus.forEach(function (menu) {
      if (menu.open && !menu.contains(event.target)) {
        menu.open = false;
      }
    });
  });

  const pngBtn = document.getElementById('export-png-btn');
  const dataEl = document.getElementById('kinkyme-export-data');
  if (!pngBtn || !dataEl) {
    return;
  }

  let data;
  try {
    data = JSON.parse(dataEl.textContent || '{}');
  } catch (err) {
    return;
  }

  const RATING_COLORS = {
    curious: '#6f42c1',
    favorite: '#007bff',
    like: '#28a745',
    indifferent: '#ffc107',
    maybe: '#fd7e14',
    limit: '#dc3545',
    not_entered: '#adb5bd'
  };

  function wrapLines(ctx, text, maxWidth) {
    const words = String(text || '').split(/\s+/);
    const lines = [];
    let current = '';
    for (let i = 0; i < words.length; i++) {
      const candidate = current ? current + ' ' + words[i] : words[i];
      if (ctx.measureText(candidate).width <= maxWidth) {
        current = candidate;
      } else {
        if (current) lines.push(current);
        current = words[i];
      }
    }
    if (current) lines.push(current);
    return lines.length ? lines : [''];
  }

  function truncateText(ctx, text, maxWidth) {
    if (ctx.measureText(text).width <= maxWidth) return text;
    let trimmed = text;
    while (trimmed.length > 1 && ctx.measureText(trimmed + '…').width > maxWidth) {
      trimmed = trimmed.slice(0, -1);
    }
    return trimmed + '…';
  }

  function drawRoundedRect(ctx, x, y, w, h, r) {
    ctx.beginPath();
    ctx.roundRect(x, y, w, h, r);
  }

  function drawTriedBox(ctx, x, y, size, checked) {
    drawRoundedRect(ctx, x, y, size, size, 3);
    if (checked) {
      ctx.fillStyle = '#a7289c';
      ctx.fill();
      ctx.strokeStyle = '#75196e';
      ctx.lineWidth = 1.5;
      ctx.stroke();

      ctx.strokeStyle = '#ffffff';
      ctx.lineWidth = 2;
      ctx.lineCap = 'round';
      ctx.lineJoin = 'round';
      ctx.beginPath();
      ctx.moveTo(x + size * 0.24, y + size * 0.54);
      ctx.lineTo(x + size * 0.44, y + size * 0.74);
      ctx.lineTo(x + size * 0.78, y + size * 0.28);
      ctx.stroke();
    } else {
      ctx.fillStyle = '#ffffff';
      ctx.fill();
      ctx.strokeStyle = '#cfd4da';
      ctx.lineWidth = 1.5;
      ctx.stroke();
    }
  }

  function drawDot(ctx, cx, cy, r, ratingKey) {
    const color = RATING_COLORS[ratingKey] || RATING_COLORS.not_entered;
    ctx.beginPath();
    ctx.arc(cx, cy, r, 0, Math.PI * 2);
    if (ratingKey === 'not_entered') {
      ctx.fillStyle = '#e9ecef';
      ctx.fill();
      ctx.strokeStyle = '#adb5bd';
      ctx.lineWidth = 1.5;
      ctx.stroke();
    } else {
      ctx.fillStyle = color;
      ctx.fill();
      ctx.strokeStyle = 'rgba(0,0,0,0.22)';
      ctx.lineWidth = 1.2;
      ctx.stroke();
    }
  }

  function renderAndDownloadPng() {
    const scale = 2;
    const canvasWidth = 1440;
    const pad = 32;
    const colGap = 20;
    const numCols = 3;
    const cardWidth = (canvasWidth - pad * 2 - colGap * (numCols - 1)) / numCols;

    const measureCanvas = document.createElement('canvas');
    const mctx = measureCanvas.getContext('2d');
    const fontFamily = '"Segoe UI", Tahoma, Geneva, Verdana, sans-serif';

    const infoItems = data.info || [];
    const notesText = (data.notes || '').trim();
    let notesLines = [];
    if (notesText) {
      mctx.font = '14px ' + fontFamily;
      const rawParas = notesText.split(/\r?\n/);
      rawParas.forEach(function (para) {
        wrapLines(mctx, para, canvasWidth - pad * 2 - 32).forEach(function (line) {
          notesLines.push(line);
        });
      });
    }

    const headerHeight = 76;
    const legendHeight = 52;
    const infoRows = infoItems.length > 0 ? Math.ceil(infoItems.length / 4) : 0;
    const infoHeight = (infoItems.length > 0 || notesLines.length > 0)
      ? 24 + infoRows * 46 + (notesLines.length > 0 ? 34 + notesLines.length * 20 : 0) + 16
      : 0;

    // Measure section cards
    const sections = data.sections || [];
    const cardHeaderH = 38;
    const colHeaderH = 26;
    const rowH = 30;
    const cards = sections.map(function (sec) {
      const hasCols = Array.isArray(sec.columns) && sec.columns.length > 0;
      const h = cardHeaderH + (hasCols ? colHeaderH : 6) + (sec.items.length * rowH) + 12;
      return { sec: sec, hasCols: hasCols, height: h };
    });

    // Pack cards into 3 columns using shortest-column placement
    const colHeights = [0, 0, 0];
    const placements = [];
    cards.forEach(function (card) {
      let bestCol = 0;
      for (let c = 1; c < numCols; c++) {
        if (colHeights[c] < colHeights[bestCol]) bestCol = c;
      }
      placements.push({
        card: card,
        col: bestCol,
        x: pad + bestCol * (cardWidth + colGap),
        yOffset: colHeights[bestCol]
      });
      colHeights[bestCol] += card.height + colGap;
    });

    const gridTop = pad + headerHeight + 14 + legendHeight + 16 + (infoHeight > 0 ? infoHeight + 18 : 0);
    const gridHeight = Math.max.apply(null, colHeights);
    const footerHeight = 44;
    const totalHeight = Math.ceil(gridTop + gridHeight + footerHeight);

    const canvas = document.createElement('canvas');
    canvas.width = canvasWidth * scale;
    canvas.height = totalHeight * scale;
    const ctx = canvas.getContext('2d');
    ctx.scale(scale, scale);

    // Background
    ctx.fillStyle = '#f8f9fa';
    ctx.fillRect(0, 0, canvasWidth, totalHeight);

    // Header banner
    const grad = ctx.createLinearGradient(pad, pad, canvasWidth - pad, pad + headerHeight);
    grad.addColorStop(0, '#6f42c1');
    grad.addColorStop(1, '#a7289c');
    drawRoundedRect(ctx, pad, pad, canvasWidth - pad * 2, headerHeight, 12);
    ctx.fillStyle = grad;
    ctx.fill();

    ctx.fillStyle = '#ffffff';
    ctx.font = 'bold 28px ' + fontFamily;
    ctx.textBaseline = 'middle';
    const title = data.nickname ? (data.nickname + ' — KinkyMe') : 'KinkyMe';
    ctx.fillText(truncateText(ctx, title, canvasWidth - pad * 2 - 360), pad + 24, pad + headerHeight / 2);

    ctx.font = '15px ' + fontFamily;
    ctx.textAlign = 'right';
    ctx.fillStyle = 'rgba(255,255,255,0.9)';
    ctx.fillText(data.shareUrl || ('/' + data.slug), canvasWidth - pad - 24, pad + headerHeight / 2);
    ctx.textAlign = 'left';

    // Legend bar
    const legendY = pad + headerHeight + 14;
    drawRoundedRect(ctx, pad, legendY, canvasWidth - pad * 2, legendHeight, 10);
    ctx.fillStyle = '#ffffff';
    ctx.fill();
    ctx.strokeStyle = '#dee2e6';
    ctx.lineWidth = 1;
    ctx.stroke();

    let lx = pad + 20;
    const ly = legendY + legendHeight / 2;
    ctx.font = 'bold 14px ' + fontFamily;
    ctx.fillStyle = '#212529';
    ctx.fillText('Legend:', lx, ly);
    lx += ctx.measureText('Legend:').width + 20;

    drawTriedBox(ctx, lx, ly - 8, 16, true);
    ctx.font = '14px ' + fontFamily;
    ctx.fillStyle = '#333333';
    ctx.fillText('Tried', lx + 22, ly);
    lx += 22 + ctx.measureText('Tried').width + 24;

    (data.ratings || []).forEach(function (r) {
      drawDot(ctx, lx + 8, ly, 8, r.key);
      ctx.fillStyle = '#333333';
      ctx.fillText(r.label, lx + 22, ly);
      lx += 22 + ctx.measureText(r.label).width + 24;
    });

    // Info box
    if (infoHeight > 0) {
      const infoY = legendY + legendHeight + 16;
      drawRoundedRect(ctx, pad, infoY, canvasWidth - pad * 2, infoHeight, 10);
      ctx.fillStyle = '#ffffff';
      ctx.fill();
      ctx.strokeStyle = '#dee2e6';
      ctx.lineWidth = 1;
      ctx.stroke();

      const cellW = (canvasWidth - pad * 2 - 32) / 4;
      infoItems.forEach(function (item, idx) {
        const col = idx % 4;
        const row = Math.floor(idx / 4);
        const ix = pad + 16 + col * cellW;
        const iy = infoY + 18 + row * 46;
        ctx.font = 'bold 11px ' + fontFamily;
        ctx.fillStyle = '#6c757d';
        ctx.fillText(item.label.toUpperCase(), ix, iy + 6);
        ctx.font = 'bold 15px ' + fontFamily;
        ctx.fillStyle = '#212529';
        ctx.fillText(truncateText(ctx, item.value, cellW - 14), ix, iy + 25);
      });

      if (notesLines.length > 0) {
        const ny = infoY + 18 + infoRows * 46 + 8;
        ctx.font = 'bold 13px ' + fontFamily;
        ctx.fillStyle = '#495057';
        ctx.fillText('Notes:', pad + 16, ny);
        ctx.font = '14px ' + fontFamily;
        ctx.fillStyle = '#212529';
        notesLines.forEach(function (line, i) {
          ctx.fillText(line, pad + 16, ny + 22 + i * 20);
        });
      }
    }

    // Section cards
    placements.forEach(function (p) {
      const x = p.x;
      const y = gridTop + p.yOffset;
      const sec = p.card.sec;
      const hasCols = p.card.hasCols;

      drawRoundedRect(ctx, x, y, cardWidth, p.card.height, 10);
      ctx.fillStyle = '#ffffff';
      ctx.fill();
      ctx.strokeStyle = '#dee2e6';
      ctx.lineWidth = 1;
      ctx.stroke();

      // Section header bar
      ctx.save();
      drawRoundedRect(ctx, x, y, cardWidth, cardHeaderH, [10, 10, 0, 0]);
      ctx.fillStyle = '#f1f3f5';
      ctx.fill();
      ctx.restore();

      ctx.font = 'bold 16px ' + fontFamily;
      ctx.fillStyle = '#212529';
      ctx.fillText(sec.title, x + 14, y + cardHeaderH / 2);

      let cursorY = y + cardHeaderH;
      const colSlotWidth = 66;
      const rightStart = x + cardWidth - 14 - (hasCols ? sec.columns.length * colSlotWidth : colSlotWidth);

      if (hasCols) {
        ctx.font = 'bold 12px ' + fontFamily;
        ctx.fillStyle = '#6c757d';
        ctx.textAlign = 'center';
        sec.columns.forEach(function (col, idx) {
          const cx = rightStart + idx * colSlotWidth + colSlotWidth / 2;
          ctx.fillText(col.label, cx, cursorY + colHeaderH / 2);
        });
        ctx.textAlign = 'left';
        cursorY += colHeaderH;
      } else {
        cursorY += 6;
      }

      sec.items.forEach(function (item, idx) {
        const ry = cursorY + idx * rowH;
        if (idx > 0 || hasCols) {
          ctx.strokeStyle = '#f1f3f5';
          ctx.lineWidth = 1;
          ctx.beginPath();
          ctx.moveTo(x + 12, ry);
          ctx.lineTo(x + cardWidth - 12, ry);
          ctx.stroke();
        }

        const midY = ry + rowH / 2;
        ctx.font = '14px ' + fontFamily;
        ctx.fillStyle = '#212529';
        const maxLabelW = rightStart - (x + 14) - 8;
        ctx.fillText(truncateText(ctx, item.label, maxLabelW), x + 14, midY);

        item.values.forEach(function (val, cIdx) {
          const slotCenter = rightStart + cIdx * colSlotWidth + colSlotWidth / 2;
          drawTriedBox(ctx, slotCenter - 19, midY - 7, 14, !!val.tried);
          drawDot(ctx, slotCenter + 11, midY, 8, val.rating);
        });
      });
    });

    // Footer
    ctx.font = '13px ' + fontFamily;
    ctx.fillStyle = '#6c757d';
    ctx.textAlign = 'center';
    ctx.fillText('Generated by KinkyMe • Made by FoxxoOwO', canvasWidth / 2, totalHeight - 18);
    ctx.textAlign = 'left';

    const finishDownload = function (blob) {
      if (!blob) return;
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'kinkyme-' + (data.slug || 'list') + '.png';
      document.body.appendChild(a);
      a.click();
      a.remove();
      setTimeout(function () { URL.revokeObjectURL(url); }, 1500);
    };

    if (canvas.toBlob) {
      canvas.toBlob(finishDownload, 'image/png');
    } else {
      const a = document.createElement('a');
      a.href = canvas.toDataURL('image/png');
      a.download = 'kinkyme-' + (data.slug || 'list') + '.png';
      document.body.appendChild(a);
      a.click();
      a.remove();
    }
  }

  pngBtn.addEventListener('click', function () {
    const parentMenu = pngBtn.closest('details.export-menu');
    if (parentMenu) parentMenu.open = false;
    renderAndDownloadPng();
  });
})();

</div>

<footer class="site-footer">
  <p>Made by <a href="https://fetlife.com/FoxxoOwO" target="_blank" rel="noopener noreferrer">FoxxoOwO</a> with ❤️</p>
</footer>

<script>
  (function () {
    const urlRandom = document.getElementById('url_random');
    const urlCustom = document.getElementById('url_custom');
    const customSlugGroup = document.getElementById('custom-slug-group');
    const customSlugInput = document.getElementById('custom_slug');

    if (urlRandom && urlCustom && customSlugGroup && customSlugInput) {
      function updateUrlMode() {
        if (urlCustom.checked) {
          customSlugGroup.classList.add('is-visible');
          customSlugInput.disabled = false;
          customSlugInput.required = true;
        } else {
          customSlugGroup.classList.remove('is-visible');
          customSlugInput.disabled = true;
          customSlugInput.required = false;
        }
      }

      urlRandom.addEventListener('change', updateUrlMode);
      urlCustom.addEventListener('change', updateUrlMode);
      updateUrlMode();
    }

    const copyBtn = document.getElementById('copy-share-url');
    if (copyBtn) {
      copyBtn.addEventListener('click', function () {
        const url = copyBtn.getAttribute('data-url');
        if (!url) return;
        if (navigator.clipboard && navigator.clipboard.writeText) {
          navigator.clipboard.writeText(url).then(function () {
            const orig = copyBtn.textContent;
            copyBtn.textContent = 'Copied!';
            setTimeout(function () { copyBtn.textContent = orig; }, 1800);
          });
        }
      });
    }
  })();
</script>

<?php $jsVersion = (int) (@filemtime(__DIR__ . '/js/export-png.js') ?: 1); ?>
<script src="/js/export-png.js?v=<?= $jsVersion ?>" defer></script>
</body>
</html>

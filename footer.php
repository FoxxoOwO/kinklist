<?php

echo '


<footer>
  <p>Made by FoxxoOwO with ❤️</p>
</footer>




<script>
    // Načteme si všechny potřebné elementy
    const urlRandom = document.getElementById(\'url_random\');
    const urlCustom = document.getElementById(\'url_custom\');
    const customSlugGroup = document.getElementById(\'custom-slug-group\');
    const customSlugInput = document.getElementById(\'custom_slug\');

    // Vytvoříme funkci, která nastaví správný stav
    function updateUrlMode() {
        if (urlCustom.checked) {
            // --- Je vybráno "CUSTOM" ---
            customSlugGroup.classList.add(\'is-visible\'); // PŘIDÁ TŘÍDU
            customSlugInput.disabled = false;
            customSlugInput.required = true;
        } else {
            // --- Je vybráno "RANDOM" ---
            customSlugGroup.classList.remove(\'is-visible\'); // ODEBERE TŘÍDU
            customSlugInput.disabled = true;
            customSlugInput.required = false;
        }
    }

    // Přidáme "posluchače" na obě radio tlačítka
    urlRandom.addEventListener(\'change\', updateUrlMode);
    urlCustom.addEventListener(\'change\', updateUrlMode);

    // Zavoláme funkci hned po načtení stránky,
    // aby se nastavil správný výchozí stav (skryto).
    updateUrlMode();
</script>

</body>
</html>



';
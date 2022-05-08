  <!-- Scripts JS -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="{$base_url}/includes/assets/js/script.js"></script>
    {include file='_js_files.tpl'}
  <script  src="{$base_url}/includes/assets/js/search.js"></script>

  {if !$user->_logged_in}
      <script  src="{$base_url}/includes/assets/js/modals.js"></script>
      <script  src="{$base_url}/includes/assets/js/core.js"></script>
  {/if}

  <script>
    window.onload = function() {
        document.querySelector('div.center').style.display = "flex"
        document.querySelector('.loading').style.display = "none" 
    }
  </script>
</body>
</html>
<!-- Scripts JS -->
  <script src='includes/assets/theme_dark/js/jquery.min.js'></script>
  <script src='includes/assets/theme_dark/js/hls.js'></script>
  <script  src="{$base_url}/includes/assets/js/script.js"></script>
  <script  src="{$base_url}/includes/assets/js/page.js"></script>
    {include file='_js_files.tpl'}
  <script  src="{$base_url}/includes/assets/js/search.js"></script>

  {if !$user->_logged_in}
      <script  src="{$base_url}/includes/assets/js/modals.js"></script>
      <script  src="{$base_url}/includes/assets/js/core.js"></script>
  {/if}

  <script>

    $(document).ready(function(){
      document.querySelector('.ready-page').style.visibility = "visible"
      document.querySelector('#loading-page').style.display = "none"
    })
  </script>
</body>
</html>
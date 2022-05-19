</div>

<!-- Scripts JS -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    {include file='_js_files.tpl'}
  <script  src="{$base_url}/includes/assets/js/search.js"></script>

  <script  src="{$base_url}/includes/assets/js/core.js"></script>
  <script  src="{$base_url}/includes/assets/js/user.js"></script>
  <script  src="{$base_url}/includes/assets/js/messages_contact.js"></script>

  <script>

    $(document).ready(function(){
      document.querySelector('.ready-page').style.visibility = "visible"
      document.querySelector('#loading-page').style.display = "none"
    })
  </script>
</body>
</html>
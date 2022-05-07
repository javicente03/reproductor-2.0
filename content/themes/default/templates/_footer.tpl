{if $config[0]['option_value'] != "" && $config[0]['type'] == 'video'}
  </div>
  </section>
{/if}

<script src="{$base_url}/content/themes/default/css/jquery.min.js"></script>
{include file='_js_files.tpl'}
<script src="{$base_url}/includes/assets/js/core.js"></script>
<script src="{$base_url}/includes/assets/js/user.js"></script>
<script>
  window.onload = function() {
      document.querySelector('div.center').style.display = "flex"
      document.querySelector('.loading').style.display = "none" 
  }
</script>
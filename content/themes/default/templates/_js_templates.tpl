<script id="x-uploader" type="text/template">
    <form class="x-uploader" action="{literal}{{url}}{/literal}" method="post" enctype="multipart/form-data">
        {literal}{{#multiple}}{/literal}
            <input name="file[]" type="file" multiple="multiple" accept="{literal}{{accept}}{/literal}">
        {literal}{{/multiple}}{/literal}
        {literal}{{^multiple}}{/literal}
            {if isset($load_data)}
            <input name="file" type="file" accept=".csv">
            <input type="hidden" name="load_data" value="1">
            {else}
            <input name="file" type="file" accept="{literal}{{accept}}{/literal}">
            {/if}
        {literal}{{/multiple}}{/literal}
        <input type="hidden" name="secret" value="{literal}{{secret}}{/literal}">
    </form>
</script>
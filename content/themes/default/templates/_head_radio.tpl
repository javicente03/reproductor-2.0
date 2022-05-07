<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#D8D8D8">

  <!-- SEO -->
  <meta name="description" content="Great Twitter of entertainment." />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <link rel="canonical" href="" />
  <meta property="og:locale" content="ve_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Zaya Motion | Great Twitter of entertainment." />
  <meta property="og:description" content="Great Twitter of entertainment." />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="Zaya Motion." />
  <meta property="og:image" content="{{ url_for('static', filename='img/redsocial.jpg') }}" />
  <meta property="og:image:width" content="1461" />
  <meta property="og:image:height" content="737" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@zayacorp" />

  <title>Doble Sound</title>

  <!--=============== favicons ===============-->
  <link rel="shortcut icon" href="{{ url_for('static', filename='img/logo.png') }}">

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{$base_url}/includes/assets/css/style.css">
  <link rel="stylesheet" href="{$base_url}/includes/assets/css/modals.css">
  {if $config[0]['option_value'] != "" && $config[0]['type'] == 'video'} 
  <link rel="stylesheet" href="{$base_url}/includes/assets/css/style-video.css">
  {/if}

  <style>
    {if $config[0]['option_value'] != "" && $config[0]['type'] == 'image'}
    body {
      background-image: url({$base_url}/content/uploads/{$config[0]['option_value']});
    }
    {/if}
  </style>
</head>
<body>
{if $config[0]['option_value'] != "" && $config[0]['type'] == 'video'}
<section class="container">
  <div class="video-container">

  <video src="{$base_url}/content/uploads/{$config[0]['option_value']}" autoplay muted loop></video>
  </div>
<div class="contenido">
{/if}
<!-- Loading -->
  <div class="loading show">
    <div class="disco">
      <div class="disco--cover"></div>
      <div class="disco--vinilo"></div>
    </div>
  </div>
  <!-- Fin loading -->
<?php
/* Smarty version 3.1.40, created on 2022-05-17 18:00:09
  from 'C:\xampp\htdocs\nuevo reproductor\content\themes\default\templates\reproductor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_6283e2a9c935d3_90662861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f86db985d9d63f261973a8931bf6aa73bd8d4f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevo reproductor\\content\\themes\\default\\templates\\reproductor.tpl',
      1 => 1652157052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283e2a9c935d3_90662861 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="reproductor">
  <div class="vinyl"></div> 
  <input type="range" class="range-volume" max="1" value="1" min="0" step="0.1">
  <div id="mp3_player">   
    <canvas id="analyzer_render"></canvas>
    <div id="audio_box"></div>
    <input type="range" max="100" value="0" disabled class="range-audio">
  </div>
</div><?php }
}

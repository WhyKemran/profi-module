<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:24:24
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\call_requests\settings\info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647372280d2781_64528925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95577669db17adfc567419f5f097b7518743bfd' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\call_requests\\settings\\info.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647372280d2781_64528925 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</bdi></p>
    </div>

</div><?php }
}

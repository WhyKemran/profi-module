<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:19
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\help_center\hooks\menu\notification_center_mobile.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647373130ec745_20574875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efffd4db4b32f242e27cbeb4dd8053ba1c72a644' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\help_center\\hooks\\menu\\notification_center_mobile.pre.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl' => 1,
  ),
),false)) {
function content_647373130ec745_20574875 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu-mobile">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}

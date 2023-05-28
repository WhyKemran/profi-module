<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:13
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\help_center\hooks\menu\notification_center.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6473730d5a0ba9_38874362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282f2a178506008f31e881c393fd8ddfbaeeb8ca' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\help_center\\hooks\\menu\\notification_center.pre.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup.tpl' => 1,
  ),
),false)) {
function content_6473730d5a0ba9_38874362 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}

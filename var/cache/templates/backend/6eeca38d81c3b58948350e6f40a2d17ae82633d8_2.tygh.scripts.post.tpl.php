<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:23
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\help_center\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6473731799ca79_90152052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eeca38d81c3b58948350e6f40a2d17ae82633d8' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\scripts.post.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473731799ca79_90152052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_script(array('src'=>"js/addons/help_center/help_center.js"),$_smarty_tpl);?>

<?php }
}
}

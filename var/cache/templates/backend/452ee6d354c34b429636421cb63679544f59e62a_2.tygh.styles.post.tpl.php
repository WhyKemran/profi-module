<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:27:30
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\store_locator\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647372e215db89_57285018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '452ee6d354c34b429636421cb63679544f59e62a' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\store_locator\\hooks\\index\\styles.post.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647372e215db89_57285018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value && $_smarty_tpl->tpl_vars['shipping']->value['company_id'] == 0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }
}
}

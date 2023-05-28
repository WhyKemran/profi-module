<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:27:29
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\help_center\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647372e18cc7d1_26040216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d513b053157def76456a49c9e37f2924384648' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\help_center\\hooks\\index\\styles.post.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647372e18cc7d1_26040216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/manage.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup_btn_mobile.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_block.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_chapter.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_item.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_section.less"),$_smarty_tpl);?>

<?php }
}
}

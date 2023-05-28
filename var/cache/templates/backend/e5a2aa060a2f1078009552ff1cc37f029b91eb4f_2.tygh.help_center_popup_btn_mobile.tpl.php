<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:19
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\help_center\component\help_center_popup_btn_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647373132532b4_40888854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a2aa060a2f1078009552ff1cc37f029b91eb4f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\help_center\\component\\help_center_popup_btn_mobile.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647373132532b4_40888854 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="help-center-popup-btn-mobile"
    data-ca-help-center="popupBtnMobile"
    data-ca-help-center-counter="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['help_center_counter']->value, ENT_QUOTES, 'UTF-8');?>
"
><?php echo $_smarty_tpl->__("help_center.growth_center");?>
</button>
<?php }
}

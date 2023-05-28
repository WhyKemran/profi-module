<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:45
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\views\index\components\analytics_section\analytics_data\data_3_1_vendor_current_balance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6473732db03c16_49128893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33856bb194eb6feba8b5661672b60d05660bcf34' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_data\\data_3_1_vendor_current_balance.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_6473732db03c16_49128893 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.vendor_current_balance','dashboard.analytics_card.view_accounting'));
if (fn_allowed_for("MULTIVENDOR")) {
if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['current_balance']->value), 0, false);
$_smarty_tpl->assign('vendor_current_balance_value', ob_get_clean());
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', array('id'=>"analytics_card_vendor_current_balance",'title'=>$_smarty_tpl->__("dashboard.analytics_card.vendor_current_balance"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_accounting"),'href'=>"companies.balance"),'number'=>$_smarty_tpl->tpl_vars['vendor_current_balance_value']->value));
$_smarty_tpl->_assignInScope('data_3_1_vendor_current_balance', $_smarty_tpl->tpl_vars['data_3_1_vendor_current_balance']->value ,false ,2);
}
}
}
}

<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:28:46
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\views\index\components\analytics_section\analytics_data\data_3_5_registered_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6473732e350515_99557439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec890dbedd455f3fa632d3db3a61f4d4ce0c4c90' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_data\\data_3_5_registered_customers.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6473732e350515_99557439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.registered_customers','dashboard.analytics_card.view_customers'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])) {
ob_start();
echo htmlspecialchars(smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', array('id'=>"analytics_card_registered_customers",'title'=>$_smarty_tpl->__("dashboard.analytics_card.registered_customers"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_customers"),'href'=>"profiles.manage?user_type=".$_prefixVariable17),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers'])));
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', $_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value ,false ,2);
}
}
}

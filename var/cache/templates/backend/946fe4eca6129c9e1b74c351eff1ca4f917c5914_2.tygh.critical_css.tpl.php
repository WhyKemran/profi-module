<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:27:28
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\common\critical_css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647372e08669c3_40461474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '946fe4eca6129c9e1b74c351eff1ca4f917c5914' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\common\\critical_css.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:design/backend/css/tygh/critical.css' => 1,
  ),
),false)) {
function content_647372e08669c3_40461474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),2=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_assignInScope('enable_minify_critical_css', (($tmp = $_smarty_tpl->tpl_vars['enable_minify_critical_css']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "critical_css", 'critical_css', null);?><style><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:critical_css"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:critical_css"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:design/backend/css/tygh/critical.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:critical_css"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></style><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['enable_minify_critical_css']->value) {
ob_start();?>{<?php $_prefixVariable3=ob_get_clean();
ob_start();?>{<?php $_prefixVariable4=ob_get_clean();
ob_start();?>}<?php $_prefixVariable5=ob_get_clean();
ob_start();?>}<?php $_prefixVariable6=ob_get_clean();
ob_start();?>{<?php $_prefixVariable7=ob_get_clean();
ob_start();?>{<?php $_prefixVariable8=ob_get_clean();
ob_start();?>}<?php $_prefixVariable9=ob_get_clean();
ob_start();?>}<?php $_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('critical_css', smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['critical_css']->value,"/[\r\n\t]/",''),"  "," "),"  "," ")," ".$_prefixVariable3,$_prefixVariable4)," ".$_prefixVariable5,$_prefixVariable6),$_prefixVariable7." ",$_prefixVariable8),$_prefixVariable9." ",$_prefixVariable10),", ",","),": ",":"),"; ",";"));
}
echo $_smarty_tpl->tpl_vars['critical_css']->value;?>

<?php }
}

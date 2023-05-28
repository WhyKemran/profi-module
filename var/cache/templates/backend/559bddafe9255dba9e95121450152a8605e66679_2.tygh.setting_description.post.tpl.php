<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:24:36
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\addons\seo\hooks\settings_fields\setting_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_64737234f284d9_16801330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559bddafe9255dba9e95121450152a8605e66679' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\addons\\seo\\hooks\\settings_fields\\setting_description.post.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64737234f284d9_16801330 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('warning','seo.storefront_frontend_default_language_warning','seo.default_storefront_frontend_default_language_warning','seo.secondary_storefront_frontend_default_language_warning'));
if ($_smarty_tpl->tpl_vars['item']->value['name'] === "frontend_default_language" && $_smarty_tpl->tpl_vars['show_language_warning']->value) {?>
    <div class="text-warning">
        <strong><?php echo $_smarty_tpl->__("warning");?>
!</strong>
        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php echo $_smarty_tpl->__("seo.storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } elseif ($_smarty_tpl->tpl_vars['is_default_storefront_affected']->value) {?>
            <?php echo $_smarty_tpl->__("seo.default_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("seo.secondary_storefront_frontend_default_language_warning",array("[link]"=>fn_url("addons.update?addon=seo")));?>

        <?php }?>
    </div>
<?php }
}
}

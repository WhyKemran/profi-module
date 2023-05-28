<?php
/* Smarty version 4.1.1, created on 2023-05-28 18:57:06
  from 'D:\OSPanel\domains\profi.uz\design\backend\templates\views\settings_wizard\components\password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_647379d29e4e39_50040814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2be771ddd23db5666b88eafc9566e039ae8de6f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\profi.uz\\design\\backend\\templates\\views\\settings_wizard\\components\\password.tpl',
      1 => 1679461514,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647379d29e4e39_50040814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\OSPanel\\domains\\profi.uz\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('new_administrator_password','show','generate','hide','show','hide'));
?>
<div class="control-group setting-wide">
    <label for="password_field" class="control-label"><?php echo $_smarty_tpl->__("new_administrator_password");?>
:</label>
    <div class="controls">
        <input type="password" value="" id="password_field" name="new_password"><br>
        <a class="cm-show-password a-pseudo cm-off-password" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("show");?>
</a> <a class="cm-generate-password a-pseudo" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("generate");?>
</a>
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function($, _) {
        $('.cm-show-password').on('click', function(e) {
            _this = $(this);
            if (_this.hasClass('cm-off-password')) {
                $('#' + _this.data('caResultId')).prop('type', 'text');
                _this.removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            } else {
                $('#' + _this.data('caResultId')).prop('type', 'password');
                _this.addClass('cm-off-password').html('<?php echo $_smarty_tpl->__("show");?>
');
            }
        });

        $('.cm-generate-password').on('click', function(e) {
            $('#' + $(this).data('caResultId')).val(Math.random().toString(36).slice(-10)).prop('type', 'text');
            if ($('.cm-show-password').hasClass('cm-off-password')) {
                $('.cm-show-password').removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            }
        });
    })(Tygh.$, Tygh);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}

<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:09
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsPush.html" */ ?>
<?php /*%%SmartyHeaderCode:1126366982633a82618c1456-11147885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b02a2997c20ef07f7a77b9f040cbb000e03862a' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsPush.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126366982633a82618c1456-11147885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'selected_push_adapter' => 0,
    'push_adapters' => 0,
    '_adapter' => 0,
    '_adapter_id' => 0,
    '_adapter_name' => 0,
    '_adapter_settings' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a82618fc4a0_80236820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a82618fc4a0_80236820')) {function content_633a82618fc4a0_80236820($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Настройки push-уведомлений — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-push-settings-page blank block double-padded" id="s-push-settings-page">
    <h1 class="s-page-header">Push-уведомления</h1>
    <div class="s-description">Выберите и настройте сервис для отправки push-уведомлений.</div>
    <div class="s-push-settings-fields-block">
        <form action="?module=settingsPushSave">

            <div class="field-group">
                <div class="field">
                    <div class="name">Сервис push-уведомлений</div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="push_adapter" <?php if (!$_smarty_tpl->tpl_vars['selected_push_adapter']->value){?>checked<?php }?> value=""> Не использовать
                        </label>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['push_adapters']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['push_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter']->key => $_smarty_tpl->tpl_vars['_adapter']->value){
$_smarty_tpl->tpl_vars['_adapter']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getId(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getName(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getSettingsHtml(array('namespace'=>'push_settings')), null, 0);?>
                            <div class="value no-shift">
                                <label>
                                    <input type="radio" name="push_adapter" <?php if ($_smarty_tpl->tpl_vars['_adapter_id']->value==$_smarty_tpl->tpl_vars['selected_push_adapter']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_adapter_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_adapter_settings']->value)){?>
                                    <div class="js-push-adapter-settings" data-adapter-id="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" style="display: none;">
                                        <?php echo $_smarty_tpl->tpl_vars['_adapter_settings']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        Нет доступных сервисов отправки push-уведомлений
                    <?php }?>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/push/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                    <span class="js-errors" style="color: red; display: none;"></span>
                </div>
            </div>

        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsPush({
            $wrapper: $("#s-push-settings-page")
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>
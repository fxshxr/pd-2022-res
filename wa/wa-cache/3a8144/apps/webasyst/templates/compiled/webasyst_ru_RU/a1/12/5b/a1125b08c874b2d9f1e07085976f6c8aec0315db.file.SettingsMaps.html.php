<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:08
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsMaps.html" */ ?>
<?php /*%%SmartyHeaderCode:1215550707633a82603e1ca9-76748847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1125b08c874b2d9f1e07085976f6c8aec0315db' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsMaps.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1215550707633a82603e1ca9-76748847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'is_map_disabled' => 0,
    'map_adapters' => 0,
    '_adapter' => 0,
    '_adapter_id' => 0,
    'selected_map_adapter' => 0,
    '_adapter_name' => 0,
    '_adapter_settings' => 0,
    'is_backend_map_disabled' => 0,
    'backend_selected_map_adapter' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8260428179_29215275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8260428179_29215275')) {function content_633a8260428179_29215275($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Настройки карт — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-maps-settings-page blank block double-padded" id="s-maps-settings-page">
    <h1 class="s-page-header">Настройки карт</h1>
    <div class="s-description">Выберите картографический сервис для отображения онлайн-карт.</div>
    <div class="s-maps-settings-fields-block">
        <form action="?module=settingsMapsSave">

            <div class="field-group">
                <div class="field">
                    <div class="name">Сайт</div>

                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="map_adapter" <?php if ($_smarty_tpl->tpl_vars['is_map_disabled']->value){?>checked<?php }?> value="disabled" class="js-map-adapter-field"> Не использовать
                        </label>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['map_adapters']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter']->key => $_smarty_tpl->tpl_vars['_adapter']->value){
$_smarty_tpl->tpl_vars['_adapter']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getId(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getName(), null, 0);?>
                            <?php echo $_smarty_tpl->tpl_vars['_adapter']->value->setEnvironment(waMapAdapter::FRONTEND_ENVIRONMENT);?>

                            <?php $_smarty_tpl->tpl_vars['_adapter_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getSettingsHtml(array('namespace'=>'map_settings')), null, 0);?>
                            <div class="value no-shift">
                                <label>
                                    <input type="radio" name="map_adapter" <?php if ($_smarty_tpl->tpl_vars['_adapter_id']->value==$_smarty_tpl->tpl_vars['selected_map_adapter']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" class="js-map-adapter-field"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_adapter_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_adapter_settings']->value)){?>
                                    <div class="js-map-adapter-settings" data-adapter-id="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" style="display: none;">
                                        <?php echo $_smarty_tpl->tpl_vars['_adapter_settings']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="value no-shift">
                            Нет доступных сервисов карт
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="field-group">
                <div class="field">
                    <div class="name">Бекенд</div>

                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="backend_map_adapter" <?php if ($_smarty_tpl->tpl_vars['is_backend_map_disabled']->value){?>checked<?php }?> value="disabled" class="js-map-adapter-field"> Не использовать
                        </label>
                    </div>

                    <?php if (!empty($_smarty_tpl->tpl_vars['map_adapters']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter']->key => $_smarty_tpl->tpl_vars['_adapter']->value){
$_smarty_tpl->tpl_vars['_adapter']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getId(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getName(), null, 0);?>
                            <?php echo $_smarty_tpl->tpl_vars['_adapter']->value->setEnvironment(waMapAdapter::BACKEND_ENVIRONMENT);?>

                            <?php $_smarty_tpl->tpl_vars['_adapter_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getSettingsHtml(array('namespace'=>'backend_map_settings')), null, 0);?>
                            <div class="value no-shift">
                                <label>
                                    <input type="radio" name="backend_map_adapter" <?php if ($_smarty_tpl->tpl_vars['_adapter_id']->value==$_smarty_tpl->tpl_vars['backend_selected_map_adapter']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" class="js-map-adapter-field"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_adapter_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_adapter_settings']->value)){?>
                                    <div class="js-map-adapter-settings" data-adapter-id="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" style="display: none;">
                                        <?php echo $_smarty_tpl->tpl_vars['_adapter_settings']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="value no-shift">
                            Нет доступных сервисов карт
                        </div>
                    <?php }?>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/maps/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>

        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsMaps({
            $wrapper: $("#s-maps-settings-page")
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script>
<?php }} ?>
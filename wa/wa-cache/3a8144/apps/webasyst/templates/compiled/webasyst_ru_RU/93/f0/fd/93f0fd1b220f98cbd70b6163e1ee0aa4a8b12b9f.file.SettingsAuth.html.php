<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:13
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsAuth.html" */ ?>
<?php /*%%SmartyHeaderCode:2062118381633a8265916502-25619631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f0fd1b220f98cbd70b6163e1ee0aa4a8b12b9f' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsAuth.html',
      1 => 1648029634,
      2 => 'file',
    ),
    'fc5c4970ef06e9a5eed2e1b1ac27c1753bd86809' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsOnetimePasswordAuthConfirmDialog.inc.html',
      1 => 1644567534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062118381633a8265916502-25619631',
  'function' => 
  array (
    '_renderCustomBackground' => 
    array (
      'parameter' => 
      array (
        'custom_image' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'webasyst_showEmailChannelDiagnosticMessage' => 
    array (
      'parameter' => 
      array (
        'message' => 
        array (
        ),
        'is_template' => false,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    '_title' => 0,
    'custom_image' => 0,
    'images_url' => 0,
    'settings' => 0,
    'is_waid_connected' => 0,
    'is_backend_auth_forced' => 0,
    'is_user_bound_to_webasyst_id' => 0,
    'waid_settings_link' => 0,
    'auth_config' => 0,
    'email_channels' => 0,
    'auth_types' => 0,
    '_auth_type_info' => 0,
    '_auth_type' => 0,
    '_auth_type_id' => 0,
    '_is_checked' => 0,
    '_name' => 0,
    'onetime_password_timeout' => 0,
    'wa_backend_url' => 0,
    '_id' => 0,
    '_selected' => 0,
    '_channel' => 0,
    'is_template' => 0,
    'message' => 0,
    '_message' => 0,
    'used_auth_methods' => 0,
    'sms_channels' => 0,
    '_phone_transform_prefix' => 0,
    '_input_code' => 0,
    '_output_code' => 0,
    'login_captcha_variants' => 0,
    '_variants' => 0,
    '_info' => 0,
    '_value' => 0,
    'backgrounds' => 0,
    '_background' => 0,
    'wa_url' => 0,
    'images' => 0,
    '_image' => 0,
    'images_path' => 0,
    '_account_name' => 0,
    'demo_captcha' => 0,
    '_locale' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a82659c6f55_74203214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a82659c6f55_74203214')) {function content_633a82659c6f55_74203214($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\vendors\\smarty3\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Вход в&nbsp;бекенд — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['_title']->value,'&nbsp;',' '), null, 0);?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['_account_name'] = new Smarty_variable($_tmp1, null, 0);?>

<?php if (!is_callable('smarty_modifier_wa_format_file_size')) include 'D:\open_server\OSPanel\domains\utke\wa-system/vendors/smarty-plugins\modifier.wa_format_file_size.php';
?><?php if (!function_exists('smarty_template_function__renderCustomBackground')) {
    function smarty_template_function__renderCustomBackground($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderCustomBackground']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div><?php if ($_smarty_tpl->tpl_vars['custom_image']->value!==null&&$_smarty_tpl->tpl_vars['custom_image']->value!==false){?><div class="s-custom-background-preview js-custom-background-preview" data-value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['custom_image']->value['file_name'])===null||$tmp==='' ? null : $tmp);?>
"><div><img class="s-custom-image-preview js-image-img" src="<?php if (!empty($_smarty_tpl->tpl_vars['custom_image']->value['file_name'])){?><?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['custom_image']->value['file_name'];?>
?t=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['custom_image']->value['file_mtime'])===null||$tmp==='' ? null : $tmp);?>
<?php }?>"></div><div class="s-custom-image-params"><span class="hint"><span class="js-image-width"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['custom_image']->value['width'])===null||$tmp==='' ? null : $tmp);?>
</span>&times;<span class="js-image-height"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['custom_image']->value['height'])===null||$tmp==='' ? null : $tmp);?>
</span>,<span class="s-image-size js-image-size"><?php if (!empty($_smarty_tpl->tpl_vars['custom_image']->value['file_size'])){?><?php echo smarty_modifier_wa_format_file_size($_smarty_tpl->tpl_vars['custom_image']->value['file_size'],'%0.0f','Б,КБ,МБ');?>
<?php }?></span></span><span><a class="small inline-link js-remove-custom-backgorund" href="javascript:void(0);" title="Удалить">&nbsp;<i class="icon10 no"></i>&nbsp;<b><i>Удалить</i></b></a></span></div></div><?php }elseif($_smarty_tpl->tpl_vars['custom_image']->value===null){?><span class="hint">Файл не найден. <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['auth_form_background'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><div class="stretch"<?php if (empty($_smarty_tpl->tpl_vars['custom_image']->value)){?> style="display: none;"<?php }?>><input class="js-stretch-checkbox" type="checkbox" value="1" name="auth_form_background_stretch" id="installer-auth-stretch-background"<?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background_stretch']){?> checked="checked"<?php }?>><label for="installer-auth-stretch-background">Растянуть изображение на весь экран</label></div></div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<div class="s-auth-settings-page blank block double-padded" id="s-auth-settings-page">
    <h1 class="s-page-header">Вход в&nbsp;бекенд</h1>
    <div class="s-description">Настройте, как пользователи должны входить в бекенд вашего Вебасиста.</div>

    <?php if ($_smarty_tpl->tpl_vars['is_waid_connected']->value){?>
        <div class="s-description">
            <div>
                <input type="hidden" name="is_force_auth" value="0" />
                <input name="is_backend_auth_forced" class="ibutton js-force-auth-toggle"
                       type="checkbox" value="1"
                        <?php if ($_smarty_tpl->tpl_vars['is_backend_auth_forced']->value){?> checked="checked"<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['is_user_bound_to_webasyst_id']->value){?>disabled="disabled"<?php }?>>

                <div class="s-force-description">
                    <strong><i class="icon16 ws waid-green"></i> 
                        <?php echo sprintf(_ws('Use only sign-in option with Webasyst ID — <span class="%s">recommended</span>'),'s-green');?>

                    </strong>
                    <span class="js-force-save-status s-force-save-status"><i class="icon16 yes"></i> Сохранено</span>
                </div>
            </div>
            <div class="hint">
                <?php echo sprintf(_ws('When sign-in with Webasyst ID is enabled by default, the usual sign-in method is disabled, with all its configuration saved for later use. Backend users who are not yet connected to Webasyst ID will be able to get connected later on, or you may send them an email invitation in section “<a href="%s">Sign-in with Webasyst ID</a>”. Newly added users will get connected to Webasyst ID right away.'),$_smarty_tpl->tpl_vars['waid_settings_link']->value);?>

            </div>
        </div>
        <div class="js-auth-settings-fields-block-cover s-auth-settings-fields-block-cover"></div>
    <?php }?>

    <div class="s-auth-settings-fields-block js-auth-settings-fields-block">

        <form action="?module=settingsAuthSave">
            <div class="field-group s-auth-config-params">
                
                <div class="field">
                    <div class="name">Система паролей</div>
                    <div class="value js-auth-type-select">
                        <?php $_smarty_tpl->tpl_vars['_auth_type'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['auth_type'])===null||$tmp==='' ? waAuthConfig::AUTH_TYPE_USER_PASSWORD : $tmp), null, 0);?>
                        <?php if (empty($_smarty_tpl->tpl_vars['email_channels']->value)){?>
                            <?php $_smarty_tpl->tpl_vars['_auth_type'] = new Smarty_variable(waAuthConfig::AUTH_TYPE_USER_PASSWORD, null, 0);?>
                        <?php }?>
                        <ul class="menu-v" style="margin-top: -4px;">
                            <?php  $_smarty_tpl->tpl_vars['_auth_type_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_auth_type_info']->_loop = false;
 $_smarty_tpl->tpl_vars['_auth_type_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_auth_type_info']->key => $_smarty_tpl->tpl_vars['_auth_type_info']->value){
$_smarty_tpl->tpl_vars['_auth_type_info']->_loop = true;
 $_smarty_tpl->tpl_vars['_auth_type_id']->value = $_smarty_tpl->tpl_vars['_auth_type_info']->key;
?>
                                <?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_auth_type_info']->value['name'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_is_checked'] = new Smarty_variable($_smarty_tpl->tpl_vars['_auth_type']->value===$_smarty_tpl->tpl_vars['_auth_type_id']->value, null, 0);?>
                                <li class="js-auth-type">
                                    <label>
                                        <input type="radio" name="auth_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_auth_type_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_is_checked']->value){?> checked="checked"<?php }?><?php if (empty($_smarty_tpl->tpl_vars['email_channels']->value)&&!$_smarty_tpl->tpl_vars['_is_checked']->value){?> disabled<?php }?>>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                        <?php if ($_smarty_tpl->tpl_vars['_auth_type_id']->value===waAuthConfig::AUTH_TYPE_ONETIME_PASSWORD){?>
                                            <i class="icon16 exclamation" style="display: none;"></i>
                                        <?php }?>
                                    </label>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">Повторная отправка кода подтверждения</div>
                    <div class="value">
                        <label>
                            Интервал в секундах перед отправкой следующего кода подтверждения:
                            <input type="text" class="semi" name="timeout" value="<?php echo $_smarty_tpl->tpl_vars['onetime_password_timeout']->value;?>
">
                        </label>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">Шаблоны email-уведомлений</div>
                    <div class="value">
                        <?php if (empty($_smarty_tpl->tpl_vars['email_channels']->value)){?>
                            <div class="errormsg"><i class="icon16 exclamation"></i> Введите email-адрес отправителя </div>
                            <div>
                                <?php echo sprintf('Не заполнен email-адрес отправителя в разделе «<a href="%s">Настройки email</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email/");?>

                            </div>
                            <div>
                                Убедитесь в правильность настройки отправителя. Он используется для восстановления забытого пароля и доступа к бекенду в случае сбоя входа по одноразовому паролю.
                            </div>
                        <?php }else{ ?>
                            <select name="verification_channel_ids[]" class="js-channel-template-selector" data-channel-type="email">
                                <option value="">Выберите шаблон</option>
                                <?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['email_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_channel']->key;
?>
                                    <?php $_smarty_tpl->tpl_vars['_selected'] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['_id']->value,$_smarty_tpl->tpl_vars['auth_config']->value['verification_channel_ids']), null, 0);?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_selected']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php if ($_smarty_tpl->tpl_vars['_selected']->value){?>
                                        <?php $_smarty_tpl->tpl_vars['_selected_email_channel'] = new Smarty_variable($_smarty_tpl->tpl_vars['_channel']->value, null, 0);?>
                                    <?php }?>
                                <?php } ?>
                            </select>

                            <span>
                                <?php echo sprintf('Измените список в разделе «<a href="%s">Email-шаблоны</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email/template/");?>

                            </span>

                            
                            <div class="errormsg js-email-template-not-selected-msg" style="display: none;"><i class="icon16 exclamation"></i> Не выбрана группа email-шаблонов. </div>

                            <?php if (!function_exists('smarty_template_function_webasyst_showEmailChannelDiagnosticMessage')) {
    function smarty_template_function_webasyst_showEmailChannelDiagnosticMessage($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['webasyst_showEmailChannelDiagnosticMessage']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                <div class="s-channel-template-diagnostic-message js-channel-template-diagnostic-message <?php if ($_smarty_tpl->tpl_vars['is_template']->value){?>is-template<?php }?>" <?php if ($_smarty_tpl->tpl_vars['is_template']->value){?>style="display: none;"<?php }?>>
                                    <div class="errormsg s-error-text-wrapper"><i class="icon16 exclamation"></i> <span class="s-error-txt"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['text'])===null||$tmp==='' ? '' : $tmp);?>
</span></div>
                                    <div class="s-error-help-text-wrapper"> <span class="s-error-txt"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value['help_text'])===null||$tmp==='' ? '' : $tmp);?>
</span></div>
                                </div>
                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


                            <?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['email_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
?>
                                <div class="s-channel-template-diagnostic-messages js-channel-template-diagnostic-messages" data-channel-id="<?php echo $_smarty_tpl->tpl_vars['_channel']->value['id'];?>
" style="display: none;">
                                    <?php  $_smarty_tpl->tpl_vars['_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_message']->_loop = false;
 $_smarty_tpl->tpl_vars['_message_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['_channel']->value['diagnostic'])===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_message']->key => $_smarty_tpl->tpl_vars['_message']->value){
$_smarty_tpl->tpl_vars['_message']->_loop = true;
 $_smarty_tpl->tpl_vars['_message_id']->value = $_smarty_tpl->tpl_vars['_message']->key;
?>
                                        <?php smarty_template_function_webasyst_showEmailChannelDiagnosticMessage($_smarty_tpl,array('message'=>$_smarty_tpl->tpl_vars['_message']->value));?>

                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <?php smarty_template_function_webasyst_showEmailChannelDiagnosticMessage($_smarty_tpl,array('message'=>array(),'is_template'=>true));?>


                        <?php }?>
                    </div>
                </div>

                
                <div class="field js-phone-auth-settings-block">
                    <div class="name">Включить вход по номеру телефона</div>
                    <div class="value">

                        <?php $_smarty_tpl->tpl_vars['_is_checked'] = new Smarty_variable(in_array(waVerificationChannelModel::TYPE_SMS,$_smarty_tpl->tpl_vars['used_auth_methods']->value), null, 0);?>

                        <div>
                            <input type="hidden" name="used_auth_methods[sms]" value="0">
                            <input id="s-login-by-phone-toggle" class="ibutton s-login-by-phone-toggle js-login-by-phone-toggle js-auth-method-checkbox" name="used_auth_methods[sms]" data-method="sms" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['_is_checked']->value){?> checked="checked"<?php }?>>
                            <label for="s-login-by-phone-toggle"><span class="js-login-by-phone-status"><?php if ($_smarty_tpl->tpl_vars['_is_checked']->value){?>включено<?php }else{ ?>выключено<?php }?></span></label>
                        </div>

                        <div class="s-phone-channel-settings-block" <?php if (!$_smarty_tpl->tpl_vars['_is_checked']->value){?>style="display: none;"<?php }?>>
                            <select name="verification_channel_ids[]" class="js-channel-template-selector" data-channel-type="sms">
                                <option value="">Выберите шаблон</option>
                                <?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sms_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_channel']->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (in_array($_smarty_tpl->tpl_vars['_id']->value,$_smarty_tpl->tpl_vars['auth_config']->value['verification_channel_ids'])){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>

                            <span><?php echo sprintf('Измените список в разделе «<a href="%s">SMS-шаблоны</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/");?>
</span>

                            
                            <div class="errormsg js-sms-template-not-selected-msg" style="display: none;"><i class="icon16 exclamation"></i> Не выбрана группа шаблонов SMS-уведомлений. </div>

                        </div>

                        <div class="s-phone-channel-settings-block" <?php if (!$_smarty_tpl->tpl_vars['_is_checked']->value){?>style="display: none;"<?php }?>>
                            <div class="field">
                                <div class="name">Код междугородней связи</div>

                                <?php $_smarty_tpl->tpl_vars['_phone_transform_prefix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['phone_transform_prefix'])===null||$tmp==='' ? array() : $tmp), null, 0);?>

                                <div class="value">
                                    <?php $_smarty_tpl->tpl_vars['_input_code'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_phone_transform_prefix']->value['input_code'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                                    <input type="text" class="short" name="phone_transform_prefix[input_code]" value="<?php echo $_smarty_tpl->tpl_vars['_input_code']->value;?>
">
                                    <div class="hint" style="margin-top: 10px;">
                                        Введите код, с помощью которого совершаются междугородние звонки в вашей стране. Пример кода для Российской Федерации: 8.<br>
                                        Если указан код междугородней связи, то в номерах посетителей сайта он будет заменен на телефонный код страны.
                                    </div>
                                </div>

                                <div class="name">Код страны</div>
                                <div class="value">
                                    <?php $_smarty_tpl->tpl_vars['_output_code'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_phone_transform_prefix']->value['output_code'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                                    + <input type="text" class="short" name="phone_transform_prefix[output_code]" value="<?php echo $_smarty_tpl->tpl_vars['_output_code']->value;?>
">
                                    <div class="hint" style="margin-top: 10px;">
                                        Международный код вашей страны, который будет использоваться в телефонных номерах посетителей сайта вместо кода междугородней связи.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="field-group">
                <h2>Форма входа</h2>
                
                <div class="field js-captcha-wrapper">
                    <div class="name">
                        Капча
                        <div class="hint">Пользователь должен ввести символы с изображения</div>
                    </div>
                    <div class="value no-shift">
                        <?php $_smarty_tpl->tpl_vars['_variants'] = new Smarty_variable($_smarty_tpl->tpl_vars['login_captcha_variants']->value, null, 0);?>
                        <ul class="menu-v" style="margin-top: -4px;">
                            <?php  $_smarty_tpl->tpl_vars['_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_info']->_loop = false;
 $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_info']->key => $_smarty_tpl->tpl_vars['_info']->value){
$_smarty_tpl->tpl_vars['_info']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->value = $_smarty_tpl->tpl_vars['_info']->key;
?>
                                <?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_info']->value['name'], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['_is_checked'] = new Smarty_variable($_smarty_tpl->tpl_vars['auth_config']->value['login_captcha']===$_smarty_tpl->tpl_vars['_value']->value, null, 0);?>
                                <li>
                                    <label>
                                        <input type="radio" name="login_captcha" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_is_checked']->value){?> checked="checked"<?php }?>>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                                    </label>
                                </li>
                            <?php } ?>
                        </ul>
                        <span class="hint">
                            <?php echo sprintf('<a href="%s">Выбрать стандартную капчу Webasyst или Google reCAPTCHA</a>',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/captcha/");?>

                        </span>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        Автоматический вход
                        <div class="hint">Флажок «Запомнить меня»</div>
                    </div>
                    <div class="value no-shift">
                        <input type="hidden" name="rememberme" value="0" />
                        <input id="s-rememberme-auth" name="rememberme" class="ibutton js-rememberme-auth-toogle" type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['auth_config']->value['rememberme']){?> checked="checked"<?php }?>>
                        <label for="s-rememberme-auth"><span class="js-rememberme-auth-status"><?php if ($_smarty_tpl->tpl_vars['auth_config']->value['rememberme']){?>включено<?php }else{ ?>выключено<?php }?></span></label>
                    </div>
                </div>

                
                <div class="field s-auth-background">
                    <div class="name">
                        Фон формы входа
                    </div>
                    <div class="value">
                        <ul class="s-background-images js-background-images">
                            <?php  $_smarty_tpl->tpl_vars['_background'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_background']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backgrounds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_background']->key => $_smarty_tpl->tpl_vars['_background']->value){
$_smarty_tpl->tpl_vars['_background']->_loop = true;
?>
                                <li<?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']=="stock:".((string)$_smarty_tpl->tpl_vars['_background']->value)){?> class="selected"<?php }?>>
                                    <a href="javascript:void(0);" data-value="stock:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_background']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/backgrounds/thumbs/<?php echo $_smarty_tpl->tpl_vars['_background']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_background']->value;?>
">
                                    </a>
                                </li>
                            <?php } ?>

                            <?php  $_smarty_tpl->tpl_vars['_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_image']->key => $_smarty_tpl->tpl_vars['_image']->value){
$_smarty_tpl->tpl_vars['_image']->_loop = true;
?>
                                <li<?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']==$_smarty_tpl->tpl_vars['_image']->value){?> class="selected"<?php }?>>
                                    <a href="javascript:void(0);" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_image']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['images_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['_image']->value;?>
?t=<?php echo filemtime(((string)$_smarty_tpl->tpl_vars['images_path']->value)."/".((string)$_smarty_tpl->tpl_vars['_image']->value));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['_image']->value;?>
">
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <input type="hidden" name="auth_form_background" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['auth_form_background'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                    
                    <div class="value js-upload-preview">
                        <input type="file" class="js-background-upload">
                        <i class="icon16 loading" style="display: none;"></i>
                        <span class="errormsg js-error-upload"></span>
                        <div class="js-custom-preview-wrapper">
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['auth_form_background']){?>
                                <?php smarty_template_function__renderCustomBackground($_smarty_tpl,array('custom_image'=>$_smarty_tpl->tpl_vars['custom_image']->value));?>

                            <?php }?>
                        </div>
                    </div>
                </div>

                
                <div class="field">
                    <div class="value">
                        <div class="s-login-form-preview shadowed">
                    <div class="s-login-form-constructor js-login-form-constructor">
                        
                        <div class="field">
                            <h2 class="s-company-name" title="<?php echo $_smarty_tpl->tpl_vars['_account_name']->value;?>
">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_account_name']->value,20,'...');?>

                            </h2>
                        </div>
                        
                        <div data-field-id="login" class="field" style="position: relative;">
                            <div class="s-field-name name">
                                <span class="js-editable-wrapper" title="Измените подпись к полю">
                                    <label class="s-editable-item s-editable-text js-editable-item">
                                        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['login_caption'])===null||$tmp==='' ? _ws('Login') : $tmp), ENT_QUOTES, 'UTF-8', true);?>

                                    </label>
                                    <input type="text" class="s-editable-field-label hidden" name="login_caption" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['login_caption'])===null||$tmp==='' ? _ws('Login') : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </span>
                            </div>
                            <div class="value placeholder" title="Измените текст подсказки">
                                <input type="text" class="fill s-placeholder-input" name="login_placeholder" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth_config']->value['login_placeholder'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                            </div>
                        </div>

                        
                        <div class="field">
                            <div class="s-field-name name">Пароль</div>
                            <div class="value">
                                <input type="text" class="fill s-placeholder-input" name="password_placeholder" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['auth_config']->value['password_placeholder'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>

                        
                        <div class="field js-remember-me-preview"<?php if (!$_smarty_tpl->tpl_vars['auth_config']->value['rememberme']){?> style="display: none;"<?php }?>>
                            <div class="value">
                                <label><input type="checkbox" checked="checked" disabled /> Запомнить меня</label>
                            </div>
                        </div>

                        
                        <div class="field js-captcha-preview"<?php if ($_smarty_tpl->tpl_vars['auth_config']->value['login_captcha']!==waAuthConfig::LOGIN_CAPTCHA_ALWAYS){?> style="display: none;"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['demo_captcha']->value->getOption('invisible')){?>
                                <div class="hint">Будет использована невидимая капча</div>
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['demo_captcha']->value->getHtml();?>

                            <?php }?>
                        </div>

                        
                        <div>
                            <input type="button" value="Войти" disabled />
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="c-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/auth/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>
        </form>

        <div class="js-onetime-password-confirm-dialog">
            <?php /*  Call merged included template "./SettingsOnetimePasswordAuthConfirmDialog.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsOnetimePasswordAuthConfirmDialog.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2062118381633a8265916502-25619631');
content_633a82659b5ed9_73347601($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsOnetimePasswordAuthConfirmDialog.inc.html" */?>
        </div>

        

        
        
        <div class="js-remove-text" style="display: none;">
            <h3>Удалить фоновое изображение?</h3>
        </div>
        
        <div class="js-remove-buttons" style="display: none;">
            <input type="submit" class="button red" value="Удалить" />
            или
            <a class="cancel" href="javascript:void(0);">отмена</a>
        </div>

        
        <div class="js-preview-template" style="display: none;">
            <?php smarty_template_function__renderCustomBackground($_smarty_tpl,array('custom_image'=>array()));?>

        </div>

        
        <li class="selected js-list-preview-template" style="display: none;">
            <a href="javascript:void(0);" data-value="">
                <img src="" alt="">
            </a>
        </li>
    </div>
</div>

<?php $_smarty_tpl->tpl_vars['_locale'] = new Smarty_variable(array('enabled'=>_ws('enabled'),'disabled'=>_ws('disabled'),'login_names'=>array('login'=>_ws('Login'),'phone'=>_ws('Phone'),'login_or_phone'=>_ws('Login or phone')),'disabled_toggle_reason'=>_ws('You need to connect Webasyst ID to your account.')), null, 0);?>

<script type="text/javascript">
    (function($) {
        new WASettingsAuth({
            $wrapper: $("#s-auth-settings-page"),
            locale: <?php echo json_encode($_smarty_tpl->tpl_vars['_locale']->value);?>

        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:13
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsOnetimePasswordAuthConfirmDialog.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_633a82659b5ed9_73347601')) {function content_633a82659b5ed9_73347601($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('s-onetime-password-auth-confirm-dialog', null, 0);?>
<div class="dialog width600px <?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
 js-is-template" style="display: none;">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Выбрать вход по одноразовому паролю?</h1>
                <p>
                    При выборе этого варианта пользователям бекенда при каждом входе отправляется новый одноразовый пароль. Поэтому нужно убедиться, что стабильно отправляются и доставляются либо email-, либо SMS-уведомления или оба типа уведомлений, чтобы пользователи всегда могли успешно входить с одноразовыми паролями.
                </p>
                <p class="js-email-channel-text">
                    <?php echo sprintf('Проверьте в разделе «<a href="%s">%s</a>», чтобы правильно отправлялись email-уведомления, основанные на шаблоне «%s».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email/template/:id:/onetime_password",'Email-шаблоны','Одноразовый пароль');?>

                </p>
                <p class="js-sms-channel-text" style="display: none;">
                    <?php echo sprintf('Также проверьте в разделе «<a href="%s">%s</a>», чтобы правильно отправлялись SMS-сообщения, сформированные по шаблону «%s». Учитывайте, что отправка SMS может иногда не срабатывать, например, из-за исчерпания баланса у провайдера.',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/:id:/",'SMS-шаблоны','Одноразовый пароль');?>

                </p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input type="button" class="button green" value="Выбрать"> или
                <a href="javascript:void(0)" class="cancel">отмена</a>
            </div>
        </div>
    </div>
</div>

<?php }} ?>
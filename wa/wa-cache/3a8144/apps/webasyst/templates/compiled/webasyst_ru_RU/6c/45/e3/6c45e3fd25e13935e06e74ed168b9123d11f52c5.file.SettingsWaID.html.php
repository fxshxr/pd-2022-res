<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:16
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsWaID.html" */ ?>
<?php /*%%SmartyHeaderCode:82760470633a8268e45d31-29679426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c45e3fd25e13935e06e74ed168b9123d11f52c5' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsWaID.html',
      1 => 1648029634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82760470633a8268e45d31-29679426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'is_connected' => 0,
    'is_backend_auth_forced' => 0,
    'is_user_bound_to_webasyst_id' => 0,
    'not_connected_users' => 0,
    'not_connected_users_count' => 0,
    'user' => 0,
    '_email' => 0,
    '_link_text' => 0,
    'connected_users' => 0,
    'users_count' => 0,
    'connected_users_count' => 0,
    '_title' => 0,
    'wa_backend_url' => 0,
    'upgrade_all' => 0,
    'webasyst_id_auth_url' => 0,
    '_locale' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8268e9be99_49669033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8268e9be99_49669033')) {function content_633a8268e9be99_49669033($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Вход с Webasyst ID — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>

<div class="s-waid-settings-page blank block double-padded" id="s-waid-settings-page">
    <h1 class="s-page-header">
        Вход с Webasyst ID
        <?php if ($_smarty_tpl->tpl_vars['is_connected']->value){?>
            <a class="s-waid-disconnect js-disconnect-to-waid">
                <i class="icon16 cross-bw"></i> Отключить вход с Webasyst ID для всех пользователей
            </a>
        <?php }?>
    </h1>
    <div class="s-description">
        <strong>Вход с Webasyst ID</strong> — это универсальный способ входа, объединяющий Центр заказчика Webasyst и вход в бекенд Webasyst на ваших личных доменах.
        Webasyst ID позволяет пользоваться всеми приложениями, сайтами и сервисами Webasyst и при этом избежать использования разных паролей на разных доменах.
        <?php echo sprintf(_ws('%sRead more%s.'),'<a href="javascript:void(0);" class="underline js-webasyst-id-help-link">','</a>');?>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['is_connected']->value){?>

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
            <div class="hint">При использовании входа с Webasyst ID по умолчанию простой вход отключается с сохранением всех настроек и возможностью возврата к ним. Пользователи бекенда, которые не подключились к Webasyst ID, смогут подключиться позже самостоятельно, либо вы можете отправить им email-приглашение. Новые пользователи бекенда будут сразу подключаться к Webasyst ID.</div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['not_connected_users']->value){?>
            <div class="field-group s-waid-not-connected-users-block">
                <h2><em>
                    Ожидающие подключения к Webasyst ID
                    (<?php echo _ws("%d user","%d users",$_smarty_tpl->tpl_vars['not_connected_users_count']->value);?>
)
                </em></h2>
                <div class="s-waid-description-block">

                    <p class="s-description js-warning hidden"><em>Приглашения отправляются. Не закрывайте эту страницу до завершения процесса.</em></p>

                    <div class="s-waid-invite-progressbar-wrapper hidden js-waid-invite-progressbar-wrapper">
                        <div class="progressbar blue s-waid-invite-progressbar js-invite-progressbar">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner js-invite-progressbar-progress"></div>
                            </div>
                        </div>

                        <i class="icon16 loading s-waid-icon js-in-progress hidden"></i>
                        <i class="icon16 yes s-waid-icon js-done hidden"></i>
                        <i class="icon16 cross s-waid-icon js-fail hidden"></i>
                        <em class="errormsg js-error-msg"></em>
                        <div class="s-waid-report"></div>
                    </div>

                </div>
                <table class="s-not-connected-users zebra">

                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['not_connected_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                        <tr>
                            <td class="min-width">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url_32'];?>
"></a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </td>
                            <td class="nowrap">
                                <span class="js-await-user-confirmation">
                                    <em>
                                        Ожидание подтверждения пользователем
                                    </em>
                                </span>
                            </td>
                            <td>
                                <?php $_smarty_tpl->tpl_vars['_email'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['user']->value['email'][0])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['_email']->value){?>
                                    <div>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value['is_current_contact']){?>
                                            <a href="javascript:void(0)" class="js-connect-yourself bold" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                                                <i class="icon16 ws waid-green"></i> Подключить Webasyst ID для моего аккаунта
                                            </a>
                                        <?php }else{ ?>
                                            <?php if (!$_smarty_tpl->tpl_vars['user']->value['waid_invite_datetime']){?>
                                                <?php $_smarty_tpl->tpl_vars['_link_text'] = new Smarty_variable('Отправить инструкцию по подключению по email', null, 0);?>
                                            <?php }else{ ?>
                                                <?php $_smarty_tpl->tpl_vars['_link_text'] = new Smarty_variable('Выслать еще раз', null, 0);?>
                                            <?php }?>
                                            <a href="javascript:void(0)" class="js-send-email-invitation nowrap" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                                                <i class="icon16 email"></i> <span class="js-text"><?php echo $_smarty_tpl->tpl_vars['_link_text']->value;?>
</span> <i class="icon16 loading js-loading" style="display: none;"></i>
                                                <span class="hint js-last-send-datetime"><?php if ($_smarty_tpl->tpl_vars['user']->value['waid_invite_datetime']){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['user']->value['waid_invite_datetime'],'humandatetime');?>
<?php }?></span>
                                            </a>
                                            <span class="js-sent-email-ok hidden nowrap">
                                                <i class="icon16 email"></i> Приглашение отправлено <i class="icon16 yes"></i>
                                            </span>
                                        <?php }?>
                                        <em class="errormsg js-error" style="display: none"></em>
                                    </div>
                                <?php }else{ ?>
                                    <span class="gray">Email-адрес пользователя неизвестен.</span>
                                <?php }?>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['connected_users']->value){?>
            <div class="field-group">
                <h2>
                    Успешно подключены к Webasyst ID
                    <?php if ($_smarty_tpl->tpl_vars['users_count']->value==$_smarty_tpl->tpl_vars['connected_users_count']->value){?>
                        (все пользователи!)
                    <?php }else{ ?>
                        (<?php echo _ws("%d user","%d users",$_smarty_tpl->tpl_vars['connected_users_count']->value);?>
)
                    <?php }?>
                </h2>
                <table class="s-connected-users zebra">
                    <thead>
                    <tr>
                        <th class="min-width"></th>
                        <th>Имя</th>
                        <th>Webasyst ID</th>
                        <th>Подключен</th>
                        <th>Последний вход с Webasyst ID</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['connected_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                        <tr>
                            <td class="min-width">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url_32'];?>
"></a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </td>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['user']->value['link'];?>
" class="bold nowrap"><i class="icon16 ws waid-green"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['webasyst_id'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </td>
                            <td class="nowrap"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['user']->value['waid_create_datetime'],'humandatetime');?>
</td>
                            <td class="nowrap"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['user']->value['waid_login_datetime'],'humandatetime');?>
</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php }?>
    <?php }else{ ?>
        <div class="field-group s-waid-not-connected-block">
            <h3>Разрешить пользователям использовать их аккаунты Webasyst ID для входа в бекенд:</h3>

            <div class="w-waid-connect-panel">
                <div class="w-waid-connect-button-block">
                    <input type="button" class="button blue js-connect-to-waid" value="Включить Webasyst ID">
                </div>
                <?php if ($_smarty_tpl->tpl_vars['users_count']->value>1){?>
                    <div class="w-waid-upgrade-checkbox-block">
                        <input type="checkbox" class="js-upgrade-all" id="upgrade-all" checked>
                    </div>
                    <div class="w-waid-upgrade-block-hint">
                        <label for="upgrade-all">
                            <i class="icon16 email"></i>и отправить пользователям email-приглашения с ссылкой для быстрого подключения
                        </label><br>
                        <span class="hint">Если email-приглашения не будут отправлены или получены, пользователи все равно увидят в бекенде уведомление со ссылкой для подключения. Пользователи также могут самостоятельно подключать или отключать вход с Webasyst ID в своем профиле.</span>
                    </div>
                <?php }?>
            </div>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['_locale'] = new Smarty_variable(array('disabled_toggle_reason'=>_ws('You need to connect Webasyst ID to your account.')), null, 0);?>

    <script>
        (function ($) {
            $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
            new WASettingsWaID({
                $wrapper: $('#s-waid-settings-page'),
                wa_backend_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_backend_url']->value);?>
,
                upgrade_all: <?php echo json_encode($_smarty_tpl->tpl_vars['upgrade_all']->value);?>
,
                webasyst_id_auth_url: <?php echo json_encode($_smarty_tpl->tpl_vars['webasyst_id_auth_url']->value);?>
,
                locale: <?php echo json_encode($_smarty_tpl->tpl_vars['_locale']->value);?>
,
            });
        })(jQuery);
    </script>

</div>
<?php }} ?>
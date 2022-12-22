<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:25
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\actions-legacy\profile\Profile.html" */ ?>
<?php /*%%SmartyHeaderCode:842011081633a8325c0de55-40825634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade5c45e276a711889eb06a42994317feb9319ca' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\actions-legacy\\profile\\Profile.html',
      1 => 1637225471,
      2 => 'file',
    ),
    '657cf7ab55ea7489a5d959408ebcae2070d28605' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\actions-legacy\\schedule\\Schedule.inc.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842011081633a8325c0de55-40825634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'user' => 0,
    '_user_id' => 0,
    '_is_admin' => 0,
    '_is_my_profile' => 0,
    'backend_profile' => 0,
    '_' => 0,
    'can_edit' => 0,
    'user_name_formatted' => 0,
    '_can_edit' => 0,
    'groups' => 0,
    'wa_app_url' => 0,
    '_id' => 0,
    '_name' => 0,
    '_g' => 0,
    'invite' => 0,
    'top' => 0,
    'top_field' => 0,
    'user_events' => 0,
    'is_own_profile' => 0,
    'webasyst_id_auth_url' => 0,
    'customer_center_auth_url' => 0,
    '_show_text' => 0,
    'can_view_external_calendars_info' => 0,
    'wa_backend_url' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8325d0ada0_76173381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8325d0ada0_76173381')) {function content_633a8325d0ada0_76173381($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user("id"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_admin'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin($_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_my_profile'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['user']->value['id'])&&$_smarty_tpl->tpl_vars['user']->value['id']==$_smarty_tpl->tpl_vars['_user_id']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_can_edit'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_is_admin']->value||$_smarty_tpl->tpl_vars['_is_my_profile']->value), null, 0);?><div class="t-profile-page"><div class="shadowed"><div class="t-profile block double-padded"><div class="t-profile-actions float-right"><ul class="menu-h profile-header-links"><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['header_links_li']);?>
<?php } ?><?php if ($_smarty_tpl->tpl_vars['can_edit']->value){?><li><a href="javascript:void(0);" class="edit-link"><i class="icon16 edit"></i>Редактировать пользователя</a></li><?php }?><?php if (teamUser::canDelete($_smarty_tpl->tpl_vars['user']->value)){?><li><a href="javascript:void(0);" class="delete-link"><i class="icon16 delete"></i>Удалить</a></li><?php }?></ul></div><div class="profile image144px"><div class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhoto2x(96);?>
" class="userpic t-userpic"><?php if ($_smarty_tpl->tpl_vars['can_edit']->value){?><div class="wa-contact-photo-buttons"><div class="photo-change-link"><a href="javascript:void(0)">Изменить фото</a></div></div><?php }?><!-- plugin hook: 'backend_profile.photo' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['photo']);?>
<?php } ?></div><div class="details"><!-- plugin hook: 'backend_profile.before_header' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['before_header']);?>
<?php } ?><h1><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['title'])){?><span class="title" style="margin: 0 4px 0 0;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><span class="contact-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name_formatted']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['user']->value['login'])){?><span class="hint" style="margin: 0 0 0 4px;">@<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><!-- plugin hook: 'backend_profile.header' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['header']);?>
<?php } ?></h1><!-- plugin hook: 'backend_profile.after_header' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['after_header']);?>
<?php } ?><?php if (!$_smarty_tpl->tpl_vars['user']->value['is_company']){?><p class="jobtitle-company"><?php if ($_smarty_tpl->tpl_vars['user']->value['jobtitle']){?><span class="title <?php if ($_smarty_tpl->tpl_vars['_can_edit']->value){?>editable js-jobtitle-editable<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['jobtitle'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?><?php if ($_smarty_tpl->tpl_vars['user']->value['jobtitle']&&$_smarty_tpl->tpl_vars['user']->value['company']){?><span class="at"> в </span><?php }?><?php if ($_smarty_tpl->tpl_vars['user']->value['company']){?><span class="company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p><?php }?><?php if ($_smarty_tpl->tpl_vars['user']->value['is_user']>0){?><p><?php if ($_smarty_tpl->tpl_vars['groups']->value){?><?php $_smarty_tpl->tpl_vars['_g'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_name']->key => $_smarty_tpl->tpl_vars['_name']->value){
$_smarty_tpl->tpl_vars['_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_name']->key;
?><?php $_smarty_tpl->createLocalArrayVariable('_g', null, 0);
$_smarty_tpl->tpl_vars['_g']->value[] = "<a href=\"".((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."group/".((string)$_smarty_tpl->tpl_vars['_id']->value)."/\">".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true))."</a>";?><?php } ?><?php echo join(', ',$_smarty_tpl->tpl_vars['_g']->value);?>
<?php }else{ ?>Этот пользователь не включен ни в одну из групп.<?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin()){?><a href="javascript:void(0)" class="inline-link small" id="header-customize-groups-link">&nbsp;<b>Редактировать группы</b></a><?php }?><?php }?></p><?php }elseif($_smarty_tpl->tpl_vars['user']->value['is_user']<0){?><p class="grey">Доступ выключен</p><?php }elseif($_smarty_tpl->tpl_vars['invite']->value){?><p><em>Отправлено приглашение войти в команду.</em></p><?php }?><span class="js-webasyst-id-unbind-auth hidden"></span><!-- plugin hook: 'backend_profile.before_top' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['before_top']);?>
<?php } ?><ul class="menu-v compact" id="contact-info-top"><?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?><li class="top-field-<?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!='im'){?><?php if ($_smarty_tpl->tpl_vars['top_field']->value['icon']){?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"></i><?php }?><?php }?><?php echo $_smarty_tpl->tpl_vars['top_field']->value['value'];?>
</li><?php } ?></ul><?php if ($_smarty_tpl->tpl_vars['user_events']->value){?><div class="line"><div class="t-event-wrapper"><div class="t-event-block" style="background:<?php echo $_smarty_tpl->tpl_vars['user_events']->value[0]['bg_color'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['user_events']->value[0]['font_color'];?>
;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_events']->value[0]['summary'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['user_events']->value[0]['calendar_id']=='birthday'){?>&nbsp;&mdash; <?php echo waDateTime::format('shortdate',(date('Y')).("-".((string)$_smarty_tpl->tpl_vars['user']->value['birth_month'])."-".((string)$_smarty_tpl->tpl_vars['user']->value['birth_day'])));?>
<?php }?></div></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['is_own_profile']->value)){?><?php if ($_smarty_tpl->tpl_vars['webasyst_id_auth_url']->value){?><div class="waid-login"><a class="waid-auth-link js-webasyst-id-auth" href="javascript:void(0)"><span class="icon"></span>&nbsp;<?php echo sprintf(_w('Enable sign-in with %s'),'Webasyst ID');?>
</a><a href="javascript:void(0);" class="bold hint js-webasyst-id-help-link">Что такое Webasyst ID?</a></div><?php }elseif($_smarty_tpl->tpl_vars['customer_center_auth_url']->value){?><div class="" style="margin-top: 2em;"><div class="js-customer-center-auth-link-wrapper waid-login"><a class="waid-auth-link js-customer-center-auth" href="<?php echo $_smarty_tpl->tpl_vars['customer_center_auth_url']->value;?>
"><i class="icon16" style="background-image: url('/wa-content/img/wa-settings/ws-waid-green.svg'); background-size: 16px 16px; background-position: 0 0;"></i>Перейти в Центр заказчика Webasyst</a></div></div><?php }?><?php }?><!-- plugin hook: 'backend_profile.after_top' --><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_profile']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['after_top']);?>
<?php } ?></div></div></div><div class="t-calendar-place is-short"><?php /*  Call merged included template "../schedule/Schedule.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('../schedule/Schedule.inc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('context'=>'profile'), 0, '842011081633a8325c0de55-40825634');
content_633a8325c79149_40789466($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../schedule/Schedule.inc.html" */?><?php $_smarty_tpl->tpl_vars['_show_text'] = new Smarty_variable(sprintf_wp("show %s weeks",5), null, 0);?><div class="t-actions-wrapper js-calendar-toggle" data-show-text="<?php echo $_smarty_tpl->tpl_vars['_show_text']->value;?>
" data-hide-text="скрыть"><div class="t-layout"><div class="t-column left"></div><div class="t-column"><a class="t-action inline-link t-calendar-toggle" href="javascript:void(0);"><i class="icon16 down"></i><b><i><span class="text"><?php echo $_smarty_tpl->tpl_vars['_show_text']->value;?>
</span></i></b></a></div><div class="t-column right"><?php if ($_smarty_tpl->tpl_vars['can_view_external_calendars_info']->value){?><a class="t-action inline-link js-show-outer-calendar-manager" href="javascript:void(0);"><i class="icon16 settings"></i><b><i>Персональные настройки календаря</i></b></a><?php }?></div></div></div></div></div><?php echo $_smarty_tpl->tpl_vars['wa']->value->contactProfileTabs($_smarty_tpl->tpl_vars['user']->value['id'],array('selected_tab'=>waRequest::param('tab','activity','string')));?>
<script>(function ($) {$.team.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['user_name_formatted']->value);?>
);new Profile({$wrapper: $('#contact-info-top').closest('.t-profile-page'),photo_dialog_url: "<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
?module=profile&action=photo&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
",backend_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_backend_url']->value);?>
,is_own_profile: <?php echo json_encode($_smarty_tpl->tpl_vars['is_own_profile']->value);?>
,wa_app_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
,webasyst_id_auth_url: <?php echo json_encode($_smarty_tpl->tpl_vars['webasyst_id_auth_url']->value);?>
,user: {id: <?php echo json_encode($_smarty_tpl->tpl_vars['user']->value['id']);?>
},wa_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
,wa_version: <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->version());?>
});})(jQuery);</script></div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:25
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\actions-legacy\schedule\Schedule.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_633a8325c79149_40789466')) {function content_633a8325c79149_40789466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_join')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system/vendors/smarty-plugins\\modifier.join.php';
?><?php $_smarty_tpl->tpl_vars['_is_profile'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['context']->value)&&$_smarty_tpl->tpl_vars['context']->value=="profile"), null, 0);?><?php $_smarty_tpl->tpl_vars['_user_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user("id"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_admin'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin($_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?><?php $_smarty_tpl->tpl_vars['_limit'] = new Smarty_variable(2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['selected_calendar_id']->value&&!empty($_smarty_tpl->tpl_vars['calendars']->value[$_smarty_tpl->tpl_vars['selected_calendar_id']->value])){?><?php $_smarty_tpl->tpl_vars['selected_calendar'] = new Smarty_variable($_smarty_tpl->tpl_vars['calendars']->value[$_smarty_tpl->tpl_vars['selected_calendar_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['selected_calendar'] = new Smarty_variable($_smarty_tpl->tpl_vars['calendars']->value["all"], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['selected_user_id']->value&&!empty($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['selected_user_id']->value])){?><?php $_smarty_tpl->tpl_vars['selected_user'] = new Smarty_variable($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['selected_user_id']->value], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['selected_user'] = new Smarty_variable($_smarty_tpl->tpl_vars['users']->value["all"], null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value)){?><div class="t-calendar-wrapper"><?php if (empty($_smarty_tpl->tpl_vars['hide_labels']->value)){?><div class="t-labels-wrapper"><table><tr><td class="t-column">Пн</td><td class="t-column">Вт</td><td class="t-column">Ср</td><td class="t-column">Чт</td><td class="t-column">Пт</td><td class="t-column">Сб</td><td class="t-column">Вс</td></tr></table></div><?php }?><div class="t-calendar-block" id="t-calendar-block"><?php $_smarty_tpl->tpl_vars['_now'] = new Smarty_variable(waDateTime::format('Y-m-d'), null, 0);?><?php  $_smarty_tpl->tpl_vars['_week'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_week']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_week']->key => $_smarty_tpl->tpl_vars['_week']->value){
$_smarty_tpl->tpl_vars['_week']->_loop = true;
?><div class="t-week-row"><table class="t-week-background"><tr><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_week']->value['days_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_day']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
 $_smarty_tpl->tpl_vars['_day']->index++;
?><?php $_smarty_tpl->tpl_vars['_current_month'] = new Smarty_variable(date('Y-m'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['period_start']->value)){?><?php $_smarty_tpl->tpl_vars['_current_month'] = new Smarty_variable(date('Y-m',strtotime($_smarty_tpl->tpl_vars['period_start']->value)), null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['_is_current_month'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_current_month']->value===date('Y-m',strtotime($_smarty_tpl->tpl_vars['_day']->value['date']))), null, 0);?><?php $_smarty_tpl->tpl_vars['_day_classes'] = new Smarty_variable(array(), null, 0);?><?php if (($_smarty_tpl->tpl_vars['_day']->value['date']==((string)$_smarty_tpl->tpl_vars['_now']->value)." 00:00:00")){?><?php $_smarty_tpl->createLocalArrayVariable('_day_classes', null, 0);
$_smarty_tpl->tpl_vars['_day_classes']->value[] = "is-active";?><?php }elseif(!$_smarty_tpl->tpl_vars['_is_profile']->value&&!$_smarty_tpl->tpl_vars['_is_current_month']->value){?><?php $_smarty_tpl->createLocalArrayVariable('_day_classes', null, 0);
$_smarty_tpl->tpl_vars['_day_classes']->value[] = "is-unactive";?><?php }?><td class="t-column"><div class="t-day-ornament <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_day_classes']->value,'');?>
" data-date="<?php echo $_smarty_tpl->tpl_vars['_day']->value['date'];?>
"></div></td><?php } ?></tr></table><table class="t-week-table"><tr><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_week']->value['days_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_day']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
 $_smarty_tpl->tpl_vars['_day']->index++;
?><td class="t-column"><div class="t-day-wrapper"><?php echo waDateTime::date('j',$_smarty_tpl->tpl_vars['_day']->value['date']);?>
</div></td><?php } ?></tr><?php $_smarty_tpl->tpl_vars['_event_groups'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['_week']->value['events'],array()), null, 0);?><?php $_smarty_tpl->tpl_vars['_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['_event_groups']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_events_in_week'] = new Smarty_variable(array("view"=>array(array(),array(),array(),array(),array(),array(),array()),"all"=>array(array(),array(),array(),array(),array(),array(),array())), null, 0);?><?php  $_smarty_tpl->tpl_vars['_event_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_event_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_event_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_event_group']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_event_group']->key => $_smarty_tpl->tpl_vars['_event_group']->value){
$_smarty_tpl->tpl_vars['_event_group']->_loop = true;
 $_smarty_tpl->tpl_vars['_event_group']->iteration++;
?><tr><?php  $_smarty_tpl->tpl_vars['_event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_event_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_event']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->key => $_smarty_tpl->tpl_vars['_event']->value){
$_smarty_tpl->tpl_vars['_event']->_loop = true;
 $_smarty_tpl->tpl_vars['_event']->index++;
?><?php $_smarty_tpl->tpl_vars['_is_my_event'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['_event']->value['contact_id'])&&$_smarty_tpl->tpl_vars['_event']->value['contact_id']==$_smarty_tpl->tpl_vars['_user_id']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['_can_edit'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['_event']->value['can_edit']), null, 0);?><?php $_smarty_tpl->tpl_vars['_calendar'] = new Smarty_variable(array("id"=>null,"bg_color"=>"#f00","font_color"=>"#fff"), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['calendar_id'])&&!empty($_smarty_tpl->tpl_vars['calendars']->value[$_smarty_tpl->tpl_vars['_event']->value['calendar_id']])){?><?php $_smarty_tpl->tpl_vars['_calendar'] = new Smarty_variable($_smarty_tpl->tpl_vars['calendars']->value[$_smarty_tpl->tpl_vars['_event']->value['calendar_id']], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['_event_group']->iteration<=$_smarty_tpl->tpl_vars['_limit']->value){?><?php if (isset($_smarty_tpl->tpl_vars['_event']->value['colspan'])){?><?php if ($_smarty_tpl->tpl_vars['_event']->value['colspan']>0){?><?php $_smarty_tpl->tpl_vars['_is_birthday'] = new Smarty_variable(($_smarty_tpl->tpl_vars['_event']->value['calendar_id']=="birthday"), null, 0);?><?php $_smarty_tpl->tpl_vars['_is_part_of_day'] = new Smarty_variable((!$_smarty_tpl->tpl_vars['_event']->value['is_allday']&&$_smarty_tpl->tpl_vars['_event']->value['colspan']==1), null, 0);?><?php $_smarty_tpl->tpl_vars['_styles'] = new Smarty_variable(array(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['_event']->value['is_status']){?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "background: ".((string)$_smarty_tpl->tpl_vars['_calendar']->value['bg_color']).";";?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "color: ".((string)$_smarty_tpl->tpl_vars['_calendar']->value['font_color']).";";?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_styles', null, 0);
$_smarty_tpl->tpl_vars['_styles']->value[] = "color: ".((string)$_smarty_tpl->tpl_vars['_calendar']->value['bg_color']).";";?><?php }?><?php $_smarty_tpl->tpl_vars['_classes'] = new Smarty_variable(array(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['id'])&&!empty($_smarty_tpl->tpl_vars['_calendar']->value['id'])){?><?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "js-view-event";?><?php }?><?php if ($_smarty_tpl->tpl_vars['_event']->value['colspan']==1){?><?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-single";?><?php }?><?php if ($_smarty_tpl->tpl_vars['_event']->value['is_status']){?><?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-status";?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = "is-event";?><?php }?><td class="t-column" colspan="<?php echo $_smarty_tpl->tpl_vars['_event']->value['colspan'];?>
"><div class="t-event-wrapper <?php if ($_smarty_tpl->tpl_vars['_can_edit']->value&&!$_smarty_tpl->tpl_vars['_is_birthday']->value){?>js-move-event<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['id'])){?>data-id="<?php echo $_smarty_tpl->tpl_vars['_event']->value['id'];?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['_can_edit']->value&&!$_smarty_tpl->tpl_vars['_is_birthday']->value&&!empty($_smarty_tpl->tpl_vars['_event']->value['day_count'])&&$_smarty_tpl->tpl_vars['_event']->value['day_count']>1){?>data-day-count="<?php echo $_smarty_tpl->tpl_vars['_event']->value['day_count'];?>
"data-move-hint="<?php echo _w('%d day','%d days',$_smarty_tpl->tpl_vars['_event']->value['day_count']);?>
"<?php }?>><?php $_smarty_tpl->tpl_vars['_user'] = new Smarty_variable(null, null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['_event']->value['contact_id']])){?><?php $_smarty_tpl->tpl_vars['_user'] = new Smarty_variable($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['_event']->value['contact_id']], null, 0);?><?php }?><div class="t-event-block <?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_classes']->value," ");?>
" style="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_styles']->value,'');?>
"><?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['icon_class'])){?><i class="icon16 <?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['icon_image'])){?>kill-wa-style<?php }?> <?php echo $_smarty_tpl->tpl_vars['_event']->value['icon_class'];?>
" style="<?php if (!empty($_smarty_tpl->tpl_vars['_event']->value['icon_image'])){?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['_event']->value['icon_image'];?>
);<?php }?>"></i><?php }elseif($_smarty_tpl->tpl_vars['_is_birthday']->value&&$_smarty_tpl->tpl_vars['_user']->value){?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable(sprintf(_w("%s's birthday — %s"),htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['_event']->value['birthday_str']), null, 0);?><i class="icon16 cake" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['_user']->value){?><?php if ($_smarty_tpl->tpl_vars['_is_birthday']->value){?><span class="t-login"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }elseif(!empty($_smarty_tpl->tpl_vars['_user']->value['photo_url_16'])){?><i class="icon16 userpic20" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['_user']->value['photo_url_16'];?>
)" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></i><?php }?><?php }?><?php if (!$_smarty_tpl->tpl_vars['_is_birthday']->value&&$_smarty_tpl->tpl_vars['_is_part_of_day']->value&&$_smarty_tpl->tpl_vars['_event']->value['start']){?><?php $_smarty_tpl->tpl_vars['_styles2'] = new Smarty_variable(array(), null, 0);?><span class="t-start" style="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_styles2']->value,'');?>
"><?php echo wa_date("H:i",strtotime($_smarty_tpl->tpl_vars['_event']->value['start']));?>
</span><?php }?><?php if (!$_smarty_tpl->tpl_vars['_is_birthday']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_event']->value['summary'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></div></div></td><?php }?><?php $_smarty_tpl->createLocalArrayVariable('_events_in_week', null, 0);
$_smarty_tpl->tpl_vars['_events_in_week']->value["view"][$_smarty_tpl->tpl_vars['_event']->index][] = $_smarty_tpl->tpl_vars['_event']->value['id'];?><?php }else{ ?><td class="t-column">&nbsp;</td><?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['_event']->value['colspan'])){?><?php $_smarty_tpl->createLocalArrayVariable('_events_in_week', null, 0);
$_smarty_tpl->tpl_vars['_events_in_week']->value["all"][$_smarty_tpl->tpl_vars['_event']->index][] = $_smarty_tpl->tpl_vars['_event']->value['id'];?><?php }?><?php } ?></tr><?php } ?><tr><?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_week']->value['days_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_day']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
 $_smarty_tpl->tpl_vars['_day']->index++;
?><?php $_smarty_tpl->tpl_vars['_view_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['_events_in_week']->value["view"][$_smarty_tpl->tpl_vars['_day']->index]), null, 0);?><?php $_smarty_tpl->tpl_vars['_full_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['_events_in_week']->value["all"][$_smarty_tpl->tpl_vars['_day']->index]), null, 0);?><td class="t-column"><?php if ($_smarty_tpl->tpl_vars['_full_count']->value>$_smarty_tpl->tpl_vars['_view_count']->value){?><div class="t-action-wrapper"><span class="t-action show-full-days-events" data-date="<?php echo $_smarty_tpl->tpl_vars['_day']->value['date'];?>
" data-events-id="<?php echo smarty_modifier_join($_smarty_tpl->tpl_vars['_events_in_week']->value["all"][$_smarty_tpl->tpl_vars['_day']->index],",");?>
">+ еще <?php echo $_smarty_tpl->tpl_vars['_full_count']->value-$_smarty_tpl->tpl_vars['_view_count']->value;?>
</span></div><?php }?></td><?php } ?></tr></table></div><?php } ?></div><script>( function($) {$.team.calendar = new TeamCalendar({$wrapper: $("#t-calendar-block"),user_id: "<?php echo $_smarty_tpl->tpl_vars['_user_id']->value;?>
",is_profile: <?php if ($_smarty_tpl->tpl_vars['_is_profile']->value){?>true<?php }else{ ?>false<?php }?>,has_right_to_change: <?php if (!$_smarty_tpl->tpl_vars['_is_profile']->value||($_smarty_tpl->tpl_vars['_is_admin']->value||teamUser::canEdit($_smarty_tpl->tpl_vars['selected_user']->value['id']))){?>true<?php }else{ ?>false<?php }?>,selected_user_id: <?php if ($_smarty_tpl->tpl_vars['selected_user']->value['id']>0){?><?php echo $_smarty_tpl->tpl_vars['selected_user']->value['id'];?>
<?php }else{ ?>false<?php }?>,selected_calendar_id: <?php if ($_smarty_tpl->tpl_vars['selected_calendar']->value['id']>0){?><?php echo $_smarty_tpl->tpl_vars['selected_calendar']->value['id'];?>
<?php }else{ ?>false<?php }?>,period_start: <?php if (!empty($_smarty_tpl->tpl_vars['period_start']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['period_start']->value);?>
<?php }else{ ?>false<?php }?>,period_end: <?php if (!empty($_smarty_tpl->tpl_vars['period_end']->value)){?><?php echo json_encode($_smarty_tpl->tpl_vars['period_end']->value);?>
<?php }else{ ?>false<?php }?>,locales: {move: "%s дни"}});})(jQuery);</script></div><?php }else{ ?><div class="">Данные повреждены</div><?php }?>
<?php }} ?>
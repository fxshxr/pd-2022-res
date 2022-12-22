<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:32
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\actions-legacy\settings\Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:185425148633a832c819419-36471867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca24e6ad0ba336931bf8a20ea0b0e30b9d0b19d4' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\actions-legacy\\settings\\Settings.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185425148633a832c819419-36471867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'calendars' => 0,
    '_calendar' => 0,
    'user_name_formats' => 0,
    'format' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a832c852b06_76095514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a832c852b06_76095514')) {function content_633a832c852b06_76095514($_smarty_tpl) {?><div class="block shadowed t-settings-page" id="t-settings-page"><header class="t-content-header"><h1>Настройки</h1></header><div class="t-content-body"><div class="field"><div class="name">Календари</div><div class="value"><div class="t-calendar-settings" id="t-calendar-settings"><ul class="menu-v with-icons t-calendar-list"><?php  $_smarty_tpl->tpl_vars['_calendar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_calendar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calendars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_calendar']->key => $_smarty_tpl->tpl_vars['_calendar']->value){
$_smarty_tpl->tpl_vars['_calendar']->_loop = true;
?><li class="t-calendar-item" data-id="<?php echo $_smarty_tpl->tpl_vars['_calendar']->value['id'];?>
"><span class="t-toggle"><i class="icon16 sort"></i></span><a class="t-name js-edit-calendar" href="javascript:void(0);"><i class="t-userpic icon16 <?php if (!empty($_smarty_tpl->tpl_vars['_calendar']->value['icon_class'])){?><?php echo $_smarty_tpl->tpl_vars['_calendar']->value['icon_class'];?>
<?php }elseif(!empty($_smarty_tpl->tpl_vars['_calendar']->value['bg_color'])){?>userpic20<?php }?>" style="<?php if (!empty($_smarty_tpl->tpl_vars['_calendar']->value['bg_color'])&&empty($_smarty_tpl->tpl_vars['_calendar']->value['icon_class'])){?>background: <?php echo $_smarty_tpl->tpl_vars['_calendar']->value['bg_color'];?>
;<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_calendar']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['_calendar']->value['is_limited']==1){?><i class="t-lock icon16 lock"></i><?php }?></li><?php } ?></ul><div class="t-actions"><a class="t-add-calendar-link js-add-calendar" href="javascript:void(0);"><i class="icon16 add"></i>Добавить календарь</a></div></div></div></div><form method="post"><div class="t-form-wrapper"><div class="field"><div class="name">Формат имени пользователя</div><div class="value"><ul class="menu-v compact t-names-toggle" id="t-names-toggle"><?php  $_smarty_tpl->tpl_vars['format'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['format']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_name_formats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['format']->key => $_smarty_tpl->tpl_vars['format']->value){
$_smarty_tpl->tpl_vars['format']->_loop = true;
?><li class="t-item-wrapper"><label><input class="t-input" type="radio" name="data[user_name_format]" value="<?php echo $_smarty_tpl->tpl_vars['format']->value['format'];?>
"<?php if ($_smarty_tpl->tpl_vars['format']->value['selected']){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['format']->value['disabled']){?>disabled="disabled"<?php }?>><span class="t-name <?php if ($_smarty_tpl->tpl_vars['format']->value['disabled']){?>gray<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['format']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></label></li><?php } ?></ul></div></div></div><div class="field buttons"><div class="value"><input class="button green" type="submit" value="Сохранить"></div></div></form></div><script>( function($) {new SettingsPage({$wrapper: $("#t-settings-page"),locales: {saving: "Сохранение",saved: "Сохранено"}});$.team.setTitle("Настройки");})(jQuery);</script></div>
<?php }} ?>
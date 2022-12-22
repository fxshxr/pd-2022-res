<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:38
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\actions-legacy\access\Access.html" */ ?>
<?php /*%%SmartyHeaderCode:1181287531633a83323f6f11-19691666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d283da2031aca8035062ec3ad0107b995a78f5' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\actions-legacy\\access\\Access.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1181287531633a83323f6f11-19691666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    '_user' => 0,
    '_icon_class' => 0,
    'wa' => 0,
    'apps' => 0,
    'access_types' => 0,
    '_access' => 0,
    'app' => 0,
    '_app_id' => 0,
    '_rights' => 0,
    'at' => 0,
    'view_types' => 0,
    'type_key' => 0,
    'selected_view_type' => 0,
    'wa_app_url' => 0,
    'type' => 0,
    'wa_url' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a833245ff99_45278176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a833245ff99_45278176')) {function content_633a833245ff99_45278176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_pagination')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system/vendors/smarty-plugins\\function.wa_pagination.php';
?><div class="t-access-page shadowed" id="t-access-page"><div class="t-layout"><div class="t-column left"><div class="t-users-wrapper"><?php  $_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->key => $_smarty_tpl->tpl_vars['_user']->value){
$_smarty_tpl->tpl_vars['_user']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("user", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['_user']->value['type'])&&$_smarty_tpl->tpl_vars['_user']->value['type']=="location"){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("marker", null, 0);?><?php }else{ ?><?php if (!empty($_smarty_tpl->tpl_vars['_user']->value['photo_url_32'])){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable("userpic20", null, 0);?><?php }elseif(!empty($_smarty_tpl->tpl_vars['_user']->value['icon'])){?><?php $_smarty_tpl->tpl_vars['_icon_class'] = new Smarty_variable($_smarty_tpl->tpl_vars['_user']->value['icon'], null, 0);?><?php }?><?php }?><div class="t-row" id="t-user-<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['_user']->value['uri'];?>
" class="t-user-name" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon16 <?php if (!empty($_smarty_tpl->tpl_vars['_user']->value['photo_url_32'])){?>kill-wa-style<?php }?> <?php echo $_smarty_tpl->tpl_vars['_icon_class']->value;?>
" style="<?php if (!empty($_smarty_tpl->tpl_vars['_user']->value['photo_url_32'])){?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['_user']->value['photo_url_32'];?>
)<?php }?>"></i><span class="t-name"><?php if ($_smarty_tpl->tpl_vars['_user']->value['is_user']==-1){?><s><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</s><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span><?php if ($_smarty_tpl->tpl_vars['_user']->value['id']==$_smarty_tpl->tpl_vars['wa']->value->user("id")){?><span class="t-label">(я)</span><?php }?></a></div><?php } ?></div></div><div class="t-column"><div class="t-access-wrapper"><div class="t-access-slider"><table class="t-access-table"><?php  $_smarty_tpl->tpl_vars['_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->key => $_smarty_tpl->tpl_vars['_user']->value){
$_smarty_tpl->tpl_vars['_user']->_loop = true;
?><tr class="t-row t-access-list" data-user-id="<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['_user']->value['is_admin']){?><td colspan="<?php echo count($_smarty_tpl->tpl_vars['apps']->value);?>
"><?php $_smarty_tpl->tpl_vars['_access'] = new Smarty_variable($_smarty_tpl->tpl_vars['access_types']->value['full'], null, 0);?><div class="t-access-status is-admin type-<?php echo $_smarty_tpl->tpl_vars['_access']->value['id'];?>
"data-user-id="<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"data-uri="<?php echo $_smarty_tpl->tpl_vars['_user']->value['uri'];?>
"title="Редактировать доступ"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['_access']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</div></td><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_app_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['app']->value['id'], null, 0);?><?php $_smarty_tpl->tpl_vars['_rights'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_user']->value['access'][$_smarty_tpl->tpl_vars['_app_id']->value])===null||$tmp==='' ? 0 : $tmp), null, 0);?><td><?php if ($_smarty_tpl->tpl_vars['_rights']->value>1){?><?php $_smarty_tpl->tpl_vars['_access'] = new Smarty_variable($_smarty_tpl->tpl_vars['access_types']->value['full'], null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['_rights']->value){?><?php $_smarty_tpl->tpl_vars['_access'] = new Smarty_variable($_smarty_tpl->tpl_vars['access_types']->value['limited'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['_access'] = new Smarty_variable($_smarty_tpl->tpl_vars['access_types']->value['no'], null, 0);?><?php }?><div class="t-access-status type-<?php echo $_smarty_tpl->tpl_vars['_access']->value['id'];?>
"data-user-id="<?php echo $_smarty_tpl->tpl_vars['_user']->value['id'];?>
"data-app-id="<?php echo $_smarty_tpl->tpl_vars['_app_id']->value;?>
"title="Редактировать доступ"><?php  $_smarty_tpl->tpl_vars['at'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['at']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['access_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['at']->key => $_smarty_tpl->tpl_vars['at']->value){
$_smarty_tpl->tpl_vars['at']->_loop = true;
?><span class="t-access-name type-<?php echo $_smarty_tpl->tpl_vars['at']->value['id'];?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['at']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span><?php } ?></div></td><?php } ?><?php }?></tr><?php } ?></table></div><span class="t-action left"></span><span class="t-action right"></span></div></div></div><div class="t-elastic-header"><div class="t-layout"><div class="t-column left"><div class="t-row t-header t-toggle-wrapper"><?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['type_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['view_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type_key']->value = $_smarty_tpl->tpl_vars['type']->key;
?><a class="t-toggle-item inline-link <?php if ($_smarty_tpl->tpl_vars['type_key']->value==$_smarty_tpl->tpl_vars['selected_view_type']->value){?>is-active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
access/<?php echo $_smarty_tpl->tpl_vars['type']->value['uri'];?>
"><b><i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</i></b></a><?php } ?></div></div><div class="t-column"><div class="t-header-apps"><div class="t-row t-header t-apps-list"><?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
?><div class="t-app-column" id="t-app-<?php echo $_smarty_tpl->tpl_vars['app']->value['id'];?>
"><div class="t-app-item"><img class="t-app-image" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][48];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="t-app-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></div></div><?php } ?></div><span class="t-action left"></span><span class="t-action right"></span></div></div></div></div><script>( function($) {var page = new AccessPage({$wrapper: $("#t-access-page")});( function($) {$.team.setTitle("Доступ");})(jQuery);})(jQuery);</script><?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?><div><?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>'menu-h')),$_smarty_tpl);?>
</div><?php }?></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:37
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\actions-legacy\apitokens\Apitokens.html" */ ?>
<?php /*%%SmartyHeaderCode:1875474970633a83312ea9f6-09149273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4abf49d2c137630367389f7b5b5dfe70086668ca' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\actions-legacy\\apitokens\\Apitokens.html',
      1 => 1637225471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875474970633a83312ea9f6-09149273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'api_tokens' => 0,
    '_token' => 0,
    'wa_app_url' => 0,
    '_app' => 0,
    '_k' => 0,
    '_v' => 0,
    '_url_params' => 0,
    'total_count' => 0,
    'page' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8331340b56_13625935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8331340b56_13625935')) {function content_633a8331340b56_13625935($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system/vendors/smarty-plugins\\modifier.wa_date.php';
?><div class="shadowed t-api-tokens-page" id="t-api-tokens-page"><header class="t-content-header"><h2 class="t-page-name">Токены API</h2></header><div class="t-content-body"><?php if (!empty($_smarty_tpl->tpl_vars['api_tokens']->value)){?><table class="zebra tc-api-tokens-list js-api-tokens-list"><thead style="font-size: 11px; color: #777; text-transform: uppercase; font-weight: bold;"><tr class="white"><td class="tc-column"></td><td class="tc-column-user">Пользователь</td><td class="tc-column-date">Дата создания</td><td class="tc-column-client-id">Идентификатор клиента</td><td class="tc-column-scope">Доступ</td><td class="tc-column-last-use-datetime">Дата последнего использования</td><td class="tc-column-expires">Истекает</td><td class="tc-column-remove"></td></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['_token'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_token']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['api_tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_token']->key => $_smarty_tpl->tpl_vars['_token']->value){
$_smarty_tpl->tpl_vars['_token']->_loop = true;
?><tr class="js-token-item" data-contact-id="<?php echo $_smarty_tpl->tpl_vars['_token']->value['contact_id'];?>
" data-token="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['token'], ENT_QUOTES, 'UTF-8', true);?>
"><td class="tc-column"></td><td class="tc-column-user"><?php if (isset($_smarty_tpl->tpl_vars['_token']->value['contact'])){?><div class="tc-layout"><div class="tc-column tc-column-image"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
u/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['contact']['login'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['contact']['photo'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['contact']['name'], ENT_QUOTES, 'UTF-8', true);?>
"></a></div><div class="tc-column middle"><div class="line"><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
u/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['contact']['login'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['contact']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></div></div></div><?php }elseif($_smarty_tpl->tpl_vars['_token']->value['contact_id']==0){?><span style="color: #999;" title="id=0">Неизвестный пользователь</span><?php }else{ ?><span style="color: #999;">deleted_user_id=<?php echo $_smarty_tpl->tpl_vars['_token']->value['contact_id'];?>
</span><?php }?></td><td class="tc-column-date"><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_token']->value['create_datetime'],'humandatetime');?>
</td><td class="tc-column-client-id"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_token']->value['client_id'], ENT_QUOTES, 'UTF-8', true);?>
</td><td class="tc-column-scope"><?php  $_smarty_tpl->tpl_vars['_app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_token']->value['installed_apps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_app']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_app']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_app']->key => $_smarty_tpl->tpl_vars['_app']->value){
$_smarty_tpl->tpl_vars['_app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app']->iteration++;
 $_smarty_tpl->tpl_vars['_app']->last = $_smarty_tpl->tpl_vars['_app']->iteration === $_smarty_tpl->tpl_vars['_app']->total;
?><img src="/<?php echo $_smarty_tpl->tpl_vars['_app']->value['img'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_app']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="width: 16px; height: 16px;" /><?php } ?><?php  $_smarty_tpl->tpl_vars['_app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_app']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_token']->value['not_installed_apps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_app']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_app']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_app']->key => $_smarty_tpl->tpl_vars['_app']->value){
$_smarty_tpl->tpl_vars['_app']->_loop = true;
 $_smarty_tpl->tpl_vars['_app']->iteration++;
 $_smarty_tpl->tpl_vars['_app']->last = $_smarty_tpl->tpl_vars['_app']->iteration === $_smarty_tpl->tpl_vars['_app']->total;
?><span style="color: #999;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_app']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['_app']->last){?>,<?php }?></span><?php } ?></td><td class="tc-column-last-use-datetime"><?php if (!empty($_smarty_tpl->tpl_vars['_token']->value['last_use_datetime'])){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_token']->value['last_use_datetime'],'humandatetime');?>
<?php }else{ ?><span style="color: #999;">—</span><?php }?></td><td class="tc-column-expires"><?php if (!empty($_smarty_tpl->tpl_vars['_token']->value['expires'])){?><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['_token']->value['expires'],'humandatetime');?>
}<?php }else{ ?><span style="color: #999;">—</span><?php }?></td><td class="tc-column-remove"><a href="#" title="Удалить токен" class="js-remove-api-token" style="display: inline-block;"><i class="icon16 no"></i></a></td></tr><?php } ?></tbody></table><?php }else{ ?><div class="t-no-tokens">Нет API токенов.</div><?php }?><?php $_smarty_tpl->tpl_vars['_url_params'] = new Smarty_variable('', null, 0);?><?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = waRequest::get(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?><?php if ($_smarty_tpl->tpl_vars['_k']->value!='_'&&$_smarty_tpl->tpl_vars['_k']->value!='page'&&$_smarty_tpl->tpl_vars['_v']->value){?><?php $_smarty_tpl->tpl_vars['_url_params'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_url_params']->value)."&".((string)$_smarty_tpl->tpl_vars['_k']->value)."=".((string)$_smarty_tpl->tpl_vars['_v']->value), null, 0);?><?php }?><?php } ?><?php $_smarty_tpl->tpl_vars['_url_params'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['_url_params']->value,1), null, 0);?><?php echo $_smarty_tpl->tpl_vars['wa']->value->team->pager((($tmp = @$_smarty_tpl->tpl_vars['total_count']->value)===null||$tmp==='' ? 0 : $tmp),$_smarty_tpl->tpl_vars['page']->value,$_smarty_tpl->tpl_vars['_url_params']->value);?>
</div></div><script>( function($) {new SiteApiTokenPage({$wrapper: $("#t-api-tokens-page"),locale: {'remove_ask': 'Пользователь не сможет отправлять запросы API, используя этот токен.'}});$.team.setTitle("Токены API");})(jQuery);</script>
<?php }} ?>
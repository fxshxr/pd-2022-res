<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:26
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\team\templates\layouts-legacy\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:451459707633a8326851809-62314529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e60cb3011476f09b4a78d0b7cd5fc970e1fcf06d' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\team\\templates\\layouts-legacy\\Default.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '451459707633a8326851809-62314529',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    'map_info' => 0,
    '_key' => 0,
    '_apikey' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'sidebar' => 0,
    'content' => 0,
    'is_debug' => 0,
    'wa_app_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a832688fc83_90315134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a832688fc83_90315134')) {function content_633a832688fc83_90315134($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
</title><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/plugins/timepicker/jquery.timepicker.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.all.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css-legacy/team.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js-legacy/compiled/team-external.min.js",'uibundle'=>'')); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js-legacy/compiled/team-external.min.js",'uibundle'=>''), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.droppable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.draggable.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.datepicker.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/profileWebasystID.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js-legacy/compiled/team-external.min.js",'uibundle'=>''), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js-legacy/compiled/team.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js-legacy/compiled/team.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/plugins/timepicker/jquery.timepicker.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/team.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/sidebar.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/calendar.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/profile.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/access.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/group.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/settings.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/api-token.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/users.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/welcome.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/long.action.process.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js-legacy/map.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js-legacy/compiled/team.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()!='en_US'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/i18n/jquery.ui.datepicker-<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
.js"></script><?php }?><?php if ($_smarty_tpl->tpl_vars['map_info']->value['adapter']==='google'){?><?php $_smarty_tpl->tpl_vars['_key'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['map_info']->value['settings']['key'])===null||$tmp==='' ? '' : $tmp), null, 0);?><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=<?php echo $_smarty_tpl->tpl_vars['_key']->value;?>
&lang=<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
"></script><?php }elseif($_smarty_tpl->tpl_vars['map_info']->value['adapter']==='yandex'){?><?php $_smarty_tpl->tpl_vars['_apikey'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['map_info']->value['settings']['apikey'])===null||$tmp==='' ? '' : $tmp), null, 0);?><script src="https://api-maps.yandex.ru/2.1/?lang=<?php echo $_smarty_tpl->tpl_vars['wa']->value->locale();?>
&apikey=<?php echo $_smarty_tpl->tpl_vars['_apikey']->value;?>
" type="text/javascript"></script><?php }?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php } ?><script>( function($) {$.team.title_pattern = "%s — <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
";})(jQuery);</script></head><body><div id="wa"><?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>
<div class="t-app-wrapper" id="wa-app"><?php if (!empty($_smarty_tpl->tpl_vars['sidebar']->value)){?><div class="t-sidebar-wrapper sidebar left200px" id="t-sidebar-wrapper"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['sidebar']->value)===null||$tmp==='' ? '' : $tmp);?>
</div><?php }?><div class="t-content-wrapper"><div class="t-content-block" id="t-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div></div></div></div><script>(function($) {$.team.init({is_debug: <?php echo $_smarty_tpl->tpl_vars['is_debug']->value;?>
,app_url: <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
,locales: {map_check_your_key: 'Проверьте свой ключ прежде всего <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
settings/">здесь</a>',map_error_title: 'Ошибка',map_error_message: 'Ошибка карт Google, возможно, в настройках указан неверный ключ.'}});})(jQuery);</script></body></html>
<?php }} ?>
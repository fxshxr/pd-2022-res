<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:35:37
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:198926198633a82b9194364-00004102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6aebc216a486d30d606248020b4f137fb26c326' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198926198633a82b9194364-00004102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a82b91baf90_30626231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a82b91baf90_30626231')) {function content_633a82b91baf90_30626231($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>
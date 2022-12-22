<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 10:35:17
         compiled from "D:\open_server\OSPanel\domains\utke\wa-data\public\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:759966650633a90b5c239b3-57147785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a346b6ca6111ab48ff9418ecd21dea5901b17d33' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-data\\public\\site\\themes\\default\\error.html',
      1 => 1664779024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '759966650633a90b5c239b3-57147785',
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
  'unifunc' => 'content_633a90b5c4dbc5_97225265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a90b5c4dbc5_97225265')) {function content_633a90b5c4dbc5_97225265($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>
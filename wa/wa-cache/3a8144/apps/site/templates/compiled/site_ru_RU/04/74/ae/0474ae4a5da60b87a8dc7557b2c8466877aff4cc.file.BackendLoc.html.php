<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:30:19
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\site\templates\actions-legacy\backend\BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:955192558633a817b2e07c5-63527262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0474ae4a5da60b87a8dc7557b2c8466877aff4cc' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\site\\templates\\actions-legacy\\backend\\BackendLoc.html',
      1 => 1624000810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955192558633a817b2e07c5-63527262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a817b3043e1_30755987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a817b3043e1_30755987')) {function content_633a817b3043e1_30755987($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>
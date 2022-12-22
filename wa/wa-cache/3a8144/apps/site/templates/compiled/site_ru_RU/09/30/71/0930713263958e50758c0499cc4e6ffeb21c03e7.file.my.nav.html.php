<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:33:26
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\site\themes\default\my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:581891491633a8236273020-57300418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0930713263958e50758c0499cc4e6ffeb21c03e7' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\site\\themes\\default\\my.nav.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '581891491633a8236273020-57300418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a823629a058_33342441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a823629a058_33342441')) {function content_633a823629a058_33342441($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>
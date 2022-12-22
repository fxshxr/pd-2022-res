<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:59:05
         compiled from "D:\open_server\OSPanel\domains\utke\wa-data\public\site\themes\default\my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:412645090633a883946bd48-74554496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2a81c68dbbe0afd2e18a78ff58e1b92548f088' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-data\\public\\site\\themes\\default\\my.nav.html',
      1 => 1664779259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '412645090633a883946bd48-74554496',
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
  'unifunc' => 'content_633a8839493559_90260758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8839493559_90260758')) {function content_633a8839493559_90260758($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
        
    </li>
<?php }?><?php }} ?>
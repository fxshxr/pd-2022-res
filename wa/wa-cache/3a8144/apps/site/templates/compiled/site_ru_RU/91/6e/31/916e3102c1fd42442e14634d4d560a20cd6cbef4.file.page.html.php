<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:30:38
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\site\themes\default\page.html" */ ?>
<?php /*%%SmartyHeaderCode:1459270864633a818e784519-78033662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916e3102c1fd42442e14634d4d560a20cd6cbef4' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\site\\themes\\default\\page.html',
      1 => 1616572669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1459270864633a818e784519-78033662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'page' => 0,
    'wa' => 0,
    'subpages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a818e7bf332_96491293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a818e7bf332_96491293')) {function content_633a818e7bf332_96491293($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
    <div class="breadcrumbs"itemprop="breadcrumb">
        <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
        <?php } ?>
    </div>
<?php }?>

<h1 itemprop="name"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['name'])===null||$tmp==='' ? '(no name)' : $tmp);?>
</h1>

<?php $_smarty_tpl->tpl_vars['subpages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages((($tmp = @$_smarty_tpl->tpl_vars['page']->value['id'])===null||$tmp==='' ? null : $tmp)), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['subpages']->value){?>
    <ul class="sub-links">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
        <?php } ?>
    </ul>
<?php }?>

<div id="page" role="main" itemprop="description">
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

</div>
    
<div class="clear-both"></div><?php }} ?>
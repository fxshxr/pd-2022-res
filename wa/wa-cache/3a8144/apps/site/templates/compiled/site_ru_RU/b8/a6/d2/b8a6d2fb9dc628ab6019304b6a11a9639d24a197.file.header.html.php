<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:30:39
         compiled from "D:\open_server\OSPanel\domains\utke\wa-apps\site\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:931239001633a818f328d85-64439946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a6d2fb9dc628ab6019304b6a11a9639d24a197' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-apps\\site\\themes\\default\\header.html',
      1 => 1588062300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '931239001633a818f328d85-64439946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'pages' => 0,
    'p' => 0,
    'selected_node' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a818f33b4d1_16303091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a818f33b4d1_16303091')) {function content_633a818f33b4d1_16303091($_smarty_tpl) {?><!-- Site app page list -->
<?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>

<?php if (count($_smarty_tpl->tpl_vars['pages']->value)){?>
    <ul class="pages">

        
        <?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable(null, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if (strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['p']->value['url'])&&strlen($_smarty_tpl->tpl_vars['p']->value['url'])>=strlen(ifset($_smarty_tpl->tpl_vars['selected_node']->value,'url',''))){?><?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value, null, 0);?><?php }?>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['selected_node']->value){?><?php $_smarty_tpl->createLocalArrayVariable('selected_node', null, 0);
$_smarty_tpl->tpl_vars['selected_node']->value['id'] = null;?><?php }?>

        
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['p']->value['url']!=$_smarty_tpl->tpl_vars['wa_url']->value){?> 
                <li<?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['selected_node']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
            <?php }?>
        <?php } ?>

    </ul>
<?php }?><?php }} ?>
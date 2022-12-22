<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:30:16
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\sidebar\Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:1147914086633a8178671d17-78587209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e69883466790c2e78b4d2003e1df76fbc54ea54' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\sidebar\\Sidebar.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1147914086633a8178671d17-78587209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    '_id' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8178677911_12035986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8178677911_12035986')) {function content_633a8178677911_12035986($_smarty_tpl) {?><div class="s-sidebar-block" id="s-sidebar-block">
    <ul class="menu-v with-icons">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <li data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                    <i class="icon16 ws <?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }} ?>
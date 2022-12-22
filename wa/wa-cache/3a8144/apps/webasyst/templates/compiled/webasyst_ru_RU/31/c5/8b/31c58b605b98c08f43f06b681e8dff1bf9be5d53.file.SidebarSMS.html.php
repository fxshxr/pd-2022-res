<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:38:03
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\sidebar\SidebarSMS.html" */ ?>
<?php /*%%SmartyHeaderCode:1365591702633a834b479396-80505748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31c58b605b98c08f43f06b681e8dff1bf9be5d53' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\sidebar\\SidebarSMS.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1365591702633a834b479396-80505748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'id' => 0,
    'channels' => 0,
    'wa_backend_url' => 0,
    '_id' => 0,
    'channel' => 0,
    '_channel_url' => 0,
    '_channel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a834b4ad287_03039010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a834b4ad287_03039010')) {function content_633a834b4ad287_03039010($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("s-sms-template-sidebar-wrapper", null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class']->value), null, 0);?>
<aside class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <a class="s-new-templates bold js-new-templates"><i class="icon16 add"></i>Новая группа шаблонов</a>
    <ul class="menu-v stack with-icons">
        <?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_channel']->key;
?>
            <?php $_smarty_tpl->tpl_vars['_channel_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true))."/", null, 0);?>
            <li<?php if ($_smarty_tpl->tpl_vars['_id']->value==$_smarty_tpl->tpl_vars['channel']->value->getId()){?> class="selected bold"<?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_channel_url']->value;?>
">
                    <i class="icon16 mobile"></i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </a>
            </li>
        <?php } ?>
    </ul>
</aside>

<script>
    (function ($) {

        // instance of dialog that create new sms templates
        var dialog = new WaSettingsSMSNewTemplateDialog("wa-sms-new-template-dialog", {
            path_to_template: "<?php echo ((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/";?>
"
        });

        // sidebar js
        new WASettingsSMSTemplateSidebar({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"),
            dialog: dialog
        });

    })(jQuery);
</script><?php }} ?>
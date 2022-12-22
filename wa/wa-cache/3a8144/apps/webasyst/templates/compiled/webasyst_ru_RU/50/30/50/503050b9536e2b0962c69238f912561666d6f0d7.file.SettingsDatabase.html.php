<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:34:18
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\settings\SettingsDatabase.html" */ ?>
<?php /*%%SmartyHeaderCode:1911883110633a826acf5b17-23827651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '503050b9536e2b0962c69238f912561666d6f0d7' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\settings\\SettingsDatabase.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911883110633a826acf5b17-23827651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'mysql_version' => 0,
    'mb4_is_supported' => 0,
    'db_name' => 0,
    'connection_charset' => 0,
    'is_debug' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a826ad28887_79218435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a826ad28887_79218435')) {function content_633a826ad28887_79218435($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("База данных — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-db-page blank block double-padded" id="s-db-page">
    <h1 class="s-page-header">База данных</h1>
    <div class="s-db-fields-block">
        <form action="?module=settingsGeneralSave">

            <div class="field-group">
                
                <div class="field">
                    <div class="name">
                        <label for="config-name">Версия MySQL</label>
                    </div>
                    <div class="value">
                        <?php echo $_smarty_tpl->tpl_vars['mysql_version']->value;?>
 <span class="gray"><?php if ($_smarty_tpl->tpl_vars['mb4_is_supported']->value){?>поддерживает эмодзи<?php }else{ ?>не поддерживает эмодзи<?php }?></span>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="config-name">База данных</label>
                    </div>
                    <div class="value">
                        <?php echo $_smarty_tpl->tpl_vars['db_name']->value;?>

                    </div>
                </div>

                <?php if (!empty($_smarty_tpl->tpl_vars['connection_charset']->value)){?>

                    
                    <div class="field">
                        <div class="name">
                            <label for="config-name">Кодировка соединения</label>
                        </div>
                        <div class="value">
                            <?php echo $_smarty_tpl->tpl_vars['connection_charset']->value;?>

                        </div>
                    </div>

                <?php }?>

                
                <?php if ($_smarty_tpl->tpl_vars['mb4_is_supported']->value){?>
                    <div class="field">
                        <div class="name">
                            <label for="config-name">Таблицы и поля без поддержки эмодзи</label>
                        </div>

                        <div class="value" style="padding-bottom: 12px;">
                            <?php if ($_smarty_tpl->tpl_vars['is_debug']->value){?>
                                <a href="javascript:void(0);" class="inline-link js-show-list"><b><i>Перейти к добавлению поддержки эмодзи</i></b></a>
                            <?php }else{ ?>
                                <span>Чтобы добавить поддержку эмодзи, включите <b>Режим отладки (debug mode)</b> в <b>Общих настройках</b>.</span>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>

            </div>

        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);

        new WASettingsDatabase({
            $wrapper: $("#s-db-page")
        });
    })(jQuery);
</script><?php }} ?>
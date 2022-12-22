<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:40:11
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\design\templates-legacy\DesignViewOriginal.html" */ ?>
<?php /*%%SmartyHeaderCode:1595683864633a83cb24c7c5-96807645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79aaa388606e39b5f07aaf1bdb7a5ad5f4967a8' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\design\\templates-legacy\\DesignViewOriginal.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595683864633a83cb24c7c5-96807645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a83cb27a748_86678887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a83cb27a748_86678887')) {function content_633a83cb27a748_86678887($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['file']->value)){?>
<h1><span class="grey"><?php echo $_smarty_tpl->tpl_vars['file']->value['theme_path'];?>
</span><?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
</h1>
<div id="wa-design-original" style="width: 100%; height: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</div>
<script>
    $(function () {
        var editor = ace.edit('wa-design-original');
        ace.config.set("basePath", wa_url + 'wa-content/js/ace/');
        editor.setTheme("ace/theme/eclipse");
        var session = editor.getSession();
        <?php if (substr($_smarty_tpl->tpl_vars['file']->value['id'],-3)=='css'){?>
        session.setMode("ace/mode/css");
        <?php }elseif(substr($_smarty_tpl->tpl_vars['file']->value['id'],-2)=='js'){?>
        session.setMode("ace/mode/javascript");
        <?php }else{ ?>
        session.setMode("ace/mode/css");
        session.setMode("ace/mode/javascript");
        session.setMode("ace/mode/smarty");
        <?php }?>
        session.setUseWrapMode(true);
        editor.renderer.setShowGutter(false);
        editor.setShowPrintMargin(false);
        editor.setFontSize(13);
        editor.setHighlightActiveLine(false);
        editor.setReadOnly(true);

        setTimeout(function () {
            var newHeight = editor.getSession().getScreenLength() * editor.renderer.lineHeight + editor.renderer.scrollBar.getWidth();
            newHeight *= 1.02;
            if (newHeight < 220) {
                newHeight = 220;
            }
            $('#wa-design-original').height(newHeight.toString() + "px");
            editor.resize();
        }, 50);
    });
</script>
<?php }?><?php }} ?>
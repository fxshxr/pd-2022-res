<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:33:26
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\captcha\phpcaptcha\templates\captcha.html" */ ?>
<?php /*%%SmartyHeaderCode:769636992633a8236e87d40-63218499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e18dc4ee4af8dbcd6653aa856d83a7d7afeb3c1b' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\captcha\\phpcaptcha\\templates\\captcha.html',
      1 => 1542030180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769636992633a8236e87d40-63218499',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wrapper_class' => 0,
    'captcha_url' => 0,
    'refresh' => 0,
    'input_name' => 0,
    'error_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a8236e8e0f5_82114043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a8236e8e0f5_82114043')) {function content_633a8236e8e0f5_82114043($_smarty_tpl) {?><div class="<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
">
    <p>
        <img class="wa-captcha-img" src="<?php echo $_smarty_tpl->tpl_vars['captcha_url']->value;?>
" alt="CAPTCHA" title="<?php echo $_smarty_tpl->tpl_vars['refresh']->value;?>
">
        <strong>&rarr;</strong>
        <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" class="wa-captcha-input<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
" autocomplete="off">
    </p>
    <p>
        <a href="#" class="wa-captcha-refresh"><?php echo $_smarty_tpl->tpl_vars['refresh']->value;?>
</a>
    </p>
    <script type="text/javascript">
        $(function () {
            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').on('load', function () {
                $(window).trigger('wa_captcha_loaded');
            });

            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-refresh, div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').click(function () {
                var $wrapper = $(this).parents('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
'),
                    $input = $wrapper.find('.wa-captcha-input'),
                    $img = $wrapper.find('.wa-captcha-img'),
                    src = $img.attr('src');

                if ($img.length) {
                    $img.attr('src', src.replace(/\?.*$/, '?rid=' + Math.random()));
                    $img.one('load', function () {
                        $(window).trigger('wa_captcha_loaded');
                        $input.val('').focus();
                    });
                }

                return false;
            });
        });
    </script>
</div><?php }} ?>
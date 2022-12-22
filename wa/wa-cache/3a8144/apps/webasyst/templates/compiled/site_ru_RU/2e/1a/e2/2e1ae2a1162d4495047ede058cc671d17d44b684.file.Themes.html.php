<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:31:23
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\design\templates-legacy\Themes.html" */ ?>
<?php /*%%SmartyHeaderCode:1820893484633a81bbb90463-27646660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e1ae2a1162d4495047ede058cc671d17d44b684' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\design\\templates-legacy\\Themes.html',
      1 => 1632815923,
      2 => 'file',
    ),
    '69cac726300289fbe0fa1dbb7be177e508ed695c' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\design\\templates-legacy\\Themes.installed_themes.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820893484633a81bbb90463-27646660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'wa_backend_url' => 0,
    'app_id' => 0,
    'design_url' => 0,
    'wa' => 0,
    'themes_url' => 0,
    'routes' => 0,
    'r' => 0,
    'domains' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a81bbbee2c3_92601260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a81bbbee2c3_92601260')) {function content_633a81bbbee2c3_92601260($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><div class="block wa-design-gray-toolbar">
    

    <div class="float-right">
        <ul class="menu-h">
            <li><a id="wa-theme-upload-link" href="#"><i class="icon16 upload"></i>Загрузить архив с темой <span class="hint">.tar.gz</span></a></li>
            <li id="themes-close" style="display: none"><a href="#" class="cancel gray inline-link" title="Закрыть"><i class="icon10 no-bw"></i> <b><i>Закрыть</i></b></a></li>
        </ul>
    </div>

    <h4><?php echo htmlspecialchars(sprintf('Темы дизайна для приложения «%s»',$_smarty_tpl->tpl_vars['app']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
 <i class="icon16 loading"></i></h4>

    <?php /*  Call merged included template "./Themes.installed_themes.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./Themes.installed_themes.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1820893484633a81bbb90463-27646660');
content_633a81bbbbaa81_24843150($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./Themes.installed_themes.html" */?>
</div>
<div class="wa-themes">
    <script type="text/javascript">
    $('div.wa-themes:first').load('<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
installer/?module=themes&action=view&slug=<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
&return_hash=<?php echo rawurlencode(((string)$_smarty_tpl->tpl_vars['design_url']->value)."theme=%theme_id%");?>
',function(){
        $('.wa-design-gray-toolbar h4 i').hide();
    });
    $('#themes-close a').click(function () {
        $('#wa-design-container').addClass('left200px').css('margin-left', '');
        $('#wa-design-sidebar').show();
        $("#wa-theme-list li a:first").click();
        return false;
    });
    </script>
    <div class="clear"></div>
</div>

<div class="dialog" id="wa-theme-upload-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window" style="height: 225px; min-height: 225px; width: 500px; min-width: 350px">
        <form target="wa-theme-upload-iframe" id="wa-theme-upload-form" method="post" action="?module=design&amp;action=themeUpload" enctype="multipart/form-data">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Загрузить тему</h1>
                    <span class="wa-theme-dialog-error bold" style="color: red;"></span>
                    <p>Загружаемая тема должна представлять собой правильный архив темы Webasyst (архив в формате .tar.gz с файлами темы и файлом-манифестом theme.xml).</p>
                    <input id="wa-input-file" type="file" name="theme_files[]" >
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <div class="loading" style="display:none; margin-top: 10px">
                        <i class="icon16 loading"></i> Загрузка...
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button green" value="Загрузить">
                    или <a href="<?php echo $_smarty_tpl->tpl_vars['themes_url']->value;?>
" class="inline-link cancel"><b><i>отмена</i></b></a> </div>
            </div>
        </form>
        <iframe style="display:none" name="wa-theme-upload-iframe" id="wa-theme-upload-iframe"></iframe>
    </div>
</div>

<div class="dialog width600px height300px" id="wa-theme-start-using-dialog" data-url="<?php echo $_smarty_tpl->tpl_vars['design_url']->value;?>
">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <form>
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1></h1>
                    <p><?php echo sprintf("Подключите тему дизайна к одному из существующих поселений приложения «%s» или создайте новое правило маршрутизации:",$_smarty_tpl->tpl_vars['app']->value['name']);?>
</p>

                    <div class="fields width100px form">
                        <div class="field">
                            <div class="name">Выберите правило</div>
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['r']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['r']->index++;
 $_smarty_tpl->tpl_vars['r']->first = $_smarty_tpl->tpl_vars['r']->index === 0;
?>
                            <div class="value no-shift">
                                <label>
                                    <input name="route" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['_domain'];?>
|<?php echo $_smarty_tpl->tpl_vars['r']->value['_id'];?>
" type="radio" <?php if ($_smarty_tpl->tpl_vars['r']->first){?>checked<?php }?>>
                                    <?php echo waIdna::dec($_smarty_tpl->tpl_vars['r']->value['_domain']);?>
/<?php echo $_smarty_tpl->tpl_vars['r']->value['url'];?>

                                    <span class="hint"><?php if (isset($_smarty_tpl->tpl_vars['r']->value['theme'])){?><?php echo $_smarty_tpl->tpl_vars['r']->value['theme'];?>
<?php }else{ ?>default<?php }?></span>
                                </label>
                            </div>
                            <?php }
if (!$_smarty_tpl->tpl_vars['r']->_loop) {
?>
                            <div class="value gray">
                                <?php echo sprintf('На этом сайте нет поселений приложения «%s».',$_smarty_tpl->tpl_vars['app']->value['name']);?>

                            </div>
                            <?php } ?>
                        </div>
                        <div class="field">
                            <div class="name">Новое правило</div>
                            <div class="value">
                                <input name="route" id="create-new-route-choice" value="new" type="radio"<?php if (!count($_smarty_tpl->tpl_vars['routes']->value)){?> checked<?php }?>>

                                <?php if (count($_smarty_tpl->tpl_vars['domains']->value)==1){?>
                                <input name="domain" type="hidden" value="<?php echo current($_smarty_tpl->tpl_vars['domains']->value);?>
">
                                <?php echo current($_smarty_tpl->tpl_vars['domains']->value);?>
/<?php }else{ ?>
                                <select name="domain" class="create-new-route-control">
                                    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domains']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value;?>
"><?php echo smarty_modifier_truncate(str_replace('www.','',$_smarty_tpl->tpl_vars['d']->value),23,'...',false,true);?>
</option>
                                    <?php } ?>
                                </select>/
                                <?php }?>
                                <input type="text" name="url" value="" placeholder="*" class="short create-new-route-control">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="clear"></div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="hidden" name="theme" value="">
                    <input type="submit" class="button green" data-value="<?php echo sprintf("Начать использовать тему «%s»",'%THEME%');?>
">
                    или <a href="#" class="cancel">отмена</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    ( function($) {
        var $dialog = $("#wa-theme-upload-dialog").detach();

        $("#wa-theme-upload-link").on("click", function(event) {
            if (!waDesignConfirm()) return false;

            $dialog.find(".wa-theme-dialog-error").text('');
            $dialog.find("div.loading").hide();

            $dialog.waDialog({
                disableButtonsOnSubmit: true,
                onSubmit: function () {
                    $("#wa-theme-upload-dialog div.loading").show();
                    $("#wa-theme-upload-iframe").one('load', function () {
                        $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                        $("#wa-input-file").bind('change', function () {
                            $("#wa-theme-upload-form").submit();
                        });
                        var response;
                        try {
                            response = $.parseJSON($(this).contents().text());
                            if (response.status == 'fail') {
                                $("#wa-theme-upload-dialog div.loading").hide();
                                $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                                handleError(response);
                            } else if (response.status == 'ok') {
                                $dialog.hide();
                                $(".wa-theme-dialog-error").text('');
                                location.reload();
                            }
                        } catch (e) {
                            response = {
                                'errors': []
                            };
                            var message = $(this).contents().find('h1:first, h2:first');
                            if (message.length) {
                                response.errors.push([message.text()]);
                            } else {
                                response.errors.push(['JavaScript error: ' + e.message]);
                            }
                            $("#wa-theme-upload-dialog div.loading").hide();
                            $("#wa-input-file").replaceWith('<input id="wa-input-file" type="file" name="theme_files[]" multiple="" >');
                            handleError(response);
                        }
                    });

                },
                onOpen: function() {
                    $dialog.appendTo( $("body") );
                },
                onClose: function () {
                    $dialog.detach();
                }
            });
            return false;
        });

        function handleError(data) {
            var error = '';
            if (typeof data.errors == 'string') {
                error += (error ? '\n' : '') + data.errors;
            } else {
                for (error_item in data.errors) {
                    error += (error ? '\n' : '') + data.errors[error_item][0];
                }
            }
            if ($(".dialog:visible").length) {
                $(".dialog:visible .wa-theme-dialog-error").html(error + '<br><br>');
            } else if ($(".wa-theme-dialog-error:first:visible").length) {
                $(".wa-theme-dialog-error:first:visible").html('<br><br>' + error + '<br><br>');
            } else {
                alert('Error:' + error);
            }
            $("#wa-theme-name-dialog input[type=submit]").removeAttr('disabled');
            $("#wa-theme-upload-dialog input[type=submit]").removeAttr('disabled');
        }
    })(jQuery);
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:31:23
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\design\templates-legacy\Themes.installed_themes.html" */ ?>
<?php if ($_valid && !is_callable('content_633a81bbbbaa81_24843150')) {function content_633a81bbbbaa81_24843150($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['app_themes']->value)){?>
    <div class="s-installed-themes-section is-extended" id="js-installed-themes-section">
        <div class="s-section-header">
            <span class="s-title js-toggle">
                <i class="s-icon darr"></i> Установленные
            </span>
        </div>
        <div class="s-hidden">
            <div class="s-themes-list">
                <?php  $_smarty_tpl->tpl_vars['_theme'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_theme']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app_themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_theme']->key => $_smarty_tpl->tpl_vars['_theme']->value){
$_smarty_tpl->tpl_vars['_theme']->_loop = true;
?>
                    <?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['_theme']->value->getName(), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_cover_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['_theme']->value->getCover(), null, 0);?>
                    <?php if (empty($_smarty_tpl->tpl_vars['_cover_image']->value)){?>
                        <?php $_smarty_tpl->tpl_vars['_cover_image'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-content/img/design/themes/no-image.png", null, 0);?>
                    <?php }?>

                    <?php $_smarty_tpl->tpl_vars['_theme_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_theme']->value->id, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_theme_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['design_url']->value)."theme=".((string)$_smarty_tpl->tpl_vars['_theme_id']->value), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['_is_active'] = new Smarty_variable(in_array($_smarty_tpl->tpl_vars['_theme_id']->value,$_smarty_tpl->tpl_vars['used_app_themes']->value), null, 0);?>

                    <div class="s-theme-wrapper" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_theme_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-load="?module=design&action=theme&theme=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_theme_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <a class="s-image-wrapper" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_theme_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_cover_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        </a>
                        <div class="s-name-wrapper">
                            <a class="s-name" href="<?php echo $_smarty_tpl->tpl_vars['_theme_url']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>

                            </a>
                        </div>
                        <div class="s-statuses">
                            <?php if (!empty($_smarty_tpl->tpl_vars['_is_active']->value)){?>
                                <span class="s-status green"><i class="icon16 ss confirmed"></i>Используется</span>
                            <?php }else{ ?>
                                <span class="s-status gray">Не используется</span>
                            <?php }?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <script>
            ( function($) {
                var $wrapper = $("#js-installed-themes-section"),
                    $toggle = $wrapper.find(".js-toggle");

                var storage_name = "webasyst/backend/installed_themes_view",
                    active_class = "is-extended";

                $toggle.on("click", function(event) {
                    event.preventDefault();
                    var is_active = $wrapper.hasClass(active_class);
                    toggle(!is_active);
                });

                $wrapper.on("click", "a", function(event) {
                    var $theme = $(this).closest(".s-theme-wrapper");
                    $("#wa-design-container").load( $theme.data("load") );
                });

                showOnLoad();

                function showOnLoad() {
                    var storage = localStorage.getItem(storage_name);
                    toggle( (storage !== "inactive") );
                }

                function toggle(show) {
                    var $icon = $toggle.find(".s-icon");

                    var top_icon_class = "rarr",
                        bottom_icon_class = "darr";

                    if (show) {
                        $icon.removeClass(top_icon_class).addClass(bottom_icon_class);
                        $wrapper.addClass(active_class);
                    } else {
                        $icon.removeClass(bottom_icon_class).addClass(top_icon_class);
                        $wrapper.removeClass(active_class);
                    }

                    localStorage.setItem(storage_name, ( show ? "active" : "inactive") );
                }

            })(jQuery);
        </script>
    </div>

<?php }elseif(isset($_smarty_tpl->tpl_vars['app_themes']->value)){?>
    <div class="s-installed-themes-section">
        <div class="s-empty-message">Установленных тем нет.</div>
    </div>
<?php }?><?php }} ?>
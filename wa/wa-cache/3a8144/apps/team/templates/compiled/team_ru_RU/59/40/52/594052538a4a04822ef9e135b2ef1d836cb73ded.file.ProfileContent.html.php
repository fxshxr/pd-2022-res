<?php /* Smarty version Smarty-3.1.14, created on 2022-10-03 09:37:26
         compiled from "D:\open_server\OSPanel\domains\utke\wa-system\webasyst\templates\actions-legacy\profile\ProfileContent.html" */ ?>
<?php /*%%SmartyHeaderCode:553836644633a83264bc918-08286701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '594052538a4a04822ef9e135b2ef1d836cb73ded' => 
    array (
      0 => 'D:\\open_server\\OSPanel\\domains\\utke\\wa-system\\webasyst\\templates\\actions-legacy\\profile\\ProfileContent.html',
      1 => 1617787741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '553836644633a83264bc918-08286701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_633a83264c4410_66845410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_633a83264c4410_66845410')) {function content_633a83264c4410_66845410($_smarty_tpl) {?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><title></title><style>.t-dynamic-content:before, .t-dynamic-content:after{ content: " "; display: table; }</style><?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script><script>window.wa_skip_ajax_setup=1;</script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
</head><body><div class="t-dynamic-content"><!-- %content_start% --><div class="block double-padded"><i class="icon16 loading"></i></div><!-- %content_end% --></div>

<script>( function($) {

    var ProfileTab = ( function($) {

        ProfileTab = function(options) {
            var that = this;

            // DOM
            that.$frame = options["$frame"];

            // VARS
            that.rootWindow = options["rootWindow"];

            // DYNAMIC VARS

            // INIT
            that.initClass();
        };

        ProfileTab.prototype.initClass = function() {
            var that = this;
            //
            that.bindEvents();
        };

        ProfileTab.prototype.bindEvents = function() {
            var that = this;

            /* Make links open in parent window instead of iframe */
            $(document).on("click", "a", function() {
                var $link = $(this);
                if (!$link.attr("target")) {
                    $link.attr("target", "_parent");
                }
            });
        };

        ProfileTab.prototype.reload = function() {
            var that = this,
                rootWindow = that.rootWindow;

            rootWindow.setTimeout(function() {
                var $tab = rootWindow.$(".t-profile-tabs .t-tab.is-selected", rootWindow.document.body);
                that.$frame.remove();
                $tab.removeClass("is-selected").find("a").click();
            }, 0);
        };

        ProfileTab.prototype.initScrollWatcher = function( $block, callback ) {
            var that = this;

            if ( !(callback && (typeof callback === "function") ) ) {
                return false;
            }

            $(that.rootWindow).on("scroll resize", onScroll);

            function onScroll() {
                var is_exist = ( $.contains(that.rootWindow.document, that.$frame[0]) && $.contains(document, $block[0]) );
                if (is_exist) {
                    var visibleFrameH = getVisibleFrameHeight();
                    callback(visibleFrameH);
                } else {
                    $(that.rootWindow).off("scroll resize", onScroll);
                }
            }

            function getVisibleFrameHeight() {
                var $window = $(that.rootWindow),
                    display_w = parseInt( $window.width() ),
                    display_h = parseInt( $window.height() ),
                    scroll_top = parseInt( $window.scrollTop() ),
                    frame_o = that.$frame.offset(),
                    frame_top = parseInt(frame_o.top),
                    frame_w = parseInt(that.$frame.width()),
                    frame_h = parseInt(that.$frame.height()),
                    top, right, bottom, left;

                bottom = ( display_h + scroll_top - frame_top );
                if ( bottom < 0 ) {
                    bottom = 0;
                }
                if (bottom > frame_h) {
                    bottom = frame_h;
                }

                top = 0;
                if (scroll_top > frame_top) {
                    var delta = parseInt(scroll_top - frame_top);
                    top = (delta > frame_h) ? frame_h : delta;
                }

                left = right = null;

                return {
                    top: top,
                    right: right,
                    bottom: bottom,
                    left: left,
                    display: {
                        width: display_w,
                        height: display_h
                    },
                    frame: {
                        width: frame_w,
                        height: frame_h
                    }
                };
            }
        };

        ProfileTab.prototype.trigger = function() {
            var $ifr = this.rootWindow.$(this.$frame[0]);
            $ifr.trigger.apply($ifr, [].slice.call(arguments));
        };

        return ProfileTab;

    })(jQuery);

    window.profileTab = new ProfileTab({
        $frame: $(window.frameElement),
        rootWindow: window.parent
    });

})(jQuery);</script>

</body>
</html>
<?php }} ?>
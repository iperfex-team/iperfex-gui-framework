<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:15
  from "/var/www/html/iperfex/web/themes/tenant/_common/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7382be84747_34139581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c1ab1dfcfca64dcf9f0de9a610f950661d1f71e' => 
    array (
      0 => '/var/www/html/iperfex/web/themes/tenant/_common/index.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7382be84747_34139581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title><?php echo @constant('HEADTITLE');?>
</title>

       

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/font-icons/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-core.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-theme.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-forms.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/custom.css">

        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/header.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/content.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/applet.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/sticky_note.css" />
        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/table.css" />
       
        <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

     
        <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/base.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/sticky_note.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/iframe.js"><?php echo '</script'; ?>
>
       
        <?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

       
        
        

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/raphael-min.js"><?php echo '</script'; ?>
>
        
       <!-- <?php echo '<script'; ?>
 src="/admin/web/themes/tenant/js/jquery.easypiechart.js"><?php echo '</script'; ?>
> -->

    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody page-body" <?php echo $_smarty_tpl->tpl_vars['BODYPARAMS']->value;?>
>
    <div class="page-container">

        <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 <!-- Viene del tpl menu.tlp-->
        <?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
        <div class="div_msg_errors" id="message_error">
                    <div style="height:24px">
                        <div class="div_msg_errors_title" style="padding-left:5px">
                            <b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b>
                        </div>
                        <div class="div_msg_errors_dismiss">
                            <input type="button" onclick="hide_message_error();" value="<?php echo $_smarty_tpl->tpl_vars['md_message_title']->value;?>
"/>
                        </div>
                    </div>
            <div style="padding:2px 10px 2px 10px">
            <?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>

            </div>
        </div>
        <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="main" style="margin-left:22px;">
            <div class="div-footer"><a target="_blank" href="<?php echo @constant('FOOTERHREF');?>
"><img src="<?php echo @constant('FOOTERIMG');?>
" width="<?php echo @constant('FOOTERWIDTH');?>
" height="<?php echo @constant('FOOTERHEIGHT');?>
" title="iPERFEX" /></a><?php echo @constant('LICENSEDBY');?>
</div>
        </footer>

        <br />

         <div id="neo-sticky-note" class="neo-display-none">
                  <div id="neo-sticky-note-text"></div>
                  <div id="neo-sticky-note-text-edit" class="neo-display-none">
                        <textarea id="neo-sticky-note-textarea"></textarea>
                        <div id="neo-sticky-note-text-char-count"></div>
                        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_NOTE']->value;?>
" class="neo-submit-button" id="neo-submit-button" onclick="send_sticky_note()" />
                        <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1"></div>
                  </div>
                  <div id="neo-sticky-note-text-edit-delete"></div>
                </div>


        <!-- Neo Progress Bar -->
        <div class="neo-modal-elastix-popup-box">
            <div class="neo-modal-elastix-popup-title"></div>
            <div class="neo-modal-elastix-popup-close"></div>
            <div class="neo-modal-elastix-popup-content"></div>
        </div>
        <div class="neo-modal-elastix-popup-blockmask"></div>

    <!-- Bottom Scripts -->
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/gsap/main-gsap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/joinable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/resizeable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-api.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-demo.js"><?php echo '</script'; ?>
>
    </div>
    </body>
</html>
<?php }
}

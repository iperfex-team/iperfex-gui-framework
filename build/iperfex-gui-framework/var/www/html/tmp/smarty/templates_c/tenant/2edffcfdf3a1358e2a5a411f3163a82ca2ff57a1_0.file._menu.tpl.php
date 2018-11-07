<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:15
  from "/var/www/html/iperfex/web/themes/tenant/_common/_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7382be39194_00865887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2edffcfdf3a1358e2a5a411f3163a82ca2ff57a1' => 
    array (
      0 => '/var/www/html/iperfex/web/themes/tenant/_common/_menu.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7382be39194_00865887 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['AUTO_POPUP']->value == '1') {?>
   
        <?php echo '<script'; ?>
 type='text/javascript'>
        $('.togglestickynote').ready(function(e) {
            $("#neo-sticky-note-auto-popup").attr('checked', true);
            note();
        });
        <?php echo '</script'; ?>
>
   
<?php }?>


<?php echo '<script'; ?>
 type='text/javascript'>
var themeName='elastixneo'; //nombre del tema
$(document).ready(function(){
    $("#togglebookmark").click(function() {
        var imgBookmark = $("#togglebookmark").attr('src');
        if(/bookmarkon.png/.test(imgBookmark)) {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmark.png");
        } else {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmarkon.png");
        }
    });



    $("#export_button").hover(
      function () {
          $(this).addClass("exportBorder");
      },
      function () {
          $(this).removeClass("exportBorder");
          $(this).attr("aria-expanded","false");
          $(this).removeClass("exportBackground");
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
      }
    );
    $("#export_button").click(
      function () {
          if($(this).attr("aria-expanded") == "false"){
          var exportPosition = $('#export_button').position();
          var top = exportPosition.top + 41;
          var left = exportPosition.left - 3;
          $("#subMenuExport").css('top',top+"px");
          $("#subMenuExport").css('left',left+"px");
          $(this).attr("aria-expanded","true");
          $(this).addClass("exportBackground");
          $(".letranodec").css("color","#FFFFFF");
          $("#subMenuExport").removeClass("neo-display-none");
          }
          else{
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
          $(this).removeClass("exportBackground");
          $(this).attr("aria-expanded","false");
          }
      }
    );
   
    $("#subMenuExport").hover(
      function () {
        $(this).removeClass("neo-display-none");
        $(".letranodec").css("color","#FFFFFF");
        $("#export_button").attr("aria-expanded","true");
        $("#export_button").addClass("exportBackground");
      },
      function () {
        $(this).addClass("neo-display-none");
        $(".letranodec").css("color","#444444");
        $("#export_button").removeClass("exportBackground");
        $("#export_button").attr("aria-expanded","false");
      }
    );
});

function removeNeoDisplayOnMouseOut(ref){
    $(ref).find('div').addClass('neo-display-none');
}

function removeNeoDisplayOnMouseOver(ref){
    $(ref).find('div').removeClass('neo-display-none');
}
<?php echo '</script'; ?>
>


<input type="hidden" id="lblTextMode" value="<?php echo $_smarty_tpl->tpl_vars['textMode']->value;?>
" />
<input type="hidden" id="lblHtmlMode" value="<?php echo $_smarty_tpl->tpl_vars['htmlMode']->value;?>
" />
<input type="hidden" id="lblRegisterCm"   value="<?php echo $_smarty_tpl->tpl_vars['lblRegisterCm']->value;?>
" />
<input type="hidden" id="lblRegisteredCm" value="<?php echo $_smarty_tpl->tpl_vars['lblRegisteredCm']->value;?>
" />
<input type="hidden" id="lblCurrentPassAlert" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblNewRetypePassAlert"   value="<?php echo $_smarty_tpl->tpl_vars['NEW_RETYPE_PASSWORD_ALERT']->value;?>
" />
<input type="hidden" id="lblPassNoTMatchAlert" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORDS_NOT_MATCH']->value;?>
" />
<input type="hidden" id="lblChangePass" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>
" />
<input type="hidden" id="lblCurrentPass" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PASSWORD']->value;?>
" />
<input type="hidden" id="lblRetypePass" value="<?php echo $_smarty_tpl->tpl_vars['RETYPE_PASSWORD']->value;?>
" />
<input type="hidden" id="lblNewPass" value="<?php echo $_smarty_tpl->tpl_vars['NEW_PASSWORD']->value;?>
" />
<input type="hidden" id="btnChagePass" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD_BTN']->value;?>
" />
<input type="hidden" id="userMenuColor" value="<?php echo $_smarty_tpl->tpl_vars['MENU_COLOR']->value;?>
" />
<input type="hidden" id="lblSending_request" value="<?php echo $_smarty_tpl->tpl_vars['SEND_REQUEST']->value;?>
" />
<input type="hidden" id="toolTip_addBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADD_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removeBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVE_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_addingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADDING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_hideTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDE_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOW_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_hidingTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDING_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showingTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOWING_IZQTAB']->value;?>
" />
<input type="hidden" id="amount_char_label" value="<?php echo $_smarty_tpl->tpl_vars['AMOUNT_CHARACTERS']->value;?>
" />
<input type="hidden" id="save_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_SAVE_NOTE']->value;?>
" />
<input type="hidden" id="get_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_GET_NOTE']->value;?>
" />
<input type="hidden" id="elastix_theme_name" value="<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
" />
<input type="hidden" id="lbl_no_description" value="<?php echo $_smarty_tpl->tpl_vars['LBL_NO_STICKY']->value;?>
" />

<!-- inicio del menú tipo acordeon-->
<div class="sidebar-menu">
    <header class="logo-env"> 
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <img class="header-img" src="<?php echo @constant('LOGO');?>
" width="<?php echo @constant('MENUWIDTH');?>
" height="<?php echo @constant('MENUHEIGHT');?>
" alt="" />
            </a>
        </div>
        <!-- logo collapse icon -->            
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
             
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li id="search">
            <form method="get" action="">
                <input type="text" id="search_module_elastix" name="search_module_elastix" class="search-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['MODULES_SEARCH']->value;?>
"/>
                <button type="submit">
                    <i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <!--recorremos el arreglo del menu nivel primario-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMainMenu']->value, 'menu', false, 'idMenu', 'menuMain', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idMenu']->value => $_smarty_tpl->tpl_vars['menu']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['idMenu']->value == $_smarty_tpl->tpl_vars['idMainMenuSelected']->value) {?>
                <li class="active opened active">
            <?php } else { ?>
                <li>
            <?php }?>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
">
                         <i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
"></i>

                        <span><?php echo $_smarty_tpl->tpl_vars['menu']->value['description'];?>
</span>
                    </a>
                    <ul>
                        <!--recorremos el arreglo del menu nivel secundario-->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value['children'], 'subMenu', false, 'idSubMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu']->value => $_smarty_tpl->tpl_vars['subMenu']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['idSubMenu']->value == $_smarty_tpl->tpl_vars['idSubMenuSelected']->value) {?>
                                <li class="active opened active">
                            <?php } else { ?>
                                <li>
                            <?php }?>
                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
">
                                        <span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['description'];?>
</span>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['subMenu']->value['children']) {?>
                                        <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subMenu']->value['children'], 'subMenu2', false, 'idSubMenu2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['idSubMenu2']->value => $_smarty_tpl->tpl_vars['subMenu2']->value) {
?>
                                                <li>
                                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
">
                                                        <span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['description'];?>
</span>
                                                    </a>
                                                </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
                                        </ul>
                                    <?php }?>
                                </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        
        <?php echo $_smarty_tpl->tpl_vars['SHORTCUT']->value;?>

        
    </ul>            
</div>
<!-- fin del menú tipo acordeon-->

<!-- inicio del head principal-->
<div style="height:71px;background-color:#0489B1;padding:15px;">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">
        
            <!-- Profile Info -->
            <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                    <img  style="border:0px" src="index.php?menu=_elastixutils&action=getImage&ID=<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
&rawmode=yes" alt="" class="img-circle" width="44" />
                    <?php echo $_smarty_tpl->tpl_vars['USER_LOGIN']->value;?>

                </a>
                
                <ul class="dropdown-menu">
                    
                    <!-- Reverse Caret -->
                    <li class="caret"></li>
                    
                    <!-- Profile sub-links -->
                    <li>
                        <a style="cursor: pointer;" onclick="setAdminPassword();">
                            <i class="entypo-user"></i>
                            <?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>

                        </a>
                    </li>
                </ul>
            </li>
        
        </ul>
       
    </div>
    
    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix pull-none-xsm">
        
        <ul class="list-inline links-list pull-right">
            
            <!-- Language Selector -->			
            <li class="dropdown language-selector profile-info">
                <a href="index.php?menu=language">
                    Language: &nbsp;
                         
                            <img  style="border:0px" src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/flags/<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
.png" />
                       
                </a>
            </li>
            
            <li class="sep"></li>
            
            <li class="dropdown profile-info">
                <a href="?logout=yes">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>
        
    </div>
    
</div>

				<!-- Breadcrumb 3 -->
<ol class="breadcrumb bc-2">
   
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BREADCRUMB']->value, 'value', false, NULL, 'menu', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['total'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['first'] : null)) {?> 
             <li>
                <a href="/"> <i class="entypo-home"></i></a>
                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
             </li>
        <?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_menu']->value['last'] : null)) {?> 
            <li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</strong></li>
        <?php } else { ?> 
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php }?> 
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol>

<!-- contenido del modulo-->
<div id="neo-contentbox">
    <div id="neo-contentbox-maincolumn">
        <!--<div class="neo-module-title"><div class="neo-module-name-left"></div>
            <span class="neo-module-name">
            <?php if ($_smarty_tpl->tpl_vars['icon']->value != null) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" width="22" height="22" align="absmiddle" />
            <?php }?>
            &nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><div class="neo-module-name-right"></div>
            <div class="neo-module-title-buttonstab-right"></div><span class="neo-module-title-buttonstab">
            <?php if ($_smarty_tpl->tpl_vars['STATUS_STICKY_NOTE']->value == 'true') {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/tab_notes_on.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" class="togglestickynote" style="cursor: pointer;" />
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/tab_notes.png" width="23" height="21" alt="tabnotes" id="togglestickynote1" class="togglestickynote" style="cursor: pointer;" />
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['viewMenuTab']->value) {?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['IMG_BOOKMARKS']->value == 'bookmark.png') {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['IMG_BOOKMARKS']->value;?>
" width="24" height="24" alt="bookmark" title="<?php echo $_smarty_tpl->tpl_vars['ADD_BOOKMARK']->value;?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['IMG_BOOKMARKS']->value;?>
" width="24" height="24" alt="bookmark" title="<?php echo $_smarty_tpl->tpl_vars['REMOVE_BOOKMARK']->value;?>
" id="togglebookmark" style="cursor: pointer;" onclick='addBookmark()' />
            <?php }?>
            </span><div class="neo-module-title-buttonstab-left"></div>
        </div>-->
        <input type="hidden" id="elastix_framework_module_id" value="<?php echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;?>
" />
        <input type="hidden" id="elastix_framework_webCommon" value="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
" />
        <div class="neo-module-content">




<?php }
}

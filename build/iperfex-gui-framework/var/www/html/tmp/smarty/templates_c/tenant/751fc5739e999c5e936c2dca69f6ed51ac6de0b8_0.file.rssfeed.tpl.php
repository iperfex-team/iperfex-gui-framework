<?php
/* Smarty version 3.1.30, created on 2018-05-03 21:17:35
  from "/var/www/html/iperfex/web/apps/dashboard/applets/News/tpl/rssfeed.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebb4afa7b5e3_86598143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '751fc5739e999c5e936c2dca69f6ed51ac6de0b8' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/applets/News/tpl/rssfeed.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebb4afa7b5e3_86598143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" media="screen" type="text/css" href="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/News/tpl/css/styles.css" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS_LIST']->value, 'NEWS_ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NEWS_ITEM']->value) {
?>
<div class="neo-applet-news-row">
    <span class="neo-applet-news-row-date"><?php echo $_smarty_tpl->tpl_vars['NEWS_ITEM']->value['date_format'];?>
</span>
    <a href="https://twitter.com/share?original_referer=<?php echo rawurlencode($_smarty_tpl->tpl_vars['WEBSITE']->value);?>
&related=&source=tweetbutton&text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['title']);?>
&url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['link']);?>
&via=iperfexGui"  target="_blank">
        <img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/News/images/twitter-icon.png" width="16" height="16" alt="tweet" />
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['NEWS_ITEM']->value['link'];?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
</div>
<?php
}
} else {
?>

<div class="neo-applet-news-row"><?php echo $_smarty_tpl->tpl_vars['NO_NEWS']->value;?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}

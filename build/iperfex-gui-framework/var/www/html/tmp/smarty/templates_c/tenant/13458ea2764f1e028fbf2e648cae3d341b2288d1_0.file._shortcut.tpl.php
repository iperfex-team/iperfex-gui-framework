<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:15
  from "/var/www/html/iperfex/web/themes/tenant/_common/_shortcut.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7382b8e93c1_34101200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13458ea2764f1e028fbf2e648cae3d341b2288d1' => 
    array (
      0 => '/var/www/html/iperfex/web/themes/tenant/_common/_shortcut.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7382b8e93c1_34101200 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
    <?php if ($_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS']->value) {?>
        <a href="#">
            <i class="fa fa-star"></i>
            <span><?php echo $_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS_LABEL']->value;?>
</span>
        </a>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS']->value, 'shortcut', false, NULL, 'shortcut', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shortcut']->value) {
?>
                <li>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['shortcut']->value['id_menu'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['name'];?>
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

<li>
    <a href="#">
         <i class="fa fa-history"></i>
        <span><?php echo $_smarty_tpl->tpl_vars['SHORTCUT_HISTORY_LABEL']->value;?>
</span>
    </a>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHORTCUT_HISTORY']->value, 'shortcut');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shortcut']->value) {
?>
            <li>
                <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['shortcut']->value['id_menu'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['name'];?>
</span>
                </a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </ul>
</li><?php }
}

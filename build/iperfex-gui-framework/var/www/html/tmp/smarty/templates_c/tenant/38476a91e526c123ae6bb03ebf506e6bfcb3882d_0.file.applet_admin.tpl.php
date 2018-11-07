<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:22
  from "/var/www/html/iperfex/web/apps/applet_admin/applet_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae738320b8ee0_76278953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38476a91e526c123ae6bb03ebf506e6bfcb3882d' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/applet_admin/applet_admin.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae738320b8ee0_76278953 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr class="letra12">
        <td align="left">
            <?php if ($_smarty_tpl->tpl_vars['EDIT_APP']->value) {?>
                <input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
            <?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="99%" border="0">
    <tr class="letra12">
        <td align="left" width="20%"><b><?php echo $_smarty_tpl->tpl_vars['Applet']->value;?>
</b></td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['Activated']->value;?>
</b></td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applets']->value, 'applet', false, 'q', 'appletrow', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['applet']->value) {
?>
        <tr class="letra12">
            <td align="left">
                <b><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
:</b>
            </td>
            <td align="left">
                <input name="chkdau_<?php echo $_smarty_tpl->tpl_vars['applet']->value['id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['applet']->value['activated']) {?> checked="checked" <?php }?>> 
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<?php }
}

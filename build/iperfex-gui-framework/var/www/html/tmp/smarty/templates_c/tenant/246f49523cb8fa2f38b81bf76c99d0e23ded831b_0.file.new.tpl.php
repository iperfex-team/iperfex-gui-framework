<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:40:51
  from "/var/www/html/iperfex/web/apps/themes_system/new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae73903398202_68801533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '246f49523cb8fa2f38b81bf76c99d0e23ded831b' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/themes_system/new.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae73903398202_68801533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
    <td>
            <?php if ($_smarty_tpl->tpl_vars['EDIT_THEME']->value) {?><input class="button" type="submit" name="changeTheme" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE']->value;?>
" ><?php }?>
    </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['themes']->value['LABEL'];?>
:</b></td>
    <td width="35%"><?php echo $_smarty_tpl->tpl_vars['themes']->value['INPUT'];?>
</td>
    </tr>
</table>
</form><?php }
}

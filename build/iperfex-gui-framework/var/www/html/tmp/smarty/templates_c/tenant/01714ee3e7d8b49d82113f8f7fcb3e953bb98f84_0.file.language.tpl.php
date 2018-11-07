<?php
/* Smarty version 3.1.30, created on 2018-05-03 21:17:56
  from "/var/www/html/iperfex/web/apps/language/language.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebb4c48c88f9_57619671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01714ee3e7d8b49d82113f8f7fcb3e953bb98f84' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/language/language.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebb4c48c88f9_57619671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
	<td>
        <?php if ($_smarty_tpl->tpl_vars['conectiondb']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['EDIT_LANG']->value) {?><input class="button" type="submit" name="save_language" value="<?php echo $_smarty_tpl->tpl_vars['CAMBIAR']->value;?>
"><?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['MSG_ERROR']->value;?>

        <?php }?>
	</td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['language']->value['LABEL'];?>
:</b></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['language']->value['INPUT'];?>
</td>
    </tr>
</table>
</form><?php }
}

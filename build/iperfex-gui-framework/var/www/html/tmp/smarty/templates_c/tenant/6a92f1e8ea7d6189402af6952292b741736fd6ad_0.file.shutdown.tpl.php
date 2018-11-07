<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:40
  from "/var/www/html/iperfex/web/apps/shutdown/shutdown.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf40ca63e3_41886391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a92f1e8ea7d6189402af6952292b741736fd6ad' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/shutdown/shutdown.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf40ca63e3_41886391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['SHUTDOWN']->value) {?>
            <input class="button" type="submit" name="shutdown" value="<?php echo $_smarty_tpl->tpl_vars['ACCEPT']->value;?>
" onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')">
          <?php }?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="1">&nbsp;<?php echo $_smarty_tpl->tpl_vars['HALT']->value;?>
 </td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td width="15%"><input type="radio" name="shutdown_mode" value="2" checked>&nbsp;<?php echo $_smarty_tpl->tpl_vars['REBOOT']->value;?>
</td>
	<td width="35%">&nbsp;</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }
}

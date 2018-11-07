<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:44
  from "/var/www/html/iperfex/web/apps/shutdown/shutdown_in_progress.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf4483b5f6_69811573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f3b36b0114265a4706d1a427ba322c49614330' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/shutdown/shutdown_in_progress.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf4483b5f6_69811573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td><img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/wait.gif" border="0" valign="middle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['SHUTDOWN_MSG']->value;?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php }
}

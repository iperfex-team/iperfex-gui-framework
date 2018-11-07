<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:18
  from "/var/www/html/iperfex/web/apps/network_parameters/network_edit_interfase.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf2a04bf07_89930635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f494d2b877aff19561241f93aa2946225420c9b9' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/network_parameters/network_edit_interfase.tpl',
      1 => 1525103372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf2a04bf07_89930635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
          <input class="button" type="submit" name="save_interfase_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" 
                 onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_EDIT']->value;?>
')">
          <input class="button" type="submit" name="cancel_interfase_edit" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
  "></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['ip']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['ip']->value['INPUT'];?>
</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>

          <tr>
  <td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span><?php }?></td>
  <td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['INPUT'];?>
</td>
     </tr>
      <tr>
  <td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span> <?php }?></td>
  <td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['INPUT'];?>
</td>
      </tr>

      <tr>
  <td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['LABEL'];?>
: </td>
  <td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['dev_id']->value['INPUT'];?>

</form>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:58:30
  from "/var/www/html/iperfex/web/apps/network_parameters/network.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae73d262a58a5_46774679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdc87b2686a8c7812d9e2fe44c2b8330e190e68f' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/network_parameters/network.tpl',
      1 => 1525103372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae73d262a58a5_46774679 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
          <input class="button" type="submit" name="save_network_changes" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
        <td align="right" nowrap> <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span class="letra12"> <span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span> <?php }?></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['host']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?> <span  class="required">*</span> <?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['host']->value['INPUT'];?>
</td>

      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php echo $_smarty_tpl->tpl_vars['ETHERNET_INTERFASES_LIST']->value;?>

<?php }
}

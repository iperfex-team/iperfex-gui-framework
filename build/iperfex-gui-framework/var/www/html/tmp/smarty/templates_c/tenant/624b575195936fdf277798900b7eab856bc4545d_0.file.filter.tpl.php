<?php
/* Smarty version 3.1.30, created on 2018-05-07 17:17:28
  from "/var/www/html/iperfex/web/apps/organization_permission/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0c26829a697_42015048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '624b575195936fdf277798900b7eab856bc4545d' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/organization_permission/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0c26829a697_42015048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="5%" align="right"><?php echo $_smarty_tpl->tpl_vars['filter_resource']->value['LABEL'];?>
:&nbsp;&nbsp;</td>
        <td width="10%" align="left"><?php echo $_smarty_tpl->tpl_vars['filter_resource']->value['INPUT'];?>
</td>
		<td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /><td>
    </tr>
</table>

<input type="hidden" name="resource_apply" value="<?php echo $_smarty_tpl->tpl_vars['resource_apply']->value;?>
">
<?php }
}

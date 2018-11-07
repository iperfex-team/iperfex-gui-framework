<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:01
  from "/var/www/html/iperfex/web/apps/organization/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf19449892_02343621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd7d6a84f5823fd9f2dfeb1ec1434a66d15a7bb' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/organization/filter.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf19449892_02343621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="tabForm" style="font-size: 14px" width="100%" cellpadding="4" align="center">
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['fname']->value['LABEL'];?>
: </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fname']->value['INPUT'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fdomain']->value['LABEL'];?>
: </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fdomain']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['fstate']->value['LABEL'];?>
: </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fstate']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
    </tr>
</table><?php }
}

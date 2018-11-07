<?php
/* Smarty version 3.1.30, created on 2018-05-07 15:08:22
  from "/var/www/html/iperfex/web/apps/trunks/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0a42635bc94_65795139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f76a726eddb2b1f9ae46b5633b08cfb393ec5cd0' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/trunks/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0a42635bc94_65795139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="8" align="center">
    <tr class="letra12">
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
: </td><td><?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td ><?php echo $_smarty_tpl->tpl_vars['technology']->value['LABEL'];?>
: </td><td><?php echo $_smarty_tpl->tpl_vars['technology']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td ><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: </td><td><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
    </tr>
</table><?php }
}

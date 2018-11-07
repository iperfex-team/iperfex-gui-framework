<?php
/* Smarty version 3.1.30, created on 2018-05-13 15:56:40
  from "/var/www/html/iperfex/web/apps/outbound_route/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af89878da4018_52469091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e441deee600c07502950e680cb6fa8ae8d8363' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/outbound_route/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af89878da4018_52469091 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="8" align="center">
    <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
        <tr class="letra12">
            <td width="10%"><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
: </td><td><?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>
</td>
        </tr>
    <?php }?>
    <tr class="letra12">
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: </td><td><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
    </tr>
</table><?php }
}

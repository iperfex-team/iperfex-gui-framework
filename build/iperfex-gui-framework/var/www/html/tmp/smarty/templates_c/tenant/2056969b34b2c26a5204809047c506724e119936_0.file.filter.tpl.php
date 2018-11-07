<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:04
  from "/var/www/html/iperfex/web/apps/userlist/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf1c5adbb4_98236945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2056969b34b2c26a5204809047c506724e119936' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/userlist/filter.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf1c5adbb4_98236945 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form style='margin-bottom:0;' method='POST' action='?menu=userlist'>
  <table width="100%" border="0" cellspacing="0" cellpadding="8" align="center">
      <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
        <tr class="letra12">
            <td ><?php echo $_smarty_tpl->tpl_vars['idOrganization']->value['LABEL'];?>
: <?php echo $_smarty_tpl->tpl_vars['idOrganization']->value['INPUT'];?>
</td>
        </tr>
      <?php }?>
      <tr class="letra12">
        <td ><?php echo $_smarty_tpl->tpl_vars['username']->value['LABEL'];?>
: <?php echo $_smarty_tpl->tpl_vars['username']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
      </tr>
   </table>
</form><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-05-07 11:38:31
  from "/var/www/html/iperfex/web/apps/managerisdxconfig/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af072f771ec21_38562071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43797b2e7b5499ff7b6a2b6e56ca1898bdbe97dd' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/managerisdxconfig/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af072f771ec21_38562071 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="tabForm" style="font-size: 14px; min-width: 50%;" cellpadding="4" >
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['fid']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fid']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ftitle']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['ftitle']->value['INPUT'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fkey']->value['LABEL'];?>
: </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fkey']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['fdescription']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fdescription']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['fvalue']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fvalue']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['fgroup']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fgroup']->value['INPUT'];?>
</td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['forganization']->value['LABEL'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['forganization']->value['INPUT'];?>
</td>
        </tr>
    <?php }?>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
    </tr>
</table><?php }
}

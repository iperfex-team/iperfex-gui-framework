<?php
/* Smarty version 3.1.30, created on 2018-05-07 11:38:38
  from "/var/www/html/iperfex/web/apps/calltimetemplates/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af072fed91162_26990308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1bc9a07a4e86258e3e1ee54e7ec087fd9212a96' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/calltimetemplates/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af072fed91162_26990308 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="tabForm" style="font-size: 14px; min-width: 50%;" cellpadding="4" >
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['fid']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fid']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['fname']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fname']->value['INPUT'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fstatus']->value['LABEL'];?>
: </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['fstatus']->value['INPUT'];?>
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

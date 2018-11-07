<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:03:12
  from "/var/www/html/iperfex/web/apps/currency/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf6012eef2_19352406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac87cbe499f21ef77ad418f3ea277e0cbe3ca968' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/currency/form.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf6012eef2_19352406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['EDIT_CURR']->value) {?><td align="left"><input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"></td><?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['currency']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['currency']->value['INPUT'];?>
</td>
    </tr>

</table>
<?php }
}

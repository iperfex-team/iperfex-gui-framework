<?php
/* Smarty version 3.1.30, created on 2018-05-07 15:08:49
  from "/var/www/html/iperfex/web/apps/grid_config/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0a441a469c8_03660933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8debe1fa46aa1183b6cf75d2e465604fc824da31' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/grid_config/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0a441a469c8_03660933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['EDIT_CURR']->value) {?><td align="left"><input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"></td><?php }?>
    </tr>
</table>
<h4><?php echo $_smarty_tpl->tpl_vars['rows_per_page']->value;?>
</h4>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['campaign_inbound']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['campaign_inbound']->value['INPUT'];?>
</td>
    </tr>

   <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['campaign_outbound']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['campaign_outbound']->value['INPUT'];?>
</td>
    </tr>

  <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['questionnaire']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['questionnaire']->value['INPUT'];?>
</td>
    </tr>

</table>
<?php }
}

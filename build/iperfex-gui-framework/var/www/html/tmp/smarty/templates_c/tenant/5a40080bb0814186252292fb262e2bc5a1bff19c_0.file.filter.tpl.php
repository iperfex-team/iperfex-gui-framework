<?php
/* Smarty version 3.1.30, created on 2018-05-07 15:08:10
  from "/var/www/html/iperfex/web/apps/campaign_inbound/filter.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0a41a36bab0_98582015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a40080bb0814186252292fb262e2bc5a1bff19c' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/campaign_inbound/filter.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0a41a36bab0_98582015 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/modifier.date_format.php';
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
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['fuser']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['fuser']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['fdate']->value['LABEL'];?>
: </td>
        <td>
            <div class="input-group datepicker" data-provide="datepicker" data-date="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" data-date-format="yyyy-mm-dd">
                <?php echo $_smarty_tpl->tpl_vars['fdate']->value['INPUT'];?>

                <i class="fa fa-calendar"></i>
            </div>
        </td>
        <td>
          <input class="input-group" name='limit' type='number' >
       </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['forganization']->value['LABEL'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['forganization']->value['INPUT'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['limit']->value['LABEL'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['limit']->value['INPUT'];?>
</td>
        </tr>
    <?php }?>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</td>
    </tr>
</table>
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-05-04 13:14:32
  from "/var/www/html/iperfex/web/apps/dashboard/applets/HardDrives/tpl/dirspacereport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aec94f82c2ec8_12621848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7dc94ac9eb67d2d99919dfb4ab222192756e0e' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/applets/HardDrives/tpl/dirspacereport.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aec94f82c2ec8_12621848 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['use'];?>
</div>
</div>
<div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['use'];?>
</div>
</div>
<div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['use'];?>
</div>
</div>
<?php }
}

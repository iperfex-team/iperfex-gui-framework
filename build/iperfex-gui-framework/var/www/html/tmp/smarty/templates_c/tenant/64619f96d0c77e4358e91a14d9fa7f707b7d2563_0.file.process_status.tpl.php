<?php
/* Smarty version 3.1.30, created on 2018-05-03 21:17:29
  from "/var/www/html/iperfex/web/apps/dashboard/applets/ProcessesStatus/tpl/process_status.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebb4a986c485_85970897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64619f96d0c77e4358e91a14d9fa7f707b7d2563' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/applets/ProcessesStatus/tpl/process_status.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebb4a986c485_85970897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" media="screen" type="text/css" href="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/js/javascript.js'><?php echo '</script'; ?>
>

<div class="neo-applet-processes-menu">
<input type="hidden" id="neo_applet_selected_process" value="" />
<div id="neo-applet-processes-controles">
<input type="button" class="neo_applet_process" name="processcontrol_stop" id="neo_applet_process_stop" value="<?php echo $_smarty_tpl->tpl_vars['sMsgStop']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_start" id="neo_applet_process_start" value="<?php echo $_smarty_tpl->tpl_vars['sMsgStart']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_restart" id="neo_applet_process_restart" value="<?php echo $_smarty_tpl->tpl_vars['sMsgRestart']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_activate" id="neo_applet_process_activate" value="<?php echo $_smarty_tpl->tpl_vars['sMsgActivate']->value;?>
" />
<input type="button" class="neo_applet_process" name="processcontrol_deactivate" id="neo_applet_process_deactivate" value="<?php echo $_smarty_tpl->tpl_vars['sMsgDeactivate']->value;?>
" />
</div>
<img id="neo-applet-processes-processing" src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/loading.gif" style="display: none;" alt="" />
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'infoServicio', false, 'sServicio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sServicio']->value => $_smarty_tpl->tpl_vars['infoServicio']->value) {
?>
<div class="neo-applet-processes-row">
    <div class="neo-applet-processes-row-icon"><img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['icon'];?>
" width="32" height="28" alt="<?php echo $_smarty_tpl->tpl_vars['sServicio']->value;?>
" /></div>
    <div class="neo-applet-processes-row-name"><?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['name_service'];?>
</div>
    <div class="neo-applet-processes-row-menu">
        <input type="hidden" name="key-servicio" id="key-servicio" value="<?php echo $_smarty_tpl->tpl_vars['sServicio']->value;?>
" />
        <input type="hidden" name="status-servicio" id="status-servicio" value="<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_service'];?>
" />
        <input type="hidden" name="activate-process" id="activate-process" value="<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['activate'];?>
" />
        <img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/ProcessesStatus/images/<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_service_icon'];?>
" style="cursor:<?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['pointer_style'];?>
;" width="15" height="15" alt="menu" />
    </div>
    <div class="neo-applet-processes-row-status-msg" style="color: <?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['infoServicio']->value['status_desc'];?>
</div>
    <div class="neo-applet-processes-row-status-icon"></div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}

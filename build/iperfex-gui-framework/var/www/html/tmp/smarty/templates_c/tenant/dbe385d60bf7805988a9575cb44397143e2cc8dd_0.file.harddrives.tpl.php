<?php
/* Smarty version 3.1.30, created on 2018-05-03 21:17:36
  from "/var/www/html/iperfex/web/apps/dashboard/applets/HardDrives/tpl/harddrives.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebb4b010bc95_92565291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbe385d60bf7805988a9575cb44397143e2cc8dd' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/applets/HardDrives/tpl/harddrives.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebb4b010bc95_92565291 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" media="screen" type="text/css" href="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/js/javascript.js'><?php echo '</script'; ?>
>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['part']->value, 'particion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['particion']->value) {
?>
<div>
    <?php if ($_smarty_tpl->tpl_vars['fastgauge']->value) {?>
	<div style="width: <?php echo $_smarty_tpl->tpl_vars['htmldiskuse_width']->value;?>
px; height: <?php echo $_smarty_tpl->tpl_vars['htmldiskuse_height']->value;?>
px;">
		<div style="position: relative; left: 33%; width: 33%; background: #6e407e;  height: 100%; border: 1px solid #000000;">
			<div style="position: relative; background: #3184d5; top: <?php echo $_smarty_tpl->tpl_vars['particion']->value['height_free'];?>
%; height: <?php echo $_smarty_tpl->tpl_vars['particion']->value['height_used'];?>
%">&nbsp;</div>
		</div>
	</div>
	<?php } else { ?>
	<img alt="ObtenerInfo_Particion" src="?menu=<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
&amp;rawmode=yes&amp;applet=HardDrives&amp;action=graphic&amp;percent=<?php echo $_smarty_tpl->tpl_vars['particion']->value['porcentaje_usado'];?>
" width="140" />	
	<?php }?>
    <div class="neo-applet-hd-innerbox">
      <div class="neo-applet-hd-innerbox-top">
       <img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/images/light_usedspace.png" width="13" height="11" alt="used" /> <?php echo $_smarty_tpl->tpl_vars['particion']->value['formato_porcentaje_usado'];?>
% <?php echo $_smarty_tpl->tpl_vars['LABEL_PERCENT_USED']->value;?>
 &nbsp;&nbsp;<img src="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/images/light_freespace.png" width="13" height="11" alt="used" /> <?php echo $_smarty_tpl->tpl_vars['particion']->value['formato_porcentaje_libre'];?>
% <?php echo $_smarty_tpl->tpl_vars['LABEL_PERCENT_AVAILABLE']->value;?>

      </div>
      <div class="neo-applet-hd-innerbox-bottom">
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_DISK_CAPACITY']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['sTotalGB'];?>
GB</div>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_MOUNTPOINT']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['punto_montaje'];?>
</div>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_DISK_VENDOR']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['sModelo'];?>
</div>
      </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


<div class="neo-divisor"></div>
<div id="harddrives_dirspacereport">
<p><?php echo $_smarty_tpl->tpl_vars['TEXT_WARNING_DIRSPACEREPORT']->value;?>
</p>
<button class="submit" id="harddrives_dirspacereport_fetch" ><?php echo $_smarty_tpl->tpl_vars['FETCH_DIRSPACEREPORT']->value;?>
</button>
</div><?php }
}

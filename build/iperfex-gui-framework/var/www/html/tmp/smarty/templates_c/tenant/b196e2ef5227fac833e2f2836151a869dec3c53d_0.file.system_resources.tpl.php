<?php
/* Smarty version 3.1.30, created on 2018-05-03 21:17:30
  from "/var/www/html/iperfex/web/apps/dashboard/applets/SystemResources/tpl/system_resources.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebb4aa5634e4_77843194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b196e2ef5227fac833e2f2836151a869dec3c53d' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/applets/SystemResources/tpl/system_resources.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebb4aa5634e4_77843194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" media="screen" type="text/css" href="web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/SystemResources/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/SystemResources/js/javascript.js'><?php echo '</script'; ?>
>
<div style='height:165px; position:relative; text-align:center;'>
    <div style='width:155px; float:left; position: relative;' id='cpugauge'>
	    <?php if ($_smarty_tpl->tpl_vars['fastgauge']->value) {?>
	    <div style="width: 140px; height: 140px;">
	        <div style="position: relative; left: 33%; width: 33%; background: #ffffff;  height: 100%; border: 1px solid #000000;">
	            <div style="position: relative; background: <?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['color'];?>
; top: <?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['height_free'];?>
%; height: <?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['height_used'];?>
%">&nbsp;</div>
	        </div>
	    </div>
	    <?php } else { ?>
	    <img alt="rbgauge" src="" />
	       
	    <?php }?>
        <div class="neo-applet-sys-gauge-percent"><?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['percent'];?>
%</div><div><?php echo $_smarty_tpl->tpl_vars['LABEL_CPU']->value;?>
</div>
        <input type="hidden" name="cpugauge_value" id="cpugauge_value" value="<?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['fraction'];?>
" />
    </div>
    <div style='width:154px; float:left; position: relative;' id='memgauge'>
        <?php if ($_smarty_tpl->tpl_vars['fastgauge']->value) {?>
        <div style="width: 140px; height: 140px;">
            <div style="position: relative; left: 33%; width: 33%; background: #ffffff;  height: 100%; border: 1px solid #000000;">
                <div style="position: relative; background: <?php echo $_smarty_tpl->tpl_vars['memgauge']->value['color'];?>
; top: <?php echo $_smarty_tpl->tpl_vars['memgauge']->value['height_free'];?>
%; height: <?php echo $_smarty_tpl->tpl_vars['memgauge']->value['height_used'];?>
%">&nbsp;</div>
            </div>
        </div>
        <?php } else { ?>
        <img alt="rbgauge" src="" />
           
        <?php }?>
        <div class="neo-applet-sys-gauge-percent"><?php echo $_smarty_tpl->tpl_vars['memgauge']->value['percent'];?>
%</div><div><?php echo $_smarty_tpl->tpl_vars['LABEL_RAM']->value;?>
</div>
        <input type="hidden" name="memgauge_value" id="memgauge_value" value="<?php echo $_smarty_tpl->tpl_vars['memgauge']->value['fraction'];?>
" />
    </div>
    <div style='width:155px; float:right; position: relative;' id='swapgauge'>
        <?php if ($_smarty_tpl->tpl_vars['fastgauge']->value) {?>
        <div style="width: 140px; height: 140px;">
            <div style="position: relative; left: 33%; width: 33%; background: #ffffff;  height: 100%; border: 1px solid #000000;">
                <div style="position: relative; background: <?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['color'];?>
; top: <?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['height_free'];?>
%; height: <?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['height_used'];?>
%">&nbsp;</div>
            </div>
        </div>
        <?php } else { ?>
        <img alt="rbgauge" src="" />
           
        <?php }?>
        <div class="neo-applet-sys-gauge-percent"><?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['percent'];?>
%</div><div><?php echo $_smarty_tpl->tpl_vars['LABEL_SWAP']->value;?>
</div>
        <input type="hidden" name="swapgauge_value" id="swapgauge_value" value="<?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['fraction'];?>
" />
    </div>
</div>
<div class='neo-divisor'></div>
<div class=neo-applet-tline>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_CPUINFO']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['cpu_info']->value;?>
</div>
</div>
<div class=neo-applet-tline>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_UPTIME']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['uptime']->value;?>
</div>
</div>
<div class='neo-applet-tline'>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_CPUSPEED']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['speed']->value;?>
</div>
</div>
<div class='neo-applet-tline'>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_MEMORYUSE']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'>RAM: <?php echo $_smarty_tpl->tpl_vars['memtotal']->value;?>
 SWAP: <?php echo $_smarty_tpl->tpl_vars['swaptotal']->value;?>
</div>
</div>
<?php }
}

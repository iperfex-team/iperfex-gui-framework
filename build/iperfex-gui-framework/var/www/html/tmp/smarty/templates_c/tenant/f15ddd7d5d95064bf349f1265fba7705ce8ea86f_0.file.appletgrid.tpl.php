<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:15
  from "/var/www/html/iperfex/web/apps/dashboard/appletgrid.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7382b8c6614_19933598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f15ddd7d5d95064bf349f1265fba7705ce8ea86f' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/dashboard/appletgrid.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae7382b8c6614_19933598 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="80%" cellspacing="0" id="applet_grid" align="center">
<tr>
    <td class="appletcolumn" id="applet_col_1">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applet_col_1']->value, 'applet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['applet']->value) {
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><img src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;<?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <img class='ima' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/reload.png' border='0' align='absmiddle' />
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><img class='ima' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif' border='0' align='absmiddle' />&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_LOADING']->value;?>
</div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </td>
    <td class="appletcolumn" id="applet_col_2">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['applet_col_2']->value, 'applet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['applet']->value) {
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><img src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;<?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <img src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/reload.png' border='0' align='absmiddle' />
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><img class='ima' src='web/apps/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif' border='0' align='absmiddle' />&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_LOADING']->value;?>
</div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </td>
</tr>
</table><?php }
}

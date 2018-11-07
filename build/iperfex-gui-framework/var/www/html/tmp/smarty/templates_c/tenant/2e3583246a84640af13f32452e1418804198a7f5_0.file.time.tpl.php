<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:40:55
  from "/var/www/html/iperfex/web/apps/time_config/time.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae739079bcd98_61612461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e3583246a84640af13f32452e1418804198a7f5' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/time_config/time.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae739079bcd98_61612461 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_select_time')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/function.html_select_time.php';
if (!is_callable('smarty_function_html_options')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/function.html_options.php';
echo '<script'; ?>
 type="text/javascript">
 
var serv_date2 = new Date(<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATETIME']->value;?>
);
var browser_date = new Date();
var serv_msecdiff = browser_date.getTime() - serv_date2.getTime();
<?php echo '</script'; ?>
>


<form action="#" method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
            <td align='left'><input class="button" type="submit" name="Actualizar" value="<?php echo $_smarty_tpl->tpl_vars['INDEX_ACTUALIZAR']->value;?>
" onClick="return confirm('<?php echo $_smarty_tpl->tpl_vars['TIME_MSG_1']->value;?>
');" /></td>
          </tr>
     </table>
</td>
</tr>
  <tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['SINCRONIZATION']->value;?>
:</b></td>
            <td><input type="checkbox" id="sync" name="sync" value="sync" <?php if ($_smarty_tpl->tpl_vars['SYNC']->value == true) {?> checked <?php }?> ></span></td>
          </tr>
          <tr> 
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['INDEX_HORA_SERVIDOR']->value;?>
:</b></td>
            <td><span id="SERVER_TIME" align='right'></span></td>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_FECHA']->value;?>
:</b></td>
            <td><input type="text" name="date" id="datepicker" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_DATE']->value;?>
" style = "width: 10em; color: rgb(136, 68, 0); background-color: rgb(250, 250, 250); border: 1px solid rgb(153, 153, 153); text-align: center;" READONLY>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_HORA']->value;?>
:</b></td>
            <td><?php echo smarty_function_html_select_time(array('prefix'=>"ServerDate_",'time'=>$_smarty_tpl->tpl_vars['DATETIME']->value),$_smarty_tpl);?>

            </td>
          </tr>
          <tr>
            <td width="15%"><b><?php echo $_smarty_tpl->tpl_vars['TIME_NUEVA_ZONA']->value;?>
:</b></td>
            <td><?php echo smarty_function_html_options(array('name'=>"TimeZone",'selected'=>$_smarty_tpl->tpl_vars['ZONA_ACTUAL']->value,'values'=>$_smarty_tpl->tpl_vars['LISTA_ZONAS']->value,'output'=>$_smarty_tpl->tpl_vars['LISTA_ZONAS']->value),$_smarty_tpl);?>

            </td>
          </tr>

        </table>
    </td>
  </tr>
  </table>
  <input type='hidden' name='configurar_hora' id='configurar_hora' value='0' />
</form>
<?php }
}

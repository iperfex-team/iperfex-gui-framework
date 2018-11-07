<?php
/* Smarty version 3.1.30, created on 2018-05-03 22:02:50
  from "/var/www/html/iperfex/web/apps/smtp/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aebbf4a1cb026_00533162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5dc96ce503f1ea3df26d7114688dd9e4e2f3d7' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/smtp/form.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aebbf4a1cb026_00533162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
         <td>
            <input class="button" name="save"  class="btn btn-info" value="<?php echo $_smarty_tpl->tpl_vars['CONFIGURATION_UPDATE']->value;?>
" type="submit" />&nbsp;&nbsp;
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#testmail"><?php echo $_smarty_tpl->tpl_vars['SEND_MAIL_TEST']->value;?>
</button>
                    <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
        </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%" >
    <tr class="letra12">
        <td align="left" width="9%"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
:</b></td>
        <td align="left" width="34%"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
        <td rowspan='5' width="40%"><?php echo $_smarty_tpl->tpl_vars['MSG_REMOTE_SMTP']->value;?>
</td>
        <td rowspan="5" width="10%">&nbsp;</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['LABEL'];?>
:</b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['SMTP_Server']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['relayhost']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['port']->value['LABEL'];?>
: <span class="required">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['port']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['user']->value['INPUT'];?>
 &nbsp;&nbsp;&nbsp;&nbsp;(<?php echo $_smarty_tpl->tpl_vars['Example']->value;?>
. <span id="example">example@domain.com</span>)</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['password']->value['LABEL'];?>
: <span class="required validpass">*</span></b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['password']->value['INPUT'];?>
</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['autentification']->value['LABEL'];?>
: </b></td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['autentification']->value['INPUT'];
echo $_smarty_tpl->tpl_vars['MSG_REMOTE_AUT']->value;?>
</td>
    </tr>
</table>

<input type="hidden" name="lbldomain" id="lbldomain" value="<?php echo $_smarty_tpl->tpl_vars['lbldomain']->value;?>
"/>

<!-- Modal -->
    <div class="modal fade" id="testmail" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Enviar mail de prueba</h4>
          </div>
       <div class="modal-body">
         <p>
                        <?php echo $_smarty_tpl->tpl_vars['testmail']->value['INPUT'];?>
   
                    <!--<input type="mail" name="testmail" placeholder="Email">-->
             <input class="button" name="test" class="btn btn-success" value="<?php echo $_smarty_tpl->tpl_vars['SEND_MAIL_TEST']->value;?>
" type="submit" />&nbsp;&nbsp;
        </p>
                <p>
                        Si el mail no es entregado lea las siguientes <a href="?menu=smtp&action=conf" target="_blank">instrucciones de configuración</a>
                </p>
        </div>
      </div>
    </div>
</div><?php }
}

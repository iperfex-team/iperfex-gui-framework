<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
         <td>
            <input class="button" name="save"  class="btn btn-info" value="{$CONFIGURATION_UPDATE}" type="submit" />&nbsp;&nbsp;
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#testmail">{$SEND_MAIL_TEST}</button>
                    <td align="right" nowrap><span class="letra12"><span  class="required">*</span> {$REQUIRED_FIELD}</span></td>
        </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%" >
    <tr class="letra12">
        <td align="left" width="9%"><b>{$status.LABEL}:</b></td>
        <td align="left" width="34%">{$status.INPUT}</td>
        <td rowspan='5' width="40%">{$MSG_REMOTE_SMTP}</td>
        <td rowspan="5" width="10%">&nbsp;</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$SMTP_Server.LABEL}:</b></td>
        <td align="left">{$SMTP_Server.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$relayhost.LABEL}: <span class="required">*</span></b></td>
        <td align="left">{$relayhost.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$port.LABEL}: <span class="required">*</span></b></td>
        <td align="left">{$port.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$user.LABEL}: <span class="required validpass">*</span></b></td>
        <td align="left">{$user.INPUT} &nbsp;&nbsp;&nbsp;&nbsp;({$Example}. <span id="example">example@domain.com</span>)</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$password.LABEL}: <span class="required validpass">*</span></b></td>
        <td align="left">{$password.INPUT}</td>
    </tr>
    <tr class="letra12">
        <td align="left"><b>{$autentification.LABEL}: </b></td>
        <td align="left">{$autentification.INPUT}{$MSG_REMOTE_AUT}</td>
    </tr>
</table>

<input type="hidden" name="lbldomain" id="lbldomain" value="{$lbldomain}"/>

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
                        {$testmail.INPUT}   
                    <!--<input type="mail" name="testmail" placeholder="Email">-->
             <input class="button" name="test" class="btn btn-success" value="{$SEND_MAIL_TEST}" type="submit" />&nbsp;&nbsp;
        </p>
                <p>
                        Si el mail no es entregado lea las siguientes <a href="?menu=smtp&action=conf" target="_blank">instrucciones de configuración</a>
                </p>
        </div>
      </div>
    </div>
</div>
<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:40:26
  from "/var/www/html/iperfex/web/apps/packages/new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae738eaee6445_20659216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ce2904e2b6962b83c3c1d5e14be54a1a5490db' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/packages/new.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae738eaee6445_20659216 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <table border='0' cellpadding='0' callspacing='0' width='100%' height='44'>
        <tr class="letra12">
            <td width='70%'><?php echo $_smarty_tpl->tpl_vars['nombre_paquete']->value['LABEL'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['nombre_paquete']->value['INPUT'];?>

                <input type='submit' class='button' id="submit_nombre" name='submit_nombre' value='<?php echo $_smarty_tpl->tpl_vars['Search']->value;?>
' />
            </td>
            <td rowspan='2' id='relojArena' style="text-align:center;">
            </td>
        </tr>
        <tr class="letra12">
            <td width='200'><?php echo $_smarty_tpl->tpl_vars['submitInstalado']->value['LABEL'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['submitInstalado']->value['INPUT'];?>
</td>
        </tr>
    </table>
    <input type='hidden' id='estaus_reloj' value='apagado' />

<?php echo '<script'; ?>
 type='text/javascript'>
    function mostrarReloj()
    {
       var estatus = $("#estaus_reloj").val();
       if(estatus=='apagado'){
            $("#estaus_reloj").val('prendido');
            $("#relojArena").html("<img src='modules/packages/images/loading.gif' align='absmiddle' /> <br /> <font style='font-size:12px; color:red'><?php echo $_smarty_tpl->tpl_vars['UpdatingRepositories']->value;?>
...</font>");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
            $("#neo-tabla-header-row-filter-1").click();
		var arrAction                = new Array();
		arrAction["action"]          = "updateRepositories";
		arrAction["menu"]	     = "packages";
		arrAction["rawmode"]         = "yes";
		request("index.php",arrAction,false,
		    function(arrData,statusResponse,error){
				alert(statusResponse);
				$("#relojArena").html("");
				$("#estaus_reloj").val('apagado');
				$("#submit_nombre").click();
		});
        }
        else alert("<?php echo $_smarty_tpl->tpl_vars['accionEnProceso']->value;?>
");
    }
    function installaPackage(paquete,val)
    {   
        var estatus = $("#estaus_reloj").val();
        if(estatus=='apagado'){
	      
            $("#estaus_reloj").val('prendido');
            $("#relojArena").html("");
	    if(val==0)
	      $("#relojArena").html("<img src='images/loading.gif' align='absmiddle' /> <br /> <font style='font-size:12px; color:red'><?php echo $_smarty_tpl->tpl_vars['InstallPackage']->value;?>
: "+ paquete +"...</font>");
            else
	      $("#relojArena").html("<img src='images/loading.gif' align='absmiddle' /> <br /> <font style='font-size:12px; color:red'><?php echo $_smarty_tpl->tpl_vars['UpdatePackage']->value;?>
: "+ paquete +"...</font>");
            
	    $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
            $("#neo-tabla-header-row-filter-1").click();
		var arrAction                    = new Array();
		arrAction["action"]      = "install";
		arrAction["menu"]        = "packages";
		arrAction["paquete"]	 = paquete;
		arrAction["val"]	 = val;
		arrAction["rawmode"]     = "yes";
		request("index.php",arrAction,false,
         	    function(arrData,statusResponse,error){
                                alert(statusResponse);
                                $("#relojArena").html("");
                                $("#estaus_reloj").val('apagado');
                                $("#submit_nombre").click();

		});
        }
        else alert("<?php echo $_smarty_tpl->tpl_vars['accionEnProceso']->value;?>
");
    }

    function uninstallPackage(paquete)
    {
        var estatus = $("#estaus_reloj").val();
        if(estatus=='apagado'){
            $("#estaus_reloj").val('prendido');
            $("#relojArena").html("<img src='images/loading.gif' align='absmiddle' /> <br /> <font style='font-size:12px; color:red'><?php echo $_smarty_tpl->tpl_vars['UninstallPackage']->value;?>
: "+ paquete +"...</font>");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
            $("#neo-tabla-header-row-filter-1").click();
                var arrAction                    = new Array();
                arrAction["action"]      = "uninstall";
                arrAction["menu"]        = "packages";
                arrAction["paquete"]     = paquete;
                arrAction["rawmode"]     = "yes";
                request("index.php",arrAction,false,
                    function(arrData,statusResponse,error){
                                alert(statusResponse);
                                $("#relojArena").html("");
                                $("#estaus_reloj").val('apagado');
                                $("#submit_nombre").click();

                });
        }
        else alert("<?php echo $_smarty_tpl->tpl_vars['accionEnProceso']->value;?>
");
    }


<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
function confirmDelete(paquete) {
  if (confirm("<?php echo $_smarty_tpl->tpl_vars['msgConfirmDelete']->value;?>
")) {
             uninstallPackage(paquete);
  }
}
function confirmUpdate(paquete) {
  if (confirm("<?php echo $_smarty_tpl->tpl_vars['msgConfirmUpdate']->value;?>
")) {
             installaPackage(paquete,1);
  }
}
<?php echo '</script'; ?>
>


<?php }
}

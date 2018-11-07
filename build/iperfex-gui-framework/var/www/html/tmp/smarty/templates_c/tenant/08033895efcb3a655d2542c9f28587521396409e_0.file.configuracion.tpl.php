<?php
/* Smarty version 3.1.30, created on 2018-05-07 19:15:11
  from "/var/www/html/iperfex/web/apps/smtp/configuracion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0ddff48fb16_12040944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08033895efcb3a655d2542c9f28587521396409e' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/smtp/configuracion.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0ddff48fb16_12040944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table style="font-size: 16px;" cellspacing="0" cellpadding="0" width="100%" >
    <tr class="letra12">
			 <td align="left" width="100%">
						<div id="gmailpaso">
								<h3><?php echo $_smarty_tpl->tpl_vars['with2step']->value;?>
</h3>
								<p><?php echo $_smarty_tpl->tpl_vars['info1']->value;?>
 <a href="https://security.google.com/settings/security/apppasswords">Create App Password</a></p>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img2']->value;?>
" width="70%"><br/>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img3']->value;?>
" width="70%" ><br/>
								<img src="<?php echo $_smarty_tpl->tpl_vars['img4']->value;?>
" width="40%"><br/>
				<img src="<?php echo $_smarty_tpl->tpl_vars['img5']->value;?>
" width="70%"><br/>
								<p><?php echo $_smarty_tpl->tpl_vars['info2']->value;?>
</p>
					</div>
						<div><a name="gmailsinpaso"></a>
								<h3><?php echo $_smarty_tpl->tpl_vars['without2step']->value;?>
</h3>
							 <p><?php echo $_smarty_tpl->tpl_vars['info3']->value;?>
</p>
							 <p><?php echo $_smarty_tpl->tpl_vars['info4']->value;?>
</p>
								<img src="<?php echo $_smarty_tpl->tpl_vars['smtp']->value;?>
" width="70%">
						</div>
			 </td>
	   </tr>
</table>
<?php }
}

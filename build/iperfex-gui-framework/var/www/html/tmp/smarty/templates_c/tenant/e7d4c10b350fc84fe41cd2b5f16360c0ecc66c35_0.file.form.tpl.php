<?php
/* Smarty version 3.1.30, created on 2018-05-07 17:15:49
  from "/var/www/html/iperfex/web/apps/organization/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0c205cf7da5_10728542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d4c10b350fc84fe41cd2b5f16360c0ecc66c35' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/organization/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0c205cf7da5_10728542 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
            <td >
                <?php if ($_smarty_tpl->tpl_vars['CREATE_ORG']->value) {?><input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;<?php }?>
                <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
            </td>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'view') {?>
        <td >
            <?php if ($_smarty_tpl->tpl_vars['EDIT_ORG']->value) {?><input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['DELETE_ORG']->value) {?><input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
" onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')"><?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
        <td >
            <?php if ($_smarty_tpl->tpl_vars['EDIT_ORG']->value) {?><input class="button" type="submit" name="save_edit" value="<?php echo $_smarty_tpl->tpl_vars['APLICAR_CAMBIOS']->value;?>
">&nbsp;&nbsp;<?php }?>
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
		<?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 14px" width="100%" cellpadding="4" align="center">
    <tr>
        <td width="14%" ><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td width="31%" ><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
        <td width="19%" ><?php echo $_smarty_tpl->tpl_vars['domain']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?> <span  class="required">*</span><?php }?></b></td>
        <?php if ($_smarty_tpl->tpl_vars['edit_entity']->value) {?>
            <td width="31%" ><?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
</td>
        <?php } else { ?>
            <td width="31%" ><?php echo $_smarty_tpl->tpl_vars['domain']->value['INPUT'];?>
</td>
        <?php }?>
    </tr>
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['country']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['country']->value['INPUT'];?>
</td>
        <td ><?php echo $_smarty_tpl->tpl_vars['city']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['city']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['address']->value['LABEL'];?>
: </td>
        <td  colspan="3" width="74%"><?php echo $_smarty_tpl->tpl_vars['address']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['country_code']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['country_code']->value['INPUT'];?>
 </td>
        <td ><?php echo $_smarty_tpl->tpl_vars['area_code']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['area_code']->value['INPUT'];?>
 </td>
    </tr>
    <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['email_contact']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['email_contact']->value['INPUT'];?>
 </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 14px" width="100%" cellpadding="4" align="center">
    <th ><?php echo $_smarty_tpl->tpl_vars['ORG_RESTRINCTION']->value;?>
</th>
    <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
        <tr>
            <td width="20%"><?php echo $_smarty_tpl->tpl_vars['max_num_user']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
            <td><?php echo $_smarty_tpl->tpl_vars['max_num_user']->value['INPUT'];?>
 <input type="checkbox" name="max_num_user_chk" class='org_chk_limits' <?php echo $_smarty_tpl->tpl_vars['CHECK_U']->value;?>
 onclick="org_chk_limit('max_num_user');"> <?php echo $_smarty_tpl->tpl_vars['UNLIMITED']->value;?>
</td>
        </tr>
        
            
            
        
        
            
            
        
    <?php } else { ?>
        <tr>
            <td width="20%"><?php echo $_smarty_tpl->tpl_vars['max_num_user']->value['LABEL'];?>
: </td>
            <td> <?php echo $_smarty_tpl->tpl_vars['CHECK_U']->value;?>
</td>
        </tr>
        
            
            
        
        
            
            
        
    <?php }?>
    
        
        
    
     <tr>
        <td ><?php echo $_smarty_tpl->tpl_vars['channels']->value['LABEL'];?>
: <b><?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></b></td>
        <td ><?php echo $_smarty_tpl->tpl_vars['channels']->value['INPUT'];?>
 </td>
    </tr>
</table>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
<input type="hidden" name="org_mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" /><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-05-13 15:16:31
  from "/var/www/html/iperfex/web/apps/managerisdxconfig/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af88f0f0540c1_15674123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f85e1d32288cf9b04bcb9e8ec4efbda00dfd592f' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/managerisdxconfig/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af88f0f0540c1_15674123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%">
    <tr>
        <td>
            <div class="clearfix">&nbsp;</div>
            <div class="row">
                <div class="col-md-5">
                    <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                    <a href="?menu=managerisdxconfig" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
            <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
                            <div class="form-group">
                                <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION']->value;?>
:</label>
                                <?php if ($_smarty_tpl->tpl_vars['entity']->value['organization'] !== 0) {?>
                                    <input type="text" style="height: 100%;" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['entity']->value['organization'];?>
"/>
                                <?php } else { ?>
                                    <input type="text" style="height: 100%;" class="form-control" disabled value="-"/>
                                <?php }?>
                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
:</label>
                            <input type="text" style="height: 100%;" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['entity']->value['config_title'];?>
"/>
                        </div>
                        <div class="form-group">
                            <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
:</label>
                            <input type="text" style="height: 100%;" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['entity']->value['config_key'];?>
"/>
                        </div>
                        <div class="form-group">
                            <label for=""><?php echo $_smarty_tpl->tpl_vars['config_value']->value['LABEL'];?>
</label>
                            <?php echo $_smarty_tpl->tpl_vars['config_value']->value['INPUT'];?>

                        </div>
                        <div class="form-group">
                            <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
:</label>
                            <textarea style="height: 100%;width:50%;" class="form-control" disabled><?php echo $_smarty_tpl->tpl_vars['entity']->value['config_description'];?>
</textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
:</label>
                            <input type="text" style="height: 100%;" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['entity']->value['config_group_title'];?>
"/>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-5">
                        <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                        <a href="?menu=managerisdxconfig" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
            <div class="clearfix">&nbsp;</div>
        </td>
    </tr>
</table>
<?php }
}

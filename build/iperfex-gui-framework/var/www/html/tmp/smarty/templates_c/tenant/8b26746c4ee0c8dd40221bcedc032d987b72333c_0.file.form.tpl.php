<?php
/* Smarty version 3.1.30, created on 2018-05-13 15:45:58
  from "/var/www/html/iperfex/web/apps/campaign_inbound/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af895f6e25fc2_27929975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b26746c4ee0c8dd40221bcedc032d987b72333c' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/campaign_inbound/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af895f6e25fc2_27929975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%">
    <tr>
        <td>
            <div class="clearfix">&nbsp;</div>
            <div class="row">
                <div class="col-md-5">
                    <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                    <a href="?menu=campaign_inbound" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
            <?php echo $_smarty_tpl->tpl_vars['id_questionnaire']->value['INPUT'];?>

            <?php echo $_smarty_tpl->tpl_vars['id_calltime']->value['INPUT'];?>

            <div class="clearfix">&nbsp;</div>
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>

                            </div>
                            <div class="form-group">
                                <label for=""><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>

                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
</label>
                                        <?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>

                                    </div>
                                </div>
                            <?php }?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Extension:</label>
                                    <input type="text" style="height: 100%;margin-top: 4px;" class="form-control" disabled value="<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for=""><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>

                            </div>
                        </div>
                    </div>
                    <?php }?>
                <div class="row2">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#required" aria-controls="required" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['REQUIRED']->value;?>
</a></li>
                        <li role="presentation"><a href="#optional" aria-controls="optional" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['OPTIONAL']->value;?>
</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="required">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['questionnaire']->value['LABEL'];?>
</label>
                                    <div class="row">
                                        <div <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>class="col-md-12"<?php } else { ?>class="col-md-10"<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['questionnaire']->value['INPUT'];?>

                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'input') {?>
                                            <div class="col-md-2">
                                                <a href="javascript:void(0)" style="margin-top:3px;margin-left:-20px;" class="btn btn-default btn-edit-questionnaire" data-id="<?php echo $_smarty_tpl->tpl_vars['id_q']->value;?>
" data-hasdata=<?php if ($_smarty_tpl->tpl_vars['edit_questionnaire']->value['INPUT']) {?>"1"<?php } else { ?>"0"<?php }?>><i class="fa fa-edit"></i></a>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['CHANNELS']->value;?>
</label><br/>
                                    <div class="col-md-2" style="padding-top: 4px;">
                                        <input class='touchspin_channels touchspin_channels_form input-sm' type='text' data-max='100' value='<?php echo $_smarty_tpl->tpl_vars['channels']->value;?>
' id='channels' size='4' name='channels'/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="optional">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['calltime']->value['LABEL'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['calltime']->value['INPUT'];?>

                                </div>
                            </div>
                            
                                
                                    
                                    
                                
                            
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-5">
                        <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                        <a href="?menu=campaign_inbound" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
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

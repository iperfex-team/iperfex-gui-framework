<?php
/* Smarty version 3.1.30, created on 2018-05-07 17:41:50
  from "/var/www/html/iperfex/web/apps/questionnaire/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0c81ecf2555_12321304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7f6da9187d855ffe3479c8618685ca66fc2a586' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/questionnaire/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0c81ecf2555_12321304 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%">
    <tr>
        <td>
            <div class="row">
                <div class="col-md-6">
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
                        <?php if ($_smarty_tpl->tpl_vars['CREATE_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_CHANGES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SAVE_CHANGES']->value;?>
</button>&nbsp;&nbsp;<?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
                            <?php if ($_smarty_tpl->tpl_vars['return_outbound']->value['INPUT']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit_redirect" value="?menu=campaign_outbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['outbound_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;<?php }?>
                                <a  href="?menu=campaign_outbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['outbound_id']->value;?>
" class="btn btn-warning" ><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['return_inbound']->value['INPUT']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit_redirect" value="?menu=campaign_inbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['inbound_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;<?php }?>
                                <a href="?menu=campaign_inbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['inbound_id']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;<?php }?>
                                <a href="?menu=questionnaire" class="btn btn-warning" id="return-button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                            <?php }?>
                    <?php }?>
<!--                    <button class="btn btn-warning" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</button>-->
                </div>
                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
                <div class="col-md-6 text-right">
                    <button type="button" class="btn btn-success btn-audio-manager-modal" data-toggle="modal" data-target="#audioModal"><i class="fa fa-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['AUDIO_MANAGER']->value;?>
</button>
                </div>
                <?php }?>
            </div>

            <div class="clearfix">&nbsp;</div>

            <?php if ($_smarty_tpl->tpl_vars['hasdata']->value['INPUT']) {?>
                <input type="hidden" id="hasdata" value="1"/>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="organization" class=""><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
</label>
                        <?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>

                    </div>
                </div>
            </div>
            <?php }?>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name" class=""><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
</label>
                        <?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>

                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
            <div class="clearfix">&nbsp;</div>
            <!-- Advanced Options -->
            <div class="row">
                <div class="col-md-12">
                    <div class="well" style="background-color: #FFFFFF!important;">
                        <fieldset>
                            <legend><?php echo $_smarty_tpl->tpl_vars['ADVANCED_OPTIONS']->value;?>
 <h6 class="pull-right"><a href="javascript:void(0)" class="collapseadvanceoptions"><?php echo $_smarty_tpl->tpl_vars['COLLAPSE']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['EXPAND']->value;?>
</a></h6></legend>

                            <div role="tabpanel" class="advanceoptions collapse <?php if ($_smarty_tpl->tpl_vars['display_advanced_options']->value) {?>in<?php }?>">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#tab-general" aria-controls="tab-general" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</a></li>
                                    <li><a href="#tab-transfer" aria-controls="tab-transfer" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['TRANSFER']->value;?>
</a></li>
                                    <li><a href="#tab-incoming" aria-controls="tab-incoming" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['INCOMING']->value;?>
</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="tab-general">
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['hangup_message']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>


                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['hangup_message']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['hangup_message_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="hangup_message" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="hangup_message" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['complete_message']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>


                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['complete_message']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['complete_message_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="complete_message" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="complete_message" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['error_audio']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>


                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['error_audio']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['error_audio_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="error_audio" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="error_audio" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <?php echo $_smarty_tpl->tpl_vars['ENABLE_BEEP_TEXT']->value;?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a><br/>
                                                    <input style="padding-top:15px;" value="on" <?php if ($_smarty_tpl->tpl_vars['enable_beep']->value == 'on') {?>checked<?php }?> data-toggle='toggle' data-size='small' data-on="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['INACTIVE']->value;?>
" data-style='ios' data-onstyle='info' data-offstyle='default' type='checkbox' class='toggle_estatus bootstrap-switch' name="enable_beep" />
                                                    
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['question1errors']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <?php echo $_smarty_tpl->tpl_vars['question1errors']->value['INPUT'];?>

                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['errors_amount']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <?php echo $_smarty_tpl->tpl_vars['errors_amount']->value['INPUT'];?>

                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['amount_replay']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <?php echo $_smarty_tpl->tpl_vars['amount_replay']->value['INPUT'];?>

                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['audio_duration']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <?php echo $_smarty_tpl->tpl_vars['audio_duration']->value['INPUT'];?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-transfer">

                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['transfer_audio']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>

                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['transfer_audio']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['transfer_audio_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="transfer_audio" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="transfer_audio" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="tab-incoming">
                                        <div class="row-fluid">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['channels_limit']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['channels_limit']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['channels_limit_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="channels_limit" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="channels_limit" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['incoming_campaign_off']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_campaign_off']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_campaign_off_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="incoming_campaign_off" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="incoming_campaign_off" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['incoming_quota_reached']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_quota_reached']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_quota_reached_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="incoming_quota_reached" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="incoming_quota_reached" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['incoming_campaign_outoftime']->value['LABEL'];?>
 <a href="javascript:void(0)" class=""><i class="fa fa-question"></i></a></label>
                                                    <div class="input-group">
                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_campaign_outoftime']->value['INPUT'];?>

                                                        <?php echo $_smarty_tpl->tpl_vars['incoming_campaign_outoftime_dir']->value['INPUT'];?>

                                                        <span class="input-group-btn">
                                                            <button class="btn btn-success btn-select-audio" data-input="incoming_campaign_outoftime" type="button"><i class="fa fa-plus"></i></button>
                                                            <button class="btn btn-danger btn-remove-audio" data-input="incoming_campaign_outoftime" type="button"><i class="fa fa-minus"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- End Advance Options -->

            <div class="clearfix">&nbsp;</div>
            <!-- Questionnaire -->
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend><?php echo $_smarty_tpl->tpl_vars['QUESTIONS']->value;?>
 <h6 class="pull-right"><a href="javascript:void(0)" class="collapseall"><?php echo $_smarty_tpl->tpl_vars['COLLAPSE_ALL']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['EXPAND_ALL']->value;?>
</a></h6></legend>

                        <div class="panel-group questions" id="accordion" role="tablist" aria-multiselectable="true">

                            <div role="alert" class="alert alert-info">
                                <strong><i class="fa fa-spin fa-spinner"></i></strong> <?php echo $_smarty_tpl->tpl_vars['LOADING_QUESTIONS']->value;?>

                            </div>

                        </div>

                    </fieldset>
                </div>
            </div>
            <!-- End Questionnaire -->
            <?php }?>

            <div class="row">
                <div class="col-md-6">
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
                    <?php if ($_smarty_tpl->tpl_vars['CREATE_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_CHANGES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SAVE_CHANGES']->value;?>
</button>&nbsp;&nbsp;<?php }?>
                    <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
                        <?php if ($_smarty_tpl->tpl_vars['return_outbound']->value['INPUT']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit_redirect" value="?menu=campaign_outbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['outbound_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;
                             <a  href="?menu=campaign_outbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['outbound_id']->value;?>
" class="btn btn-warning" ><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a><?php }?>
                        <?php } elseif ($_smarty_tpl->tpl_vars['return_inbound']->value['INPUT']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit_redirect" value="?menu=campaign_inbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['inbound_id']->value;?>
""><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;
                             <a href="?menu=campaign_inbound&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['inbound_id']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a><?php }?>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['EDIT_SUR']->value) {?><button class="btn btn-primary" type="submit" name="save_edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</button>&nbsp;&nbsp;
                            <a href="?menu=questionnaire" class="btn btn-warning" id="return-button"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a><?php }?>
                        <?php }?>
                    <?php }?>
                  <!--  <a href="?menu=questionnaire" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>-->
                </div>
            </div>

        </td>
    </tr>
</table>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
<input type="hidden" name="status" value="<?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
" />
<input type="hidden" name="sur_mode" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
" />


<!--Inicio modal Audio Manager -->

<div id="audioModal" class="modal fade">
<div class="modal-dialog" role="document" style="width:80%;margin-top:40px">
   
    <div class="modal-content" style="padding:0px 50px;min-height:400px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['UPLOAD']->value;?>
</a></li>
            <li role="presentation"><a href="#record" aria-controls="record" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</a></li>
            <li role="presentation"><a href="#tts" aria-controls="tts" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['TTS']->value;?>
</a></li>
            <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['MANAGER']->value;?>
</a></li>
        </ul>


        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="home">

                <form class="form-inline text-center">
                    <div class="form-group">
                        <label for="filename"><?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
</label>
                        <input type="text" class="form-control input-sm" id="filename" name="filename">
                    </div>
                    <div class="form-group">
                        <label for="dir"><?php echo $_smarty_tpl->tpl_vars['SEARCH_IN']->value;?>
</label>
                        <select class="form-control input-sm" name="dir" id="dir">
                            <option value="0"><?php echo $_smarty_tpl->tpl_vars['ALL']->value;?>
</option>
                            <option value="1" selected><?php echo $_smarty_tpl->tpl_vars['ONLY_THIS_SURVEY']->value;?>
</option>
                            <option value="2"><?php echo $_smarty_tpl->tpl_vars['REPOSITORY']->value;?>
</option>
                        </select>
                    </div>
                </form>

                <div class="clearfix">&nbsp;</div>

                <div id="audios" style="max-height: 300px; overflow-y: auto;"></div>

            </div>
            <div role="tabpanel" class="tab-pane active" id="upload">

                <div class="form-inline text-center">
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="upload_audio_to_survey" value="1" checked><?php echo $_smarty_tpl->tpl_vars['UPLOAD_THIS_SURVEY']->value;?>

                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="upload_audio_to_survey" value="0"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_REPOSITORY']->value;?>

                        </label>
                    </div>
                </div>
                <br/>
                <div id="dropzone"><div class="dz-message" data-dz-message><span><p><i class="fa fa-cloud-upload fa-5x"></i></p><p><?php echo $_smarty_tpl->tpl_vars['CLICK_HERE_SELECT_AUDIOS']->value;?>
</p></span></div></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="record">
                <!-- AUDIO RECORDER -->
                <section id="recorder">
                    <div class="row">
                        <div class="col-md-12 form-horizontal">

                            <div class="form-group">
                                <label for="new_filename" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="new_filename" placeholder="<?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-inline text-center">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" name="upload_record_to_survey" value="1" checked><?php echo $_smarty_tpl->tpl_vars['UPLOAD_THIS_SURVEY']->value;?>

                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="upload_record_to_survey" value="0"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_REPOSITORY']->value;?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>&nbsp;</div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                <div class="alert alert-danger alert-dismissable" id="is_microphone_enabled">
                                  <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <strong>Check the microphone permissions</strong> 
                                </div>
                               
                                <button class="btn btn-lg btn-danger" id="start-recording" onclick="startRecording(this);"><span class="text-main"><i class="fa fa-microphone"></i> <?php echo $_smarty_tpl->tpl_vars['RECORD_TXT']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['RECORDING']->value;?>
...</span></button>
                                <button class="btn btn-lg btn-default" id="stop-recording" onclick="stopRecording(this);" disabled><i class="fa fa-stop"></i> <?php echo $_smarty_tpl->tpl_vars['STOP']->value;?>
</button>
                                <button class="btn btn-lg btn-success" id="save-recording" disabled><span class="text-main"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['SAVING']->value;?>
...</span></button>
                                <button type="button" class="btn btn-lg btn-info" id="edit-recording" onclick="" disabled><i class="fa fa-edit"></i> <?php echo $_smarty_tpl->tpl_vars['EDIT_TXT']->value;?>
</button>
                                <button type="button" class="btn btn-lg btn-primary" id="select-recording" onclick="" style="display: none;" disabled><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SELECT']->value;?>
</button>
                            </p>
                            <p id="recordingslist" class="text-center"></p>
                            <pre id="log"></pre>
                            <input type="hidden" id="recorded_filename" value="" />
                        </div>
                    </div>
                </section>
                <!-- end section recorder -->
                <!-- section editor -->
                <section id="editor" style="display:none;">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div class="btn-group">
                                <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].copy();"><i class="fa fa-share fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['COPY']->value;?>
</a>
                                <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].paste();"><i class="fa fa-chevron-down fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['PASTE']->value;?>
</a>
                                <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].cut();"><i class="fa fa-chevron-up fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['CUT']->value;?>
</a>
                                <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].crop();"><i class="fa fa-retweet fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['CROP']->value;?>
</a>
                                <a class="btn btn-primary" onclick="$('#audioLayerControl')[0].del();"><i class="fa fa-remove fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-success" onclick="$('#audioLayerControl')[0].selectAll();"><i class="fa fa-arrows-h fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['SELECT_ALL']->value;?>
</a>
                                <a class="btn btn-success" onclick="$('#audioLayerControl')[0].zoomIntoSelection();"><i class="fa fa-plus-circle fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['ZOOM_TO_SELECTION']->value;?>
</a>
                                <a class="btn btn-success" onclick="$('#audioLayerControl')[0].zoomToFit();"><i class="fa fa-arrows-alt fa-white"></i> <?php echo $_smarty_tpl->tpl_vars['ZOOM_TO_FIT']->value;?>
</a>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <h6><?php echo $_smarty_tpl->tpl_vars['SPECTRUM']->value;?>
</h6>
                            <div class="well">
                                <div id="spectrum"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h6><?php echo $_smarty_tpl->tpl_vars['EDITOR']->value;?>
</h6>
                            <div class="well">
                                <audioLayerControl id="audioLayerControl" title="" />
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div class="btn-group">
                                <a id="btn_play" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].play()" rel="tooltip" title="first tooltip"><i class="fa fa-play fa fa-white"></i></a>
                                <a id="btn_pause" class="btn btn-success btn-large disabled"><i class="fa fa-pause fa fa-white"></i></a>
                                <a id="btn_stop" class="btn btn-success btn-large" onclick="$('#audioLayerControl')[0].stop()"><i class="fa fa-stop fa fa-white"></i></a>
                                <a id="btn_loop" class="btn btn-warning btn-large" data-toggle="button" onclick="$('#audioLayerControl')[0].toggleLoop();"><i class="fa fa-repeat fa fa-white"></i></a>
                            </div>
                            <div class="btn-group">
                                <a class="btn btn-large btn-success" id="saveeditedaudio"><span class="text-main"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['SAVE_TXT']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['SAVING_TXT']->value;?>
...</span></a>
                                <a class="btn btn-large btn-danger" id="displayrecorder"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['RECORDER']->value;?>
</a>
                                <a class="btn btn-large btn-primary" style="display: none;" id="saveselecteditedaudio"><span class="text-main"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['SAVE_AND_SELECT']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['SAVING_TXT']->value;?>
...</span></a>
                            </div>

                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <div class="progress">
                                <div id="app-progress" class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div class="btn-group" >
                                <button class="btn btn-success btn-sm" onclick="decrease_db()" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['CHANGE_VOLUME']->value;?>
"><i class="fa fa-minus"></i></button>
                                <button id="gain-db" class="btn disabled btn-sm" onclick="gain_btn_clicked()">0 db</button>
                                <button class="btn btn-success btn-sm" onclick="increase_db()" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['CHANGE_VOLUME']->value;?>
"><i class="fa fa-plus"></i></button>
                            </div>
                            
                            <?php echo '<script'; ?>
 type="text/javascript">
                                var db_gain = 0;

                                function decrease_db()
                                {
                                    --db_gain;
                                    update_db_gain_btn();
                                }

                                function increase_db()
                                {
                                    ++db_gain;
                                    update_db_gain_btn();
                                }

                                function update_db_gain_btn()
                                {
                                    var gain_btn = $('#gain-db')[0];
                                    gain_btn.innerHTML = db_gain + ' db';
                                    if (db_gain === 0)
                                    {
                                        gain_btn.className = 'btn disabled btn-sm';
                                    }
                                    else
                                    {
                                        gain_btn.className = 'btn btn-primary btn-sm';
                                    }
                                }

                                function gain_btn_clicked()
                                {
                                    $('#audioLayerControl')[0].filterGain(db_gain);
                                    db_gain = 0;
                                    update_db_gain_btn();
                                }
                            <?php echo '</script'; ?>
>
                            
                            <div class="btn-group" >
                                <a class="btn btn-primary btn-sm" onclick="$('#audioLayerControl')[0].filterNormalize();" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['ADJUST_VOLUME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NORMALIZE']->value;?>
</a>
                                <a class="btn btn-primary btn-sm" onclick="$('#audioLayerControl')[0].filterSilence();" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['SILENCE_AUDIO']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['SILENCE']->value;?>
</a>
                                <a class="btn btn-primary btn-sm" onclick="$('#audioLayerControl')[0].filterFadeIn();" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['CREATE_LINEAR_IN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FADE_IN']->value;?>
</a>
                                <a class="btn btn-primary btn-sm" onclick="$('#audioLayerControl')[0].filterFadeOut();" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['CREATE_LINEAR_IN']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FADE_OUT']->value;?>
</a>
                            </div>
                        </div>


                    </div>

                </section>
                <!-- end section editor-->
                <!-- END AUDIO RECORDER -->
            </div>
            <div role="tabpanel" class="tab-pane" id="tts">
                <div id="tts_auth">
                <div class="panel panel-default">
                    <h3 style="margin-left:10px"><?php echo $_smarty_tpl->tpl_vars['TTS_AUTH_HEAD']->value;?>
</h3>
                    <div class="panel-body">
                     <div class="alert alert-danger" id="tts_auth_error">
                          <strong><?php echo $_smarty_tpl->tpl_vars['AUTH_ERROR']->value;?>
!</strong> <?php echo $_smarty_tpl->tpl_vars['AUTH_ERROR_MSG']->value;?>

                        </div>
                        <div class="form-group" id="auth_tts">
                            <label for="auth_user" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['TTS_USER']->value;?>
</label>
                                <input type="text" class="form-control" id="tts_user" name="tts_user">
                        </div>
                        <div class="form-group" id="auth_tts">
                            <label for="auth_pass" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['TTS_PASS']->value;?>
</label>
                            <input type="text" class="form-control" id="tts_pass" name="tts_pass">
                                
                        </div>
                        <button type="button" class="btn btn-info" onclick="authenticateTTS()"><?php echo $_smarty_tpl->tpl_vars['AUTHENTICATE']->value;?>
</button>
                       
                    </div>
                   
                </div>
                </div>
                <div id="tts_form">
                <div class="row">
                    <div class="col-md-12 form-horizontal">
                        <div class="form-group">
                            <label for="new_filename" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tts_filename" placeholder="<?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-inline text-center">
                                <div class="form-group">
                                    <label class="radio-inline">
                                        <input type="radio" name="upload_tts_to_survey" value="1" checked><?php echo $_smarty_tpl->tpl_vars['UPLOAD_THIS_SURVEY']->value;?>

                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="upload_tts_to_survey" value="0"><?php echo $_smarty_tpl->tpl_vars['UPLOAD_REPOSITORY']->value;?>

                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="row">
                    <div class="col-md-4">
                       <div class="form-group">
                       <?php echo $_smarty_tpl->tpl_vars['CEPSTRALTTS']->value;?>

                           <select class="form-control" name="tts_type" onchange="checkTTS(this)" >
                               <?php if ($_smarty_tpl->tpl_vars['IPERFEXTTS']->value == true) {?>
                                    <option value="TTS iPERFEX">TTS Iperfex</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['CEPSTRALTTS']->value == true) {?>
                                    <option value="TTS Cepstral">TTS Cepstral</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['FESTIVALTTS']->value == true) {?>
                                    <option value="TTS Festival">TTS Festival</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['GOOGLETTS']->value == true) {?>
                                    <option value="TTS Google">TTS Google</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['SERVER']->value == true) {?>
                                    <option value="TTS iPERFEX">TTS iPERFEX</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['VERBIOTTS']->value == true) {?>
                                    <option value="TTS Verbio">TTS Verbio</option>
                                <?php }?>
                            </select>
                        </div>
                          <div class="form-group" id="voice-group">
                           <fieldset>
                               <legend><?php echo $_smarty_tpl->tpl_vars['VOICE_LABEL']->value;?>
</legend>
                               <select id="voice" name="voice" class="js-example-data-array form-control"> <option value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_IPERFEX']->value['voice'];?>
"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_IPERFEX']->value['voice'];?>
</option> </select>
                            </fieldset>
                        </div>
                        <div class="form-group" id="rate-group">
                           <fieldset>
                               <legend><?php echo $_smarty_tpl->tpl_vars['RATE_LABEL']->value;?>
</legend>
                               <label>
                                   <p><b><?php echo $_smarty_tpl->tpl_vars['RATE_NOTE']->value;?>
</b></p>
                                   <b><?php echo $_smarty_tpl->tpl_vars['RATE_LABEL']->value;?>
: <span id="rate_val"><?php echo $_smarty_tpl->tpl_vars['CUSTOM_IPERFEX']->value['rate'];?>
</span></b>
                               </label>
                               <input type="range" id="rate" name="rate" min="100" max="250" step="10" value="170" class="form-control" onchange="showRate()">
                           </fieldset>
                       </div>
                       
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                             <div id="ttslist"></div>
                             <div class="alert alert-info">
                              <strong><?php echo $_smarty_tpl->tpl_vars['NOTE']->value;?>
</strong> <?php echo $_smarty_tpl->tpl_vars['TTS_INFO']->value;?>

                            </div>
                            <textarea class="form-control" id="tts_text" onfocusout="checkttstext(this)" onkeydown="checkttstext(this)" onpaste="checkttstext(this)"  name="tts_text" rows="10" cols="100"></textarea>
                           
                            <p id="characters"><?php echo $_smarty_tpl->tpl_vars['TEXT_CHARACTERS']->value;?>
</p>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-md-12 text-center">
                           
                          <button type="button" class="btn btn-lg btn-success" id="generate-tts"><span class="text-main"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['GENERATE']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['GENERATIN']->value;?>
...</span></button>
                        <button  type="button" class="btn btn-lg btn-success" id="save-tts" disabled><span class="text-main"><i class="fa fa-save"></i> <?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</span><span class="text-loading" style="display:none;"><i class="fa fa-spin fa-spinner"></i> <?php echo $_smarty_tpl->tpl_vars['SAVING']->value;?>
...</span></button>
                    </div>
                </div>
                 </div>
                <input type="hidden" id="tts_filename" value="" />
                <input type="hidden" id="id_target" value="">
                <input type="hidden" id="fromCampaign" value="<?php echo $_smarty_tpl->tpl_vars['FROM_CAMPAIGN']->value;?>
" />
            </div>
        </div>
    </div>
    </div>

</div>
<?php echo '<script'; ?>
>

 

  $('#voice').select2({
    allowClear: false,
    width: '99%',
    ajax: {
      url: 'index.php?menu=questionnaire&action=voices',
      dataType: 'json',
      delay: 250,
       data: function (params) {
           var query = {
      search: params.term,
      type: 'public'
    }

    return query;
  },
     processResults: function (data, page) {
      console.log(data);
      return data;
  },
     cache: true
    }
  });
  document.getElementById('voice').classList.add('select2-hidden-accessible');

function showRate() {
       d = document.getElementById("rate").value;
       document.getElementById("rate_val").innerHTML = d;
}

   
<?php echo '</script'; ?>
>



<!--Find modal Audio Manager -->
<?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-05-07 15:08:16
  from "/var/www/html/iperfex/web/apps/reports_inbound/stats_completed.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0a4205c2550_86919534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e6a2c142675efd934505734807578d35be7099' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/reports_inbound/stats_completed.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0a4205c2550_86919534 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/function.html_options.php';
?>
<div class="row">
    <div class="col-md-12">
        <div>
            <?php $_smarty_tpl->_subTemplateRender("file:".((string)$_smarty_tpl->tpl_vars['local_tablist_dir']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


            <!-- Tab panes -->
            <div class="tab-content tab-content-stats-completed">
                <div role="tabpanel" class="tab-pane active">

                    <div class="container-fluid">
                        <div class="row">
                            <div id="filter-panel" class="filter-panel">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-filter">
                                            <input type="hidden" name="menu" value="reports_inbound"/>

                                            <div class="row">
                                                <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
                                                <div class="col-md-6">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['organization_txt']->value;?>
</label>
                                                    <select class="form-control chosen-select" name="organization">
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['organizations']->value,'selected'=>$_smarty_tpl->tpl_vars['organization']->value),$_smarty_tpl);?>

                                                    </select>
                                                </div>
                                                <?php }?>
                                                
                                                    
                                                    
                                                        
                                                    
                                                
                                                <div class="col-md-6">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['campaign_txt']->value;?>
</label>
                                                   <select class="form-control chosen-select campaign" name="campaign[]" data-selected="<?php echo $_smarty_tpl->tpl_vars['campaign']->value;?>
" multiple  data-placeholder="<?php echo $_smarty_tpl->tpl_vars['selectcampaigns']->value;?>
">
						</select>
         
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['date_txt']->value;?>
</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group" >
                                                               <span class="input-group-addon" id="basic-addon3"><?php echo $_smarty_tpl->tpl_vars['from_txt']->value;?>
</span>
                                                               <input type="date" style="border-radius: 0px;border-color: lightgray;height:30px;"  id="from" name="from" placeholder="Ej: 2015-12-25">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                             <div class="input-group">
                                                               <span class="input-group-addon" id="basic-addon3"><?php echo $_smarty_tpl->tpl_vars['to_txt']->value;?>
</span>
                                                               <input type="date" style="border-radius: 0px;border-color: lightgray;height:30px;" id="to" name="to" placeholder="Ej: 2015-12-25">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-md-offset-6">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['queue_txt']->value;?>
</label>
                                                    <select class="form-control chosen-select queue" id="queue" name="queue" data-selected="<?php echo $_smarty_tpl->tpl_vars['queue']->value;?>
"  data-placeholder="<?php echo $_smarty_tpl->tpl_vars['selectqueues']->value;?>
">
							
						</select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                                <div class="col-md-6">
                                                    <div class="col-md-8" style="margin-left: -14px;">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['status_txt']->value;?>
</label>
                                                        <select class="form-control chosen-select" name="status">
                                                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['campaignStatus']->value,'selected'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>

                                                        </select>
                                                    </div>
                                                    <div class="col-md-4" id="div-questions" style="display: none;">
                                                        <label><?php echo $_smarty_tpl->tpl_vars['questions_txt']->value;?>
</label>
                                                        <input style='height: 34px;' class='touchspin_questions input-sm' type='text' value='2' name='touchspin_questions' size = '4' data-max=''/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label><?php echo $_smarty_tpl->tpl_vars['agent_txt']->value;?>
</label>
                                                    <select class="form-control chosen-select agent" name="agent[]" id="agent" disabled="disabled"  multiple data-placeholder="<?php echo $_smarty_tpl->tpl_vars['selectagents']->value;?>
">
                                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['agents']->value,'selected'=>$_smarty_tpl->tpl_vars['agent']->value),$_smarty_tpl);?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px;">
                                           <div class="col-md-6">
                                                    <button type="submit" id="btn-filter-stats-completed" class="btn btn-primary btn-filter" data-error-msg="<?php echo $_smarty_tpl->tpl_vars['ERROR_MSG_TXT']->value;?>
" data-filter="<?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
" data-loading="<?php echo $_smarty_tpl->tpl_vars['loading']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
</button>
                                                    <button type="submit" class="btn btn-success" name="action" value="stats_completed_export"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['export_excel']->value;?>
</button>
                                                    <a id="save-btn" class="btn btn-success" onclick="exportImage('stats-completed')"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['export_image']->value;?>
  <img id="loader" src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/ajax-loader.gif" style="display: none;"></a>
                                                    <?php if ($_smarty_tpl->tpl_vars['campaign']->value) {?>
                                                        <a <?php if ($_smarty_tpl->tpl_vars['campaignType']->value == 'o') {?>href="?menu=campaign_outbound"<?php } else { ?>href="?menu=campaign_inbound"<?php }?> class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['backtocampaign']->value;?>
</a>
                                                    <?php }?>
                                                </div>
                                            </div>
                                               <br/><br/><br/><br/><br/><br/>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid container-stats-completed"></div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}

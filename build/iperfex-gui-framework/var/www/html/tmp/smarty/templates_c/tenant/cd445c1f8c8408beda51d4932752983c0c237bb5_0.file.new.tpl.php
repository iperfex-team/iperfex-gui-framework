<?php
/* Smarty version 3.1.30, created on 2018-05-13 15:46:44
  from "/var/www/html/iperfex/web/apps/trunks/new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af89624a85096_10769817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd445c1f8c8408beda51d4932752983c0c237bb5' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/trunks/new.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af89624a85096_10769817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div align="right" style="padding-right: 4px;">
    <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?>
        <span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span>
    <?php }?>
</div>
<div class="neo-table-header-row">
    <div  class="neo-table-header-row-filter tab">
        <input type="radio" id="tab-general" name="tab-group-general" onclick="radio('tab-general');" checked>
        <label for="tab-general"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</label>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['TECH']->value == 'SIP' || $_smarty_tpl->tpl_vars['TECH']->value == 'IAX2') {?>
        <div  class="neo-table-header-row-filter tab">
            <input type="radio" id="tab-peer" name="tab-group-peer" onclick="radio('tab-peer');" checked>
            <label for="tab-peer"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value;?>
</label>
        </div>

        <div  class="neo-table-header-row-filter tab">
            <input type="radio" id="tab-user" name="tab-group-user" onclick="radio('tab-user');">
            <label for="tab-user">User Settings</label>
        </div>
        <div  class="neo-table-header-row-filter tab">
            <input type="radio" id="tab-register" name="tab-group-register" onclick="radio('tab-register');">
            <label for="tab-register">Registration</label>
        </div>
    <?php }?>
    <div class="neo-table-header-row-navigation" align="right" style="display: inline-block;">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>
            <input type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value == 'edit') {?>
            <input type="submit" name="save_edit" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
">
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['EDIT']->value) {?><input type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['DELETE']->value) {?><input type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')"><?php }?>
        <?php }?>
        <input type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
    </div>
</div>
<div class="tabs">
    <div class="tab" >
       <div class="content" id="content_tab-general">
          <div id="div_body_tab">
            <table width="100%" border="0" cellspacing="0" cellpadding="5px" class="tabForm">
                <tr class="tech">
                    <td width="20%" nowrap><?php echo $_smarty_tpl->tpl_vars['general_trunk_name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span class="required">*</span><?php }?></td>
                    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['general_trunk_name']->value['INPUT'];?>
</td>
                </tr>
                <tr class="tech">
                    <td width="40%" nowrap><?php echo $_smarty_tpl->tpl_vars['general_outcid']->value['LABEL'];?>
:</td>
                    <td width="60%"><?php echo $_smarty_tpl->tpl_vars['general_outcid']->value['INPUT'];?>
</td>
                    
                </tr>
                <tr class="tech">
                    <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'edit') {?>
                        <td width="20%" nowrap><strong><?php echo $_smarty_tpl->tpl_vars['general_architecture']->value['LABEL'];?>
</strong></td>
                        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['general_architecture']->value['INPUT'];?>
</td>
                    <?php } else { ?>
                        <td width="20%" nowrap><strong><?php echo $_smarty_tpl->tpl_vars['general_architecture']->value['LABEL'];?>
</strong></td>
                        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['general_architecture']->value['INPUT'];?>
</td>
                    <?php }?>
                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_disabled']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['general_disabled']->value['INPUT'];?>
</td>
                </tr>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['SEC_SETTINGS']->value;?>
</th></tr>
                <!--<tr class="tech">
                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_maxchans']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['general_maxchans']->value['INPUT'];?>
</td>
                </tr>-->
                <tr class="tech">
                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_sec_call_time']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['general_sec_call_time']->value['INPUT'];?>
</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view' || $_smarty_tpl->tpl_vars['SEC_TIME']->value == 'yes') {?>
                <tr class="tech general_sec_call_time">
                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_maxcalls_time']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['general_maxcalls_time']->value['INPUT'];?>
</td>
                    <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_period_time']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['general_period_time']->value['INPUT'];?>
</td>
                </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['TECH']->value == 'DAHDI' || $_smarty_tpl->tpl_vars['TECH']->value == 'CUSTOM') {?>
                    <tr><th><?php echo $_smarty_tpl->tpl_vars['NAME_CHANNEL']->value;?>
</th></tr>
                    <tr class="tech">
                        <td nowrap><?php echo $_smarty_tpl->tpl_vars['general_channelid']->value['LABEL'];?>
:</td>
                        <td ><?php echo $_smarty_tpl->tpl_vars['general_channelid']->value['INPUT'];?>
</td>
                    </tr>
                <?php }?>
                <tr><th><?php echo $_smarty_tpl->tpl_vars['ORGANIZATION_PERM']->value;?>
</th></tr>
                <?php if ($_smarty_tpl->tpl_vars['mode']->value == 'view') {?>
                    <tr class="tech">
                        <td width="15%" nowrap><?php echo $_smarty_tpl->tpl_vars['general_org']->value['LABEL'];?>
: </td>
                        <td width="20%"> <?php echo $_smarty_tpl->tpl_vars['ORGS']->value;?>
 </td>
                        <td ></td>
                    </tr>
                <?php } else { ?>
                    <tr class="tech">
                        <td width="15%" valign="top" nowrap><?php echo $_smarty_tpl->tpl_vars['general_org']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'view') {?><span  class="required">*</span><?php }?></td>
                        <td width="10%" valign="top"><?php echo $_smarty_tpl->tpl_vars['general_org']->value['INPUT'];?>
</td>
                        <td rowspan="2">
                            <input class="button" name="remove" id="remove" value="<<" onclick="javascript:quitar_org();" type="button">
                            <select name="arr_org" size="4" id="arr_org" style="width: 120px;">
                            </select>
                            <input type="hidden" id="select_orgs" name="select_orgs" value=<?php echo $_smarty_tpl->tpl_vars['ORGS']->value;?>
>
                        </td>
                    </tr>
                <?php }?>
            </table>
            <p style="margin-top: 0px; padding-left: 4px; color: #E35332; font-weight: bold;" colspan=4><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</p>
            <p style="margin-top: 0px; padding-left: 12px;"><?php echo $_smarty_tpl->tpl_vars['general_dialout_prefix']->value['LABEL'];?>
: <?php echo $_smarty_tpl->tpl_vars['general_dialout_prefix']->value['INPUT'];?>
 </p>
            
        </div>
       </div>       
   </div>
   
   
            
    <?php if ($_smarty_tpl->tpl_vars['TECH']->value == 'SIP' || $_smarty_tpl->tpl_vars['TECH']->value == 'IAX2') {?>    
    <div class="tab">
      <div class="content" id="content_tab-peer">
          <div id="div_body_tab" class="col-md-8">
              <table style="width: 100%;table-layout: fixed;" border="0" cellspacing="0" cellpadding="5px" class="tabForm" id="table-peer">
              <?php $_smarty_tpl->_assignInScope('val', 1);
?>
               
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglos_peer']->value, 'campo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['campo']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['campo']->value['IS_ADVANCED_SETTING'] == "no") {?>
                 <?php if ((1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  <tr class='tech'>
                 <?php }?>
                      <td width='18%' nowrap><?php echo $_smarty_tpl->tpl_vars['campo']->value['LABEL'];
if ($_smarty_tpl->tpl_vars['campo']->value['REQUIRED'] == "yes") {?><span  class='required'>*</span><?php }?></td>
                      <td> <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['key']->value)]->value['INPUT'];?>
</td>
                 <?php if (!(1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  </tr>
                 <?php }?>
                 <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                 <?php }?>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              
                
                  <tr>
                      <td style="padding-left: 2px; font-size: 13px" colspan=4><a href="javascript:void(0);" class="adv_opt_peer"><b><?php echo $_smarty_tpl->tpl_vars['ADV_OPTIONS']->value;?>
</b></a></td>
                  </tr>
                  <?php $_smarty_tpl->_assignInScope('val', 1);
?>
               
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglos_peer']->value, 'campo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['campo']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['campo']->value['IS_ADVANCED_SETTING'] == "yes") {?>
                 <?php if ((1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  <tr class='tech'>
                 <?php }?>
                      <td width='18%' nowrap><?php echo $_smarty_tpl->tpl_vars['campo']->value['LABEL'];
if ($_smarty_tpl->tpl_vars['campo']->value['REQUIRED'] == "yes") {?><span  class='required'>*</span><?php }?></td>
                      <td> <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['key']->value)]->value['INPUT'];?>
</td>
                 <?php if (!(1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  </tr>
                 <?php }?>
                 <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                 <?php }?>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </table>
          </div>
          <div class="col-md-1">
              <div class="btn-group-vertical" style="margin-top: 297px;">
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-reload-values-from-textarea-peer"><i class="fa fa-angle-double-left"></i></a>
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-reload-values-from-inputs-peer"><i class="fa fa-angle-double-right"></i></a>
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-clean-textarea-peer"><i class="fa fa-refresh"></i></a>
              </div>
          </div>
          <div class="col-md-3">
              <textarea name='input_values_peer' cols='25' rows='41'></textarea>
          </div>
      </div>       
    </div>
          
    <div class="tab">
      <div class="content" id="content_tab-user">
        <div id="div_body_tab" class="col-md-8">
          <table width="100%" border="0" cellspacing="0" cellpadding="5px" class="tabForm" id="table-user">
                <?php $_smarty_tpl->_assignInScope('val', 1);
?>
               
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglos_user']->value, 'campo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['campo']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['campo']->value['IS_ADVANCED_SETTING'] == "no") {?>
                 <?php if ((1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  <tr class='tech'>
                 <?php }?>
                      <td width='18%' nowrap><?php echo $_smarty_tpl->tpl_vars['campo']->value['LABEL'];
if ($_smarty_tpl->tpl_vars['campo']->value['REQUIRED'] == "yes") {?><span  class='required'>*</span><?php }?></td>
                      <td> <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['key']->value)]->value['INPUT'];?>
</td>
                 <?php if (!(1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  </tr>
                 <?php }?>
                 <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                 <?php }?>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td style="padding-left: 2px; font-size: 13px" colspan=4><a href="javascript:void(0);" class="adv_opt_user"><b><?php echo $_smarty_tpl->tpl_vars['ADV_OPTIONS']->value;?>
</b></a></td>
            </tr>
                 <?php $_smarty_tpl->_assignInScope('val', 1);
?>
               
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglos_user']->value, 'campo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['campo']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['campo']->value['IS_ADVANCED_SETTING'] == "yes") {?>
                 <?php if ((1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  <tr class='tech'>
                 <?php }?>
                      <td width='18%' nowrap><?php echo $_smarty_tpl->tpl_vars['campo']->value['LABEL'];
if ($_smarty_tpl->tpl_vars['campo']->value['REQUIRED'] == "yes") {?><span  class='required'>*</span><?php }?></td>
                      <td> <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['key']->value)]->value['INPUT'];?>
</td>
                 <?php if (!(1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  </tr>
                 <?php }?>
                 <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                 <?php }?>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>
        </div>
          <div class="col-md-1">
              <div class="btn-group-vertical" style="margin-top: 297px;">
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-reload-values-from-textarea-user"><i class="fa fa-angle-double-left"></i></a>
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-reload-values-from-inputs-user"><i class="fa fa-angle-double-right"></i></a>
                  <a href="javascript:void(0)" class="btn btn-success btn-lg btn-clean-textarea-user"><i class="fa fa-refresh"></i></a>
              </div>
          </div>
          <div class="col-md-3">
              <textarea name='input_values_user' cols='25' rows='41'></textarea>
          </div>
      </div>       
    </div>
     
    <div class="tab">
      <div class="content" id="content_tab-register">
        <div id="div_body_tab">
          <table width="100%" border="0" cellspacing="0" cellpadding="5px" class="tabForm">            
              <?php $_smarty_tpl->_assignInScope('val', 1);
?>
               
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arreglos_regi']->value, 'campo', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['campo']->value) {
?>
                 <?php if ($_smarty_tpl->tpl_vars['campo']->value['IS_ADVANCED_SETTING'] == "yes") {?>
                 <?php if ((1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  <tr class='tech'>
                 <?php }?>
                      <td width='18%' nowrap><?php echo $_smarty_tpl->tpl_vars['campo']->value['LABEL'];
if ($_smarty_tpl->tpl_vars['campo']->value['REQUIRED'] == "yes") {?><span  class='required'>*</span><?php }?></td>
                      <td> <?php echo $_smarty_tpl->tpl_vars[''.($_smarty_tpl->tpl_vars['key']->value)]->value['INPUT'];?>
</td>
                 <?php if (!(1 & $_smarty_tpl->tpl_vars['val']->value)) {?>
                  </tr>
                 <?php }?>
                 <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['val']->value+1);
?>
                 <?php }?>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </table>
        </div>
      </div>       
    </div>       
   <?php }?>
</div>
<div style="display:none" id="terminate">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrTerminate']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
<input type="hidden" name="mode_input" id="mode_input" value="<?php echo $_smarty_tpl->tpl_vars['mode']->value;?>
">
<input type="hidden" name="id_trunk" id="id_trunk" value="<?php echo $_smarty_tpl->tpl_vars['id_trunk']->value;?>
">
<input type="hidden" name="tech_trunk" id="tech_trunk" value="<?php echo $_smarty_tpl->tpl_vars['tech_trunk']->value;?>
">
<input type="hidden" name="mostra_adv_peer" id="mostra_adv_peer" value="<?php echo $_smarty_tpl->tpl_vars['mostra_adv_peer']->value;?>
">
<input type="hidden" name="mostra_adv_user" id="mostra_adv_user" value="<?php echo $_smarty_tpl->tpl_vars['mostra_adv_user']->value;?>
">
<input type="hidden" name="arrDestine"  id="arrDestine" value="<?php echo $_smarty_tpl->tpl_vars['arrDestine']->value;?>
">
<input type="hidden" name="index"  id="index" value="<?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
">

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
    radio("tab-general");
});
<?php echo '</script'; ?>
>
<style type="text/css">
.tech td{
    padding-left: 12px;
}
</style>

<?php }
}

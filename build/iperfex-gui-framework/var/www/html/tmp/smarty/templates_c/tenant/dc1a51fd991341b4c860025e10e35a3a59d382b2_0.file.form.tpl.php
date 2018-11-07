<?php
/* Smarty version 3.1.30, created on 2018-05-07 16:54:37
  from "/var/www/html/iperfex/web/apps/calltimetemplates/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0bd0d290a90_30145155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1a51fd991341b4c860025e10e35a3a59d382b2' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/calltimetemplates/form.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0bd0d290a90_30145155 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/modifier.date_format.php';
?>
<table width="100%">
    <tr>
        <td>
            <div class="clearfix">&nbsp;</div>
            <p class="text-left">
                <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'input') {?>data-msg="<?php echo $_smarty_tpl->tpl_vars['MSG_ALERT']->value;?>
"<?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                <a href="?menu=calltimetemplates" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
            </p>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />

            <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($_smarty_tpl->tpl_vars['USERLEVEL']->value == 'superadmin') {?>
                            <div class="form-group">
                                <label for="" class=""><?php echo $_smarty_tpl->tpl_vars['organization']->value['LABEL'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['organization']->value['INPUT'];?>

                            </div>
                        <?php }?>

                        <div class="form-group">
                            <label for=""><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
</label>
                            <?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>

                        </div>
                        <div class="form-group">
                            <label for=""><?php echo $_smarty_tpl->tpl_vars['description']->value['LABEL'];?>
</label>
                            <?php echo $_smarty_tpl->tpl_vars['description']->value['INPUT'];?>

                        </div>
                        <div class="form-group">
                            <label for=""><?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
</label>
                            <input value="1" <?php if (!isset($_smarty_tpl->tpl_vars['estatus']->value)) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['estatus']->value == '1') {?>checked<?php }?> data-toggle='toggle' data-size='small' data-on="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['INACTIVE']->value;?>
" data-style='ios' data-onstyle='info' data-offstyle='default' type='checkbox' class='toggle_estatus' name="estatus" />
                        </div>

                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="well">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days_text']->value, 'day', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['day']->value) {
?>
                                    <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>"><a href="#tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" aria-controls="tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['day']->value) {
?>
                                    <div role="tabpanel" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>active<?php }?>" id="tab<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-day="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" data-weekday="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                        <div class="clearfix">&nbsp;</div>
                                        <?php if ($_smarty_tpl->tpl_vars['details']->value != '') {?>
                                            <table>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value[$_smarty_tpl->tpl_vars['day']->value], 'detail');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
?>
                                                    <tr class="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-weekday="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                                        <td>
                                                            <input type="hidden" name="id_detail[]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['id_detail'];?>
">
                                                            <input type="hidden" name="weekday[]" value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-timepicker timepicker">
                                                                    <input type="text" name="daytime_init[]"  class="form-control input-sm daytime_init timepicker1" size="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['daytime_init'];?>
">
                                                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group bootstrap-timepicker timepicker">
                                                                    <input type="text" name="daytime_end[]"  class="form-control input-sm daytime_end timepicker1" size="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['END']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['daytime_end'];?>
">
                                                                    <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="btn-group">
                                                            <button type="button" class="btn btn-success btn-add-calltime"><i class="fa fa-plus"></i></button>
                                                            <button type="button" class="btn btn-danger btn-delete-calltime"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </table>
                                        <?php } else { ?>
                                            <table>
                                                <tr class="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-weekday="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                                    <td>
                                                        <input type="hidden" name="id_detail[]" value="">
                                                        <input type="hidden" name="weekday[]" value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
                                                        <div class="form-group">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input type="text" name="daytime_init[]"  class="form-control input-sm daytime_init timepicker1" size="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['START']->value;?>
">
                                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group bootstrap-timepicker timepicker">
                                                                <input type="text" name="daytime_end[]"  class="form-control input-sm daytime_end timepicker1" size="5" placeholder="<?php echo $_smarty_tpl->tpl_vars['END']->value;?>
">
                                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="btn-group">
                                                        <button type="button" class="btn btn-success btn-add-calltime"><i class="fa fa-plus"></i></button>
                                                        <button type="button" class="btn btn-danger btn-delete-calltime"><i class="fa fa-trash-o"></i></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                                            <p><a href="javascript:void(0)" class="btn btn-success btn-copy-ranges"><?php echo $_smarty_tpl->tpl_vars['COPY_TIME_RANGES']->value;?>
</a></p>
                                        <?php }?>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table weekdays">
                                <thead>
                                <tr>
                                    <th class="col-md-4"><?php echo $_smarty_tpl->tpl_vars['DAY']->value;?>
</th>
                                    <th class="col-md-3"><?php echo $_smarty_tpl->tpl_vars['START']->value;?>
</th>
                                    <th class="col-md-3"><?php echo $_smarty_tpl->tpl_vars['STOP']->value;?>
</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $_smarty_tpl->_assignInScope('current', '');
?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['day']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['details']->value != '') {?>
                                        <?php $_smarty_tpl->_assignInScope('printday', true);
?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['details']->value[$_smarty_tpl->tpl_vars['day']->value], 'detail', false, 'key2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['detail']->value) {
?>
                                            <tr class="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['printday']->value) {?>border-top: 2px solid #000000;<?php }?>">
                                                <td><?php if ($_smarty_tpl->tpl_vars['printday']->value) {
echo $_smarty_tpl->tpl_vars['days_text']->value[$_smarty_tpl->tpl_vars['key']->value];
}?></td>
                                                <?php if (!(($_smarty_tpl->tpl_vars['detail']->value['daytime_init'] == '00:00')&($_smarty_tpl->tpl_vars['detail']->value['daytime_end'] == '00:00'))) {?>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['daytime_init'],"%H:%M");?>
</td>
                                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['detail']->value['daytime_end'],"%H:%M");?>
</td>
                                                <?php } else { ?>
                                                    <td></td>
                                                    <td></td>
                                                <?php }?>
                                            </tr>
                                            <?php $_smarty_tpl->_assignInScope('printday', false);
?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    <?php } else { ?>
                                        <tr class="weekday_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="border-top: 2px solid #000000;">
                                            <td><?php echo $_smarty_tpl->tpl_vars['days_text']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php }?>
                                    <?php $_smarty_tpl->_assignInScope('current', $_smarty_tpl->tpl_vars['day']->value);
?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <p class="text-left">
                    <button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['mode']->value == 'input') {?>save_new<?php } else { ?>save_edit<?php }?>" class="btn btn-primary " <?php if ($_smarty_tpl->tpl_vars['mode']->value != 'input') {?>data-msg="<?php echo $_smarty_tpl->tpl_vars['MSG_ALERT']->value;?>
"<?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
                    <a href="?menu=calltimetemplates" class="btn btn-warning "><?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
</a>
                </p>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />

            <div class="clearfix">&nbsp;</div>

        </td>
    </tr>
</table>
<?php }
}

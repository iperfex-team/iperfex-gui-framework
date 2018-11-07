<?php
/* Smarty version 3.1.30, created on 2018-04-30 11:37:37
  from "/var/www/html/iperfex/web/themes/tenant/_common/_list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae738412117b7_82345503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec403aa300859a2b9625bf0f0d1aac6fbef8ee1' => 
    array (
      0 => '/var/www/html/iperfex/web/themes/tenant/_common/_list.tpl',
      1 => 1511811237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae738412117b7_82345503 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/usr/share/iperfex/libs/smarty/libs/plugins/function.html_options.php';
?>
<form id="idformgrid" method="POST" style="margin-bottom:0;" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
    <div class="neo-table-header-row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrActions']->value, 'accion', false, 'k', 'actions', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['accion']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'link') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" class="neo-table-action" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> >
                    <div class="neo-table-header-row-filter">
                        <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?>
                            <img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  />&nbsp;
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </div>
                </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'button') {?>
                <div class="neo-table-header-row-filter">
                    <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?>
                        <img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  />
                    <?php }?>
                    <input type="button" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-action" />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'submit') {?>
                <div class="neo-table-header-row-filter">
                    <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?>
                        <input type="image" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-action" />
                    <?php }?>
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-action" />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'text') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <input type="text"   id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['value'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onkeypress'])) {?> onkeypress="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onkeypress'];?>
" <?php }?> style="height:22px" />
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'combo') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <select name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onchange'];?>
" <?php }?>>
                        <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['selected'])) {?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions'],'selected'=>$_smarty_tpl->tpl_vars['accion']->value['selected']),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions']),$_smarty_tpl);?>

                        <?php }?>
                    </select>
                    <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['task'])) {?>
                        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                    <?php }?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type'] == 'html') {?>
                <div class="neo-table-header-row-filter">
                    <?php echo $_smarty_tpl->tpl_vars['accion']->value['html'];?>

                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
            <div class="neo-table-header-row-filter" id="neo-tabla-header-row-filter-1">
                <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value == 0) {?> <img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/filter.png" align="absmiddle" /> <?php }?>
                <label id="neo-table-label-filter" style="cursor:pointer"><?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?> <?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
 <?php }?></label>
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/icon_arrowdown2.png" align="absmiddle" id="neo-tabla-img-arrow" />
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['enableExport']->value == true) {?>
            <div class="neo-table-header-row-filter" id="export_button" role="button" act="10" tabindex="0" class="exportButton exportShadow" aria-expanded="false" aria-haspopup="true" aria-activedescendant="" >
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/download2.png" align="absmiddle" /> <?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_GRID']->value;?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/icon_arrowdown2.png" align="absmiddle" />
            </div>
            <div id="subMenuExport" class="subMenu neo-display-none" role="menu" aria-haspopup="true" aria-activedescendant="">
                 <div class="items">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportcsv=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="CSV" aria-disabled="false">
			    <div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/csv.gif" border="0" align="absmiddle" title="CSV" />&nbsp;&nbsp;CSV
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportspreadsheet=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="Spread_Sheet" aria-disabled="false">
			    <div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/spreadsheet.gif" border="0" align="absmiddle" title="SPREAD SHEET" />&nbsp;&nbsp;Spreadsheet
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportpdf=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="PDF" aria-disabled="false">
			    <div>
				<img src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/pdf.png" border="0" align="absmiddle" title="PDF" />&nbsp;&nbsp;PDF
			    </div>
			</div>
		    </a>
                </div>
            </div>
        <?php }?>

        <div class="neo-table-header-row-navigation">
            <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['start']->value <= 1) {?>
                    <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-first.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-previous.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-first.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-previous.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pageup" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($_smarty_tpl->tpl_vars['end']->value == $_smarty_tpl->tpl_vars['total']->value) {?>
                    <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-next.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-last.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="opacity: 0.3;" />
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-next.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-last.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer;" /></a>
                <?php }?>
            <?php }?>
        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
        <div id="neo-table-header-filterrow" class="neo-display-none">
            <?php echo $_smarty_tpl->tpl_vars['contentFilter']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['arrFiltersControl']->value)) {?>
        <div class="neo-table-filter-controls">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrFiltersControl']->value, 'filterc', false, 'k', 'filtersctrl', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['filterc']->value) {
?>
                <div class="neo-filter-control"><?php echo $_smarty_tpl->tpl_vars['filterc']->value['msg'];?>
&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['filterc']->value['defaultFilter'] == 'no') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&name_delete_filters=<?php echo $_smarty_tpl->tpl_vars['filterc']->value['filters'];?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/elastixneo/images/bookmarks_equis.png' width="18" height="16" align='absmiddle' border="0" /></a>
				<?php }?>
				</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    <?php }?>

    <div id="neo-table-ref-table">
        <table align="center" cellspacing="0" cellpadding="0" width="100%" id="neo-table1" >
            <tr class="neo-table-title-row">
                <?php
$__section_columnNum_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum'] : false;
$__section_columnNum_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_0_start = min(0, $__section_columnNum_0_loop);
$__section_columnNum_0_total = min(($__section_columnNum_0_loop - $__section_columnNum_0_start), $__section_columnNum_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_0_total != 0) {
for ($__section_columnNum_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_0_start; $__section_columnNum_0_iteration <= $__section_columnNum_0_total; $__section_columnNum_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] = ($__section_columnNum_0_iteration == 1);
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] : null)) {?>
                        <td class="neo-table-title-row" style="background:none;"><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</td>
                    <?php } else { ?>
                        <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</td>
                    <?php }?>
                <?php
}
}
if ($__section_columnNum_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = $__section_columnNum_0_saved;
}
?>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrData']->value, 'data', false, 'k', 'filas', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['iteration'] == $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['total'];
?>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['ctrl'] == 'separator_line') {?>
                    <tr class="neo-table-data-row">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['start'] > 0) {?>
                            <td class="neo-table-data-row" colspan="<?php echo $_smarty_tpl->tpl_vars['data']->value['start'];?>
"></td>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('data_start', ((string)$_smarty_tpl->tpl_vars['data']->value['start']));
?>
                        <td class="neo-table-data-row" colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value-$_smarty_tpl->tpl_vars['data']->value['start'];?>
" style='background-color:#AAAAAA;height:1px;'></td>
                    </tr>
                <?php } else { ?>
                    <tr class="neo-table-data-row">
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_filas']->value['last'] : null)) {?>
                            <?php
$__section_columnNum_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum'] : false;
$__section_columnNum_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_1_start = min(0, $__section_columnNum_1_loop);
$__section_columnNum_1_total = min(($__section_columnNum_1_loop - $__section_columnNum_1_start), $__section_columnNum_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_1_total != 0) {
for ($__section_columnNum_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_1_start; $__section_columnNum_1_iteration <= $__section_columnNum_1_total; $__section_columnNum_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] = ($__section_columnNum_1_iteration == 1);
?>
                                <td class="neo-table-data-row table_data_last_row"><?php if ($_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)] == '') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)];?>
</td>
                            <?php
}
}
if ($__section_columnNum_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = $__section_columnNum_1_saved;
}
?>
                        <?php } else { ?>
                            <?php
$__section_columnNum_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum'] : false;
$__section_columnNum_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_2_start = min(0, $__section_columnNum_2_loop);
$__section_columnNum_2_total = min(($__section_columnNum_2_loop - $__section_columnNum_2_start), $__section_columnNum_2_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_2_total != 0) {
for ($__section_columnNum_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_2_start; $__section_columnNum_2_iteration <= $__section_columnNum_2_total; $__section_columnNum_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] = ($__section_columnNum_2_iteration == 1);
?>
                                <td class="neo-table-data-row table_data"><?php if ($_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)] == '') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)];?>
</td>
                            <?php
}
}
if ($__section_columnNum_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = $__section_columnNum_2_saved;
}
?>
                        <?php }?>
                    </tr>
                <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php } else { ?>
                <tr class="neo-table-data-row">
                    <td class="neo-table-data-row table_data" colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value;?>
" align="center"><?php echo $_smarty_tpl->tpl_vars['NO_DATA_FOUND']->value;?>
</td>
                </tr>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value > 3) {?>
                <tr class="neo-table-title-row">
                    <?php
$__section_columnNum_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum'] : false;
$__section_columnNum_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_columnNum_3_start = min(0, $__section_columnNum_3_loop);
$__section_columnNum_3_total = min(($__section_columnNum_3_loop - $__section_columnNum_3_start), $__section_columnNum_3_loop);
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = new Smarty_Variable(array());
if ($__section_columnNum_3_total != 0) {
for ($__section_columnNum_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] = $__section_columnNum_3_start; $__section_columnNum_3_iteration <= $__section_columnNum_3_total; $__section_columnNum_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] = ($__section_columnNum_3_iteration == 1);
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['first'] : null)) {?>
                            <td class="neo-table-title-row" style="background:none;"><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</td>
                        <?php } else { ?>
                            <td class="neo-table-title-row"><?php echo $_smarty_tpl->tpl_vars['header']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_columnNum']->value['index'] : null)]['name'];?>
&nbsp;</td>
                        <?php }?>
                    <?php
}
}
if ($__section_columnNum_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_columnNum'] = $__section_columnNum_3_saved;
}
?>
                </tr>
            <?php }?>
        </table>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['numData']->value > 3) {?>
        <div class="neo-table-footer-row">
            <div class="neo-table-header-row-navigation">
                <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['start']->value <= 1) {?>
                        <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-first.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                        <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-previous.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-first.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-previous.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                    <?php }?>
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                    <input  type=text  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pagedown" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblrecords']->value;?>
)
                    <?php if ($_smarty_tpl->tpl_vars['end']->value == $_smarty_tpl->tpl_vars['total']->value) {?>
                        <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-next.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' border='0' width="16" height="16" style="opacity: 0.3;" />
                        <img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-last.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="opacity: 0.3;" />
                    <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-next.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
"><img src='<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
images/table-arrow-last.gif' alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
' align='absmiddle' border='0' width='16' height='16' style="cursor: pointer" /></a>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    <?php }?>
</form>


<?php echo '<script'; ?>
 type="text/Javascript">
    $(function(){
        $("#neo-table1").colResizable({
            liveDrag:true,
            marginLeft:"1px",
            onDrag: onDrag
        });
    });

    var onDrag = function(){

    }

    $("[id^=page]").keyup(function(event) {
        var id  = $(this).attr("id");
        var val = $(this).val();

        if(id == "pageup")
            $("#pagedown").val(val);
        else if(id == "pagedown")
            $("#pageup").val(val);
    });

    //   $(document).ready(function(){
    //     $("#neo-combo-example-ringgroup, #neo-combo-example-fieldname, #neo-combo-example-status").kendoComboBox();
    //   });

    $("#neo-tabla-header-row-filter-1").click(function() {

    <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
    <?php } else { ?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_HIDE']->value;?>
";
    <?php }?>

        var webCommon=getWebCommon();
        if($("#neo-table-header-filterrow").data("neo-table-header-filterrow-status")=="visible") {
            $("#neo-table-header-filterrow").addClass("neo-display-none");
            $("#neo-tabla-img-arrow").attr("src",webCommon+"images/icon_arrowdown2.png");
            $("#neo-table-label-filter").text(filter_show);
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
            $("#neo-tabla-header-row-filter-1").removeClass("exportBackground");
        } else {
            $("#neo-table-header-filterrow").removeClass("neo-display-none");
            $("#neo-tabla-img-arrow").attr("src",webCommon+"images/icon_arrowup2.png");
            $("#neo-table-label-filter").text(filter_hide);
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "visible");
            $("#neo-tabla-header-row-filter-1").addClass("exportBackground");
        }
    });
<?php echo '</script'; ?>
>
<?php }
}

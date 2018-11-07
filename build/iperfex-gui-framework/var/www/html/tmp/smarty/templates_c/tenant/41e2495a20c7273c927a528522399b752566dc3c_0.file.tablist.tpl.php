<?php
/* Smarty version 3.1.30, created on 2018-05-07 15:08:16
  from "/var/www/html/iperfex/web/apps/reports_inbound/tablist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5af0a42063ec85_96287737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e2495a20c7273c927a528522399b752566dc3c' => 
    array (
      0 => '/var/www/html/iperfex/web/apps/reports_inbound/tablist.tpl',
      1 => 1525654224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af0a42063ec85_96287737 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 	<li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['current_tab']->value == 'statsagent') {?>active<?php }?>"><a id="statsagent" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
statsagent"><?php echo $_smarty_tpl->tpl_vars['statsagent']->value;?>
</a></li>
	<li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['current_tab']->value == 'stats_completed') {?>active<?php }?>"><a id="stats_completed" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
stats_completed"><?php echo $_smarty_tpl->tpl_vars['stats_completed']->value;?>
</a></li>
    <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['current_tab']->value == 'stats') {?>active<?php }?>"><a id="stats" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
stats"><?php echo $_smarty_tpl->tpl_vars['stats']->value;?>
</a></li>
    <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['current_tab']->value == 'answerreports') {?>active<?php }?>"><a id="answerreports" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
answerreports"><?php echo $_smarty_tpl->tpl_vars['answerreports']->value;?>
</a></li>
    <li role="presentation" class="<?php if ($_smarty_tpl->tpl_vars['current_tab']->value == 'call') {?>active<?php }?>"><a id="call" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
call"><?php echo $_smarty_tpl->tpl_vars['callreports']->value;?>
</a></li>
   
    
</ul>
<?php }
}

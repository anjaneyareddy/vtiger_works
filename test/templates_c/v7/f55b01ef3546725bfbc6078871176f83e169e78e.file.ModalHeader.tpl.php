<?php /* Smarty version Smarty-3.1.7, created on 2020-10-10 20:27:57
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/vtiger_WORKS/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14499784195f82194d2d43a3-41531140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55b01ef3546725bfbc6078871176f83e169e78e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtiger_WORKS/includes/runtime/../../layouts/v7/modules/Vtiger/ModalHeader.tpl',
      1 => 1601042569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14499784195f82194d2d43a3-41531140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f82194d2db44',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f82194d2db44')) {function content_5f82194d2db44($_smarty_tpl) {?>
<div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h4></div></div>    <?php }} ?>
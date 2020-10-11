<?php /* Smarty version Smarty-3.1.7, created on 2020-10-10 20:39:26
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/vtiger_WORKS/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5830100055f820deeb73505-18542574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07addefc8db9acc9874b88a8185bca761174751' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/vtiger_WORKS/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1601042569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5830100055f820deeb73505-18542574',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f820deeb87db',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f820deeb87db')) {function content_5f820deeb87db($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>
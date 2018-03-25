<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:17
         compiled from "D:\Projects\CMS\livestreet_sso\framework\frontend\components\field\field.captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6396488065ab760e927fbf1-39074314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea5871c5d2df939a706d5cd4977bca1b6713069b' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\framework\\frontend\\components\\field\\field.captcha.tpl',
      1 => 1493642638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6396488065ab760e927fbf1-39074314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'captchaType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e92975d7_83470110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e92975d7_83470110')) {function content_5ab760e92975d7_83470110($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('label','captchaName','name','captchaType','mods','attributes','classes')),$_smarty_tpl);?>


<?php echo smarty_function_component(array('_default_short'=>'field','template'=>"captcha-".((string)$_smarty_tpl->tpl_vars['captchaType']->value),'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>
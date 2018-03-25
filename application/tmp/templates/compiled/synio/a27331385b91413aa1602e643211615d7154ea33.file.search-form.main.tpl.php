<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:16
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\components\search\search-form.main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19568230385ab760e87f2630-46773197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27331385b91413aa1602e643211615d7154ea33' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\components\\search\\search-form.main.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19568230385ab760e87f2630-46773197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchType' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e880be54_91654903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e880be54_91654903')) {function content_5ab760e880be54_91654903($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('searchType','mods','classes','attributes')),$_smarty_tpl);?>


<?php ob_start();?><?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['searchType']->value)===null||$tmp==='' ? 'topics' : $tmp);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'search-form','name'=>'main','action'=>$_tmp1.$_tmp2,'params'=>$_smarty_tpl->tpl_vars['params']->value),$_smarty_tpl);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:17
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\components\admin\toolbar.admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15752396435ab760e9e825a2-75966376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d6d11405275867b9a3d6fefbcd02b200c4d241' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\components\\admin\\toolbar.admin.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15752396435ab760e9e825a2-75966376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e9e9b060_89434414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e9e9b060_89434414')) {function content_5ab760e9e9b060_89434414($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_lang')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
    <?php ob_start();?><?php echo smarty_function_router(array('_default_short'=>'admin'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('_default_short'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'toolbar.item','html'=>'<i class="ls-toolbar-icon"></i>','url'=>$_tmp1,'attributes'=>array('title'=>$_tmp2),'mods'=>'admin'),$_smarty_tpl);?>

<?php }?><?php }} ?>
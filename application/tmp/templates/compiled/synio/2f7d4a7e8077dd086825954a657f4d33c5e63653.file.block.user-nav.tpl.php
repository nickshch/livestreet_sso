<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 12:08:28
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\components\user\blocks\block.user-nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13649654735ab7670c923815-45531784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7d4a7e8077dd086825954a657f4d33c5e63653' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\components\\user\\blocks\\block.user-nav.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13649654735ab7670c923815-45531784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab7670c935138_55085808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7670c935138_55085808')) {function content_5ab7670c935138_55085808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'nav'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-nav','content'=>$_tmp1),$_smarty_tpl);?>
<?php }} ?>
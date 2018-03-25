<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 12:08:28
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\components\user\blocks\block.user-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15698451405ab7670cacdc54-45022293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767e5ee4a21b7fbd2f3eed0ac11484c0375c0716' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\components\\user\\blocks\\block.user-actions.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15698451405ab7670cacdc54-45022293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'oUserProfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab7670cae5492_95887049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7670cae5492_95887049')) {function content_5ab7670cae5492_95887049($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->getId()!=$_smarty_tpl->tpl_vars['oUserProfile']->value->getId()){?>
    <?php ob_start();?><?php echo smarty_function_component(array('_default_short'=>'user','template'=>'actions','user'=>$_smarty_tpl->tpl_vars['oUserProfile']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'block','mods'=>'nopadding transparent user-actions','content'=>$_tmp1),$_smarty_tpl);?>

<?php }?><?php }} ?>
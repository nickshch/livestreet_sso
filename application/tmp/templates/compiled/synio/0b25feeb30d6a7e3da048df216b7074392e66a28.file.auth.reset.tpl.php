<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:17
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\components\auth\auth.reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2072952455ab760e9caa6d8-51814898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b25feeb30d6a7e3da048df216b7074392e66a28' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\components\\auth\\auth.reset.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2072952455ab760e9caa6d8-51814898',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e9cb5ee5_18254531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e9cb5ee5_18254531')) {function content_5ab760e9cb5ee5_18254531($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<form action="<?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
password-reset/" method="post" class="js-form-validate js-auth-reset-form">
    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'email','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['mail']['label']),$_smarty_tpl);?>


    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_reset','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form><?php }} ?>
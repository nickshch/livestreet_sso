<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:17
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\components\auth\auth.login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6551232265ab760e98d80a5-40317231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42518a017d04842de9736e2b9f4c1096dd82be5' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\components\\auth\\auth.login.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6551232265ab760e98d80a5-40317231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'redirectUrl' => 0,
    'PATH_WEB_CURRENT' => 0,
    'aLang' => 0,
    'showExtra' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e98f8d87_84163637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e98f8d87_84163637')) {function content_5ab760e98f8d87_84163637($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('redirectUrl','showExtra')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['redirectUrl'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['redirectUrl']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['PATH_WEB_CURRENT']->value : $tmp), null, 0);?>

<?php echo smarty_function_hook(array('run'=>'login_begin'),$_smarty_tpl);?>


<form action="<?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
" method="post" class="js-form-validate js-auth-login-form">
    <?php echo smarty_function_hook(array('run'=>'form_login_begin'),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'login','rules'=>array('required'=>true,'minlength'=>'3'),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['login']['label']),$_smarty_tpl);?>


    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'text','name'=>'password','type'=>'password','rules'=>array('required'=>true,'minlength'=>'2'),'label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['labels']['password']),$_smarty_tpl);?>


    
    <?php if (Config::Get('general.login.captcha')){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'captcha','captchaType'=>Config::Get('sys.captcha.type'),'captchaName'=>'user_auth','name'=>'captcha','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['labels']['captcha']),$_smarty_tpl);?>

    <?php }?>

    
    <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'checkbox','name'=>'remember','label'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['remember']['label'],'checked'=>true),$_smarty_tpl);?>


    <?php echo smarty_function_hook(array('run'=>'form_login_end'),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['redirectUrl']->value){?>
        <?php echo smarty_function_component(array('_default_short'=>'field','template'=>'hidden','name'=>'return-path','value'=>$_smarty_tpl->tpl_vars['redirectUrl']->value),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_component(array('_default_short'=>'button','name'=>'submit_login','mods'=>'primary','text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['form']['fields']['submit']['text']),$_smarty_tpl);?>

</form>

<?php if ($_smarty_tpl->tpl_vars['showExtra']->value){?>
    <div class="ls-pt-20">
        <a href="<?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'];?>
</a><br />
        <a href="<?php echo smarty_function_router(array('page'=>'auth/password-reset'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['aLang']->value['auth']['reset']['title'];?>
</a>
    </div>
<?php }?>

<?php echo smarty_function_hook(array('run'=>'login_end'),$_smarty_tpl);?>
<?php }} ?>
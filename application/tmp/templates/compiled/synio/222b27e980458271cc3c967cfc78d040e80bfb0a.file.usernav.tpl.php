<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 12:08:22
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\components\userbar\usernav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264314725ab76706c91d48-77834174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '222b27e980458271cc3c967cfc78d040e80bfb0a' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\components\\userbar\\usernav.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264314725ab76706c91d48-77834174',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'iUserCurrentCountWall' => 0,
    'iUserCurrentCountCreated' => 0,
    'iUserCurrentCountFavourite' => 0,
    'iUserCurrentCountFriends' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'LIVESTREET_SECURITY_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab76706ce2cf5_58735605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab76706ce2cf5_58735605')) {function content_5ab76706ce2cf5_58735605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>
<div class="ls-userbar-user-nav js-userbar-user-nav">
    <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getProfileAvatarPath(48);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName();?>
"" class="ls-userbar-user-nav-avatar" />
    </a>

    <a href="<?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath();?>
" class="ls-userbar-user-nav-username">
        <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getDisplayName();?>

    </a>

    <div class="ls-userbar-user-nav-toggle js-userbar-user-nav-toggle"></div>

    <?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.info'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.wall'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.publications'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.favourite'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.friends'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.activity'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.messages'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'user.profile.nav.settings'),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'settings'),$_smarty_tpl);?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'admin.title'),$_smarty_tpl);?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_lang(array('name'=>'auth.logout'),$_smarty_tpl);?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth'),$_smarty_tpl);?>
<?php $_tmp14=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','classes'=>'ls-userbar-user-nav-menu js-userbar-user-nav-menu','hook'=>'user','hookParams'=>array('user'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),'items'=>array(array('name'=>'whois','text'=>$_tmp1,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())),array('name'=>'wall','text'=>$_tmp2,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."wall/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountWall']->value),array('name'=>'created','text'=>$_tmp3,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."created/topics/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountCreated']->value),array('name'=>'favourites','text'=>$_tmp4,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."favourites/topics/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountFavourite']->value),array('name'=>'friends','text'=>$_tmp5,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."friends/",'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountFriends']->value),array('name'=>'activity','text'=>$_tmp6,'url'=>((string)$_smarty_tpl->tpl_vars['oUserCurrent']->value->getUserWebPath())."stream/"),array('name'=>'talk','text'=>$_tmp7,'url'=>$_tmp8,'count'=>$_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value),array('name'=>'settings','text'=>$_tmp9,'url'=>$_tmp10),array('name'=>'admin','text'=>$_tmp11,'url'=>$_tmp12,'is_enabled'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()),array('name'=>'logout','text'=>$_tmp13,'url'=>$_tmp14."logout/?security_ls_key=".((string)$_smarty_tpl->tpl_vars['LIVESTREET_SECURITY_KEY']->value)))),$_smarty_tpl);?>

</div><?php }} ?>
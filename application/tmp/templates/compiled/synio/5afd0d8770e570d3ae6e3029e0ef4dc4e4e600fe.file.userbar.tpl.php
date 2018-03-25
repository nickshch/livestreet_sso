<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:16
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\components\userbar\userbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:616518545ab760e83685b7-73533214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5afd0d8770e570d3ae6e3029e0ef4dc4e4e600fe' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\components\\userbar\\userbar.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616518545ab760e83685b7-73533214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sMenuHeadItemSelect' => 0,
    'aLang' => 0,
    'oUserCurrent' => 0,
    'iUserCurrentCountTalkNew' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e839c5b7_53470352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e839c5b7_53470352')) {function content_5ab760e839c5b7_53470352($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
if (!is_callable('smarty_function_hook')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.lang.php';
?>

<div class="ls-userbar js-userbar">
    <div class="ls-userbar-inner ls-clearfix" style="min-width: <?php echo Config::Get('view.grid.fluid_min_width');?>
; max-width: <?php echo Config::Get('view.grid.fluid_max_width');?>
;">
        <h1 class="ls-userbar-logo">
            <a href="<?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
"><?php echo Config::Get('view.name');?>
</a>
        </h1>

        
        
            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'/'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'blogs'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'people'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'stream'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'nav','hook'=>'main','activeItem'=>$_smarty_tpl->tpl_vars['sMenuHeadItemSelect']->value,'classes'=>'ls-userbar-nav','items'=>array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['topic']['topics'],'url'=>$_tmp1,'name'=>'blog'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['blog']['blogs'],'url'=>$_tmp2,'name'=>'blogs'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['user']['users'],'url'=>$_tmp3,'name'=>'people'),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['activity']['title'],'url'=>$_tmp4,'name'=>'stream'))),$_smarty_tpl);?>

        

        <?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value){?>
            <div class="ls-userbar-notifications">
                <?php echo smarty_function_hook(array('run'=>'userbar_notifications_items_before'),$_smarty_tpl);?>


                
                <?php if ($_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value){?>
                    <a href="<?php echo smarty_function_router(array('page'=>'talk'),$_smarty_tpl);?>
" class="ls-userbar-notifications-item ls-userbar-messages" title="<?php echo smarty_function_lang(array('_default_short'=>'talk.new_messages'),$_smarty_tpl);?>
">
                        <?php echo smarty_function_component(array('_default_short'=>'syn-icon','icon'=>'message-new'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['iUserCurrentCountTalkNew']->value;?>

                    </a>
                <?php }?>

                
                <span class="ls-userbar-notifications-item ls-userbar-rating" title="<?php echo smarty_function_lang(array('_default_short'=>'vote.rating'),$_smarty_tpl);?>
">
                    <?php echo smarty_function_component(array('_default_short'=>'syn-icon','icon'=>'rating'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['oUserCurrent']->value->getRating();?>

                </span>
            </div>

            
            <?php echo smarty_function_component(array('_default_short'=>'userbar.usernav'),$_smarty_tpl);?>

        <?php }else{ ?>
            
            <?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/login'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo smarty_function_router(array('page'=>'auth/register'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['items'] = new Smarty_variable(array(array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['login']['title'],'classes'=>'js-modal-toggle-login','url'=>$_tmp5),array('text'=>$_smarty_tpl->tpl_vars['aLang']->value['auth']['registration']['title'],'classes'=>'js-modal-toggle-registration','url'=>$_tmp6)), null, 0);?>

            <?php echo smarty_function_component(array('_default_short'=>'nav','hook'=>'auth','classes'=>'ls-userbar-auth-nav','hookParams'=>array('user'=>$_smarty_tpl->tpl_vars['oUserCurrent']->value),'items'=>$_smarty_tpl->tpl_vars['items']->value),$_smarty_tpl);?>

        <?php }?>
    </div>
</div><?php }} ?>
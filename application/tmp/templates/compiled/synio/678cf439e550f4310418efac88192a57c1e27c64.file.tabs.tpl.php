<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:15
         compiled from "D:\Projects\CMS\livestreet_sso\framework\frontend\components\tabs\tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5267869825ab760e7b62030-09066535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678cf439e550f4310418efac88192a57c1e27c64' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\framework\\frontend\\components\\tabs\\tabs.tpl',
      1 => 1493642638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5267869825ab760e7b62030-09066535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabs' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'activeTab' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e7b8fa14_59638176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e7b8fa14_59638176')) {function content_5ab760e7b8fa14_59638176($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tabs', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('activeTab','tabs','mods','classes','attributes')),$_smarty_tpl);?>





<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
?>
    <?php ob_start();?><?php echo mt_rand();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->createLocalArrayVariable('tabs', null, 0);
$_smarty_tpl->tpl_vars['tabs']->value[$_smarty_tpl->tpl_vars['tab']->index]['uid'] = "tab".$_tmp1;?>
<?php } ?>

<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
>
    
    <?php echo smarty_function_component(array('_default_short'=>'tabs.list','activeTab'=>$_smarty_tpl->tpl_vars['activeTab']->value,'tabs'=>$_smarty_tpl->tpl_vars['tabs']->value),$_smarty_tpl);?>


    
    <?php if (!$_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tabs']->value){?>
        <?php $_smarty_tpl->createLocalArrayVariable('tabs', null, 0);
$_smarty_tpl->tpl_vars['tabs']->value[0]['isActive'] = true;?>
    <?php }?>

    <div class="ls-tabs-panes" data-tab-panes>
        <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
?>
            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)){?>
                <div class="ls-tab-pane" <?php if ($_smarty_tpl->tpl_vars['tab']->value['isActive']||($_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tab']->value['name']==$_smarty_tpl->tpl_vars['activeTab']->value)){?>style="display: block"<?php }?> data-tab-pane id="<?php echo $_smarty_tpl->tpl_vars['tab']->value['uid'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['tab']->value['content']){?>
                        <div class="ls-tab-pane-content">
                            <?php echo $_smarty_tpl->tpl_vars['tab']->value['content'];?>

                        </div>
                    <?php }?>

                    
                    <?php if (is_array($_smarty_tpl->tpl_vars['tab']->value['list'])){?>
                        <?php echo smarty_function_component(array('_default_short'=>'item','template'=>'group','params'=>$_smarty_tpl->tpl_vars['tab']->value['list']),$_smarty_tpl);?>

                    <?php }elseif($_smarty_tpl->tpl_vars['tab']->value['list']){?>
                        <?php echo $_smarty_tpl->tpl_vars['tab']->value['list'];?>

                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['tab']->value['body'];?>

                </div>
            <?php }?>
        <?php } ?>
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:15
         compiled from "D:\Projects\CMS\livestreet_sso\framework\frontend\components\tabs\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3492425465ab760e7c71b94-54418064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47fc626a8a6e6add68fb84c9100fe9901df7c56f' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\framework\\frontend\\components\\tabs\\list.tpl',
      1 => 1493642638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3492425465ab760e7c71b94-54418064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'activeTab' => 0,
    'tabs' => 0,
    'tab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e7c93718_26312930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e7c93718_26312930')) {function content_5ab760e7c93718_26312930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cattr.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?><?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-tab-list', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('activeTab','tabs','mods','classes','attributes')),$_smarty_tpl);?>


<ul class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
 ls-clearfix" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>
 data-tab-list>
    <?php if (!$_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tabs']->value){?>
        <?php $_smarty_tpl->createLocalArrayVariable('tabs', null, 0);
$_smarty_tpl->tpl_vars['tabs']->value[0]['isActive'] = true;?>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['tab']->value['is_enabled'])===null||$tmp==='' ? true : $tmp)){?>
            <?php echo smarty_function_component(array('_default_short'=>'tabs.tab','isActive'=>($_smarty_tpl->tpl_vars['tab']->value['isActive']||($_smarty_tpl->tpl_vars['activeTab']->value&&$_smarty_tpl->tpl_vars['tab']->value['name']==$_smarty_tpl->tpl_vars['activeTab']->value)),'params'=>$_smarty_tpl->tpl_vars['tab']->value),$_smarty_tpl);?>

        <?php }?>
    <?php } ?>
</ul><?php }} ?>
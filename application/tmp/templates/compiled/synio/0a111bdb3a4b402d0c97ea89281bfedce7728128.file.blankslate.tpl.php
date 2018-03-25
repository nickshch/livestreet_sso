<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:16
         compiled from "D:\Projects\CMS\livestreet_sso\framework\frontend\components\blankslate\blankslate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14442519825ab760e801e515-26513482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a111bdb3a4b402d0c97ea89281bfedce7728128' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\framework\\frontend\\components\\blankslate\\blankslate.tpl',
      1 => 1493642638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14442519825ab760e801e515-26513482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'visible' => 0,
    'component' => 0,
    'mods' => 0,
    'classes' => 0,
    'attributes' => 0,
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e8032b29_85111250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e8032b29_85111250')) {function content_5ab760e8032b29_85111250($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_cmods')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cmods.php';
if (!is_callable('smarty_function_cattr')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.cattr.php';
?>


<?php $_smarty_tpl->tpl_vars['component'] = new Smarty_variable('ls-blankslate', null, 0);?>
<?php echo smarty_function_component_define_params(array('params'=>array('title','text','visible','mods','classes','attributes')),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['visible'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['visible']->value)===null||$tmp==='' ? true : $tmp), null, 0);?>



<div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
 <?php echo smarty_function_cmods(array('name'=>$_smarty_tpl->tpl_vars['component']->value,'mods'=>$_smarty_tpl->tpl_vars['mods']->value),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" <?php echo smarty_function_cattr(array('list'=>$_smarty_tpl->tpl_vars['attributes']->value),$_smarty_tpl);?>

    <?php if (!$_smarty_tpl->tpl_vars['visible']->value){?>style="display: none;"<?php }?>>

    
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <h3 class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-title">
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </h3>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['text']->value){?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['component']->value;?>
-text">
            <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

        </div>
    <?php }?>
</div><?php }} ?>
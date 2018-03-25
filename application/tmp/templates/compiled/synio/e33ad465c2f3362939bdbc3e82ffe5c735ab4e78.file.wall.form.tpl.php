<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 12:08:29
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\components\wall\wall.form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:840041235ab7670da44901-78193318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33ad465c2f3362939bdbc3e82ffe5c735ab4e78' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\components\\wall\\wall.form.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '840041235ab7670da44901-78193318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'classes' => 0,
    'id' => 0,
    'display' => 0,
    'placeholder' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab7670dae7d85_28793605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab7670dae7d85_28793605')) {function content_5ab7670dae7d85_28793605($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('classes','id','display','placeholder')),$_smarty_tpl);?>


<form class="wall-form js-wall-form <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" data-id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? 0 : $tmp);?>
" <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['display']->value)===null||$tmp==='' ? true : $tmp)){?>style="display: none"<?php }?>>
    
    <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['aLang']->value['wall']['form']['fields']['text']['placeholder'] : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_component(array('_default_short'=>'field','template'=>'textarea','placeholder'=>$_tmp1,'inputClasses'=>'ls-width-full js-wall-form-text'),$_smarty_tpl);?>


    
    <footer class="wall-form-footer">
        <?php echo smarty_function_component(array('_default_short'=>'button','type'=>'submit','mods'=>'primary','classes'=>'js-wall-form-submit','text'=>$_smarty_tpl->tpl_vars['aLang']->value['common']['add']),$_smarty_tpl);?>

    </footer>
</form><?php }} ?>
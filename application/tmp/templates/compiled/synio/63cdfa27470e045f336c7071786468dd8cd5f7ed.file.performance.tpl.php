<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 12:08:23
         compiled from "D:\Projects\CMS\livestreet_sso\framework\frontend\components\performance\performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3108667415ab767071fa4b9-83143850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63cdfa27470e045f336c7071786468dd8cd5f7ed' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\framework\\frontend\\components\\performance\\performance.tpl',
      1 => 1493642638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108667415ab767071fa4b9-83143850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bIsShowStatsPerformance' => 0,
    'stats' => 0,
    'timeFullPerformance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab76707247d55_43177507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab76707247d55_43177507')) {function content_5ab76707247d55_43177507($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component_define_params')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component_define_params.php';
if (!is_callable('smarty_function_hook')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.hook.php';
?>

<?php echo smarty_function_component_define_params(array('params'=>array('stats','timeFullPerformance')),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['bIsShowStatsPerformance']->value){?>
    <div class="ls-alert ls-alert--info ls-performance">
        <?php echo smarty_function_hook(array('run'=>'statistics_performance_begin'),$_smarty_tpl);?>


        <table>
            <tr>
                <td>
                    <h4>MySql</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['count'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['sql']['time'];?>
</strong>
                </td>
                <td>
                    <h4>Cache</h4>
                    query: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count'];?>
</strong><br />
                    &mdash; set: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_set'];?>
</strong><br />
                    &mdash; get: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['count_get'];?>
</strong><br />
                    time: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['cache']['time'];?>
</strong>
                </td>
                <td>
                    <h4>PHP</h4>
                    time load modules: <strong><?php echo $_smarty_tpl->tpl_vars['stats']->value['engine']['time_load_module'];?>
</strong><br />
                    full time: <strong><?php echo $_smarty_tpl->tpl_vars['timeFullPerformance']->value;?>
</strong>
                </td>
                <td>
                    <h4>Memory</h4>
                    memory usage: <strong><?php echo memory_get_usage(true)/1024/1024;?>
 Mb</strong><br />
                    memory peak usage: <strong><?php echo memory_get_peak_usage(true)/1024/1024;?>
 Mb</strong>
                </td>

                <?php echo smarty_function_hook(array('run'=>'statistics_performance_item'),$_smarty_tpl);?>

            </tr>
        </table>

        <?php echo smarty_function_hook(array('run'=>'statistics_performance_end'),$_smarty_tpl);?>

    </div>
<?php }?><?php }} ?>
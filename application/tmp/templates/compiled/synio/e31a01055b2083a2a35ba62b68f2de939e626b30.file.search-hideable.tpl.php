<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:16
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\components\search\hideable\search-hideable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16821366675ab760e877f428-83351826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e31a01055b2083a2a35ba62b68f2de939e626b30' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\components\\search\\hideable\\search-hideable.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16821366675ab760e877f428-83351826',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760e8795d29_82721602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760e8795d29_82721602')) {function content_5ab760e8795d29_82721602($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.lang.php';
if (!is_callable('smarty_function_component')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.component.php';
?><div class="ls-search-hideable js-search-hideable">
    <div class="ls-search-hideable-toggle js-search-hideable-toggle">
        <i class="ls-search-hideable-toggle-icon"></i>
        <a href="#" class="ls-search-hideable-toggle-text"><?php echo smarty_function_lang(array('_default_short'=>'search.find'),$_smarty_tpl);?>
</a>
    </div>

    <?php echo smarty_function_component(array('_default_short'=>'search.main','classes'=>'ls-search-hideable-search js-search-hideable-search','mods'=>'light'),$_smarty_tpl);?>

</div><?php }} ?>
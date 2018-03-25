<?php /* Smarty version Smarty-3.1.13, created on 2018-03-25 11:42:19
         compiled from "D:\Projects\CMS\livestreet_sso\application\frontend\skin\synio\actions\ActionSearch\opensearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8986679185ab760eb235492-96631574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab7485389234af4ca55609f22d13f0dc3a73440' => 
    array (
      0 => 'D:\\Projects\\CMS\\livestreet_sso\\application\\frontend\\skin\\synio\\actions\\ActionSearch\\opensearch.tpl',
      1 => 1493642608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8986679185ab760eb235492-96631574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sHtmlTitle' => 0,
    'sHtmlDescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ab760eb2723f2_78569330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab760eb2723f2_78569330')) {function content_5ab760eb2723f2_78569330($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'D:\\Projects\\CMS\\livestreet_sso\\framework/classes/modules/viewer/plugs\\function.router.php';
?><OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
    <ShortName><?php echo Config::Get('view.name');?>
</ShortName>
    <Description><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</Description>
    <Contact><?php echo Config::Get('sys.mail.from_email');?>
</Contact>
    <Url type="text/html" template="<?php echo smarty_function_router(array('page'=>'search/topics'),$_smarty_tpl);?>
?q={searchTerms}" />
    <LongName><?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
</LongName>
    <Image height="64" width="64" type="image/png"><?php echo Config::Get('path.skin.assets.web');?>
/images/favicons/opensearch.png</Image>
    <Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo Config::Get('path.skin.assets.web');?>
/images/favicons/favicon.ico</Image>
    <Developer><?php echo Config::Get('view.name');?>
 (<?php echo Router::GetPath('/');?>
)</Developer>
    <Attribution>
        © «<?php echo Config::Get('view.name');?>
»
    </Attribution>
    <SyndicationRight>open</SyndicationRight>
    <AdultContent>false</AdultContent>
    <Language>ru-ru</Language>
    <OutputEncoding>UTF-8</OutputEncoding>
    <InputEncoding>UTF-8</InputEncoding>
</OpenSearchDescription><?php }} ?>
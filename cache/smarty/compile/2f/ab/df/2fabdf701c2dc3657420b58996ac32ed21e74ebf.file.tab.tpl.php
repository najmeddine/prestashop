<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 19:35:00
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\projects\Prestashop\prestashop\themes\blackhawk3.1\modules\homefeatured\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1590856520ad4b154e9-64735718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fabdf701c2dc3657420b58996ac32ed21e74ebf' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\projects\\Prestashop\\prestashop\\themes\\blackhawk3.1\\modules\\homefeatured\\tab.tpl',
      1 => 1448217205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1590856520ad4b154e9-64735718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56520ad4b4fe69_79996320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56520ad4b4fe69_79996320')) {function content_56520ad4b4fe69_79996320($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\projects\\Prestashop\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>

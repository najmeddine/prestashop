<?php /* Smarty version Smarty-3.1.19, created on 2015-11-16 21:51:42
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\projects\Prestashop\prestashop\admin1386ghuyn\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30997564a41de4d1ea6-35772761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '917728d35133886868735a68d079704d3a037a62' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\projects\\Prestashop\\prestashop\\admin1386ghuyn\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1440060212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30997564a41de4d1ea6-35772761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564a41de527db5_34328516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a41de527db5_34328516')) {function content_564a41de527db5_34328516($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>

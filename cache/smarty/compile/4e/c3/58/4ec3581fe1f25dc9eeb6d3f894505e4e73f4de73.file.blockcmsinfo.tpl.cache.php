<?php /* Smarty version Smarty-3.1.19, created on 2015-11-22 19:26:22
         compiled from "C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\projects\Prestashop\prestashop\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23653565208ce427fb8-67632669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec3581fe1f25dc9eeb6d3f894505e4e73f4de73' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-DevServer-14.1VC9\\data\\localweb\\projects\\Prestashop\\prestashop\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1440060212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23653565208ce427fb8-67632669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565208ce4ce004_36860090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565208ce4ce004_36860090')) {function content_565208ce4ce004_36860090($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>

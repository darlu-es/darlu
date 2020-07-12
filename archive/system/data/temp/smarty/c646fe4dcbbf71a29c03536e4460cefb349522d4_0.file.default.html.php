<?php
/* Smarty version 3.1.30, created on 2020-06-23 10:12:17
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/file_cpanel/sections/default/html/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1d581a0ee37_50848724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c646fe4dcbbf71a29c03536e4460cefb349522d4' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/file_cpanel/sections/default/html/default.html',
      1 => 1577271814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1d581a0ee37_50848724 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR = {
	path: '<?php echo \S::safeJS(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['path']));?>
',
	popupId: '<?php echo $_smarty_tpl->tpl_vars['app']->value['popupId'];?>
',
	UI: { translations: [] },
	isFolder: <?php if ($_smarty_tpl->tpl_vars['app']->value['isFolder']) {?>true<?php } else { ?>false<?php }?>
};
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&sec=File%20Control%20Panel%3A%20Default&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&page=translation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/fileman/file_cpanel/index.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="css/file_cpanel.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" /><?php }
}

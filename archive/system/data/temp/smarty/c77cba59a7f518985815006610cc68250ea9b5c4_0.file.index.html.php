<?php
/* Smarty version 3.1.30, created on 2020-06-23 09:21:20
  from "/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/install/sections/default/html/pages/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1c9900c1906_55895634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c77cba59a7f518985815006610cc68250ea9b5c4' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/install/sections/default/html/pages/index.html',
      1 => 1559256426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1c9900c1906_55895634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>FileRun :: Installation</title>
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['insertCSSLink'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['insertCSSLink'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'insertLink'))) {
throw new SmartyException('block tag \'insertCSSLink\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('insertCSSLink', array());
$_block_repeat1=true;
echo $_block_plugin1::insertLink(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
$_block_repeat1=false;
echo $_block_plugin1::insertLink(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo '<script'; ?>
 src="js/min.php?extjs=1&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['currentVersion']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/install.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['currentVersion']);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	var URLRoot = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
';
	var appName = 'FileRun';
	<?php echo '</script'; ?>
>
</head>
<body id="theBODY">
</body>
</html><?php }
}

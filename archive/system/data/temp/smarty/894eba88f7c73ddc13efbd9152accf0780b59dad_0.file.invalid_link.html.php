<?php
/* Smarty version 3.1.30, created on 2020-06-23 10:11:59
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/weblinks/sections/public/html/invalid_link.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1d56fcda816_78970331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '894eba88f7c73ddc13efbd9152accf0780b59dad' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/weblinks/sections/public/html/invalid_link.html',
      1 => 1559256432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1d56fcda816_78970331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>

<body>
<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
The requested file is no longer available!<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes']) {
echo $_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes'];
}
}
}

<?php
/* Smarty version 3.1.30, created on 2020-06-23 09:25:02
  from "/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/cpanel/sections/settings/html/pages/files.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1ca6ec97030_03469314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45814a206a1eb4384ad695be1920fab89b7118c' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/cpanel/sections/settings/html/pages/files.html',
      1 => 1559256424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1ca6ec97030_03469314 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_files.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}

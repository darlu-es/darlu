<?php
/* Smarty version 3.1.30, created on 2020-06-23 11:34:24
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/cpanel/sections/settings/html/pages/misc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1e8c0e3d9d2_15168041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8eac25c81b774890d8fff68ba80c1b4befc1d7b' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/cpanel/sections/settings/html/pages/misc.html',
      1 => 1559256424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1e8c0e3d9d2_15168041 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_misc.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}

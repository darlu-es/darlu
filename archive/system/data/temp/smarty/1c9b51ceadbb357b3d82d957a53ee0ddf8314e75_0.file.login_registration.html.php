<?php
/* Smarty version 3.1.30, created on 2020-06-23 09:25:09
  from "/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/cpanel/sections/settings/html/pages/login_registration.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1ca75cb0851_69217518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c9b51ceadbb357b3d82d957a53ee0ddf8314e75' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/cpanel/sections/settings/html/pages/login_registration.html',
      1 => 1559256424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1ca75cb0851_69217518 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Admin: Settings"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
FR.pluginsInfo = <?php echo $_smarty_tpl->tpl_vars['app']->value['pluginsInfo'];?>
;
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
FR.roles = <?php echo $_smarty_tpl->tpl_vars['app']->value['roles'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_login_registration.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}

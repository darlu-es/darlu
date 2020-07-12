<?php
/* Smarty version 3.1.30, created on 2020-06-23 22:17:58
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/cpanel/sections/settings/html/pages/file_search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef27f96a1a922_31396545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8dd535160f296a148b569817d9de0e37b708b0a' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/cpanel/sections/settings/html/pages/file_search.html',
      1 => 1559256424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef27f96a1a922_31396545 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Admin: Settings"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
FR.stats = <?php echo $_smarty_tpl->tpl_vars['app']->value['stats'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_file_search.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}

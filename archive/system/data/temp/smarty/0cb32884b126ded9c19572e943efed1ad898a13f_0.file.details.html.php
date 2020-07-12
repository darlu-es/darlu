<?php
/* Smarty version 3.1.30, created on 2020-06-23 10:12:18
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/file_cpanel/sections/default/html/details.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1d582170662_31326578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cb32884b126ded9c19572e943efed1ad898a13f' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/file_cpanel/sections/default/html/details.html',
      1 => 1577271814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1d582170662_31326578 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR = {
	path: '<?php echo \S::safeJS(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['path']));?>
',
	popupId: '<?php echo $_smarty_tpl->tpl_vars['app']->value['popupId'];?>
',
	UI: { translations: [] },
	itemInfo: <?php echo $_smarty_tpl->tpl_vars['app']->value['itemInfo'];?>

};
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&sec=File%20Control%20Panel%3A%20Details&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&page=translation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/fileman/file_cpanel/details.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
><?php }
}

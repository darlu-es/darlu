<?php
/* Smarty version 3.1.30, created on 2020-06-23 09:25:34
  from "/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/software_update/sections/cpanel/html/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1ca8e8c2d22_73929013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b316139e050405d49f40066ebb9d450cc44bda4e' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/httpdocs/archive/system/modules/software_update/sections/cpanel/html/default.html',
      1 => 1559256430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1ca8e8c2d22_73929013 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Admin: Settings"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
FR.currentVersion = '<?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion'];?>
';
FR.uploadChunkSize = <?php echo $_smarty_tpl->tpl_vars['app']->value['upload_chunk_size'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Software update&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/software_update.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}

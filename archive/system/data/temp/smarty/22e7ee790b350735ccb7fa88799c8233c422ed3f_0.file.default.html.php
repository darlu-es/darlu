<?php
/* Smarty version 3.1.30, created on 2020-06-23 22:17:34
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/software_update/sections/cpanel/html/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef27f7e0ad512_29281984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22e7ee790b350735ccb7fa88799c8233c422ed3f' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/software_update/sections/cpanel/html/default.html',
      1 => 1559256430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef27f7e0ad512_29281984 (Smarty_Internal_Template $_smarty_tpl) {
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

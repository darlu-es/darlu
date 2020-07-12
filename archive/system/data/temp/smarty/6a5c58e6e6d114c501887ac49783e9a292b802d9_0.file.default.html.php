<?php
/* Smarty version 3.1.30, created on 2020-06-23 11:34:05
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/weblinks/sections/default/html/pages/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1e8ad084b34_46698253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5c58e6e6d114c501887ac49783e9a292b802d9' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/weblinks/sections/default/html/pages/default.html',
      1 => 1577271816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1e8ad084b34_46698253 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR = {
    UI: {},
    language: '<?php echo $_smarty_tpl->tpl_vars['app']->value['language'];?>
',
    userCanUpload: <?php if ($_smarty_tpl->tpl_vars['app']->value['user']['perms']['upload']) {?>true<?php } else { ?>false<?php }?>,
	userCanEmail: <?php if ($_smarty_tpl->tpl_vars['app']->value['user']['perms']['email']) {?>true<?php } else { ?>false<?php }?>,
    disableShortURL: <?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['weblinks']['disableShortURL']) {?>true<?php } else { ?>false<?php }?>,
    useClientEmail: <?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['weblinks']['useClientEmail']) {?>true<?php } else { ?>false<?php }?>,
    showQR: <?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['weblinks']['hideQRCode']) {?>false<?php } else { ?>true<?php }?>,
    defaultMode: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['app']->value['settings']['weblinks_default_mode'])===null||$tmp==='' ? "grid" : $tmp);?>
'
};
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="js/ext/ext-htmleditor.js?&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&sec=Web%20Links&calendar=1&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/fileman/weblink.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/genpass.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
><?php }
}

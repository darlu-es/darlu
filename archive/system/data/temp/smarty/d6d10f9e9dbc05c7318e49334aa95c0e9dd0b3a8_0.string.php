<?php
/* Smarty version 3.1.30, created on 2020-06-23 09:23:39
  from "d6d10f9e9dbc05c7318e49334aa95c0e9dd0b3a8" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef1ca1b1db385_15530947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef1ca1b1db385_15530947 (Smarty_Internal_Template $_smarty_tpl) {
?>

Hi <?php echo \S::forHTML($_smarty_tpl->tpl_vars['info']->value['name']);?>
,<br>
<br>
Your "<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
</a>" login information has been updated:<br>
<br>
Username: <strong><?php echo \S::forHTML($_smarty_tpl->tpl_vars['info']->value['username']);?>
</strong><br>
Password: <strong><?php echo \S::forHTML($_smarty_tpl->tpl_vars['info']->value['password']);?>
</strong><br>
<br>
Best regards,<br>
<br>
<?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title']);?>

<?php }
}

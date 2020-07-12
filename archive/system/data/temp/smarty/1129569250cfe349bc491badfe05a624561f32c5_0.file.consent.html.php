<?php
/* Smarty version 3.1.30, created on 2020-06-23 22:20:59
  from "/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/oauth/sections/default/html/consent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ef2804b753ea6_49930549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1129569250cfe349bc491badfe05a624561f32c5' => 
    array (
      0 => '/var/www/vhosts/39074511.servicio-online.net/darlu.es/archive/system/modules/oauth/sections/default/html/consent.html',
      1 => 1577271814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2804b753ea6_49930549 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"OAuth2"),$_smarty_tpl);?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo \S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title']);?>
 :: <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
OAuth2 Consent<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</title>
    <link rel="stylesheet" href="../../css/ext.php?oauth2=1&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
">
	<?php echo '<script'; ?>
>
		function showAccess() {
			document.getElementById('appsRow').style.display = 'none';
			document.getElementById('permsLarge').style.display = 'block';
		}
	<?php echo '</script'; ?>
>
</head>
<body>


<div class="container <?php if (!$_smarty_tpl->tpl_vars['app']->value['requiresFullAccess']) {?>withList<?php }?>" style="margin-bottom:10%">
	<div class="row">
		<div style="text-align:center">
			<h2><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Authorization<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</h2>
		</div>
	</div>

	<div class="row" id="appsRow">
		<div class="one-half column">
			<div class="appBox">
				<div class="u-cf">
					<?php if ($_smarty_tpl->tpl_vars['app']->value['clientInfo']['logo_url']) {?>
					<div class="u-pull-left logo" style="background-image:url(<?php echo \S::safeJS($_smarty_tpl->tpl_vars['app']->value['clientInfo']['logo_url']);?>
)">
					</div>
					<?php }?>
					<div class="u-pull-left appDetails" <?php if ($_smarty_tpl->tpl_vars['app']->value['clientInfo']['logo_url']) {?>style="margin-left:10px"<?php }?>>
						<div><?php if ($_smarty_tpl->tpl_vars['app']->value['clientInfo']['website']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['clientInfo']['website'];?>
" target="_blank"><?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']);?>
</a><?php } else {
echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']);
}?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['app']->value['clientInfo']['publisher']) {?><div class="sub"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
by<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['app']->value['clientInfo']['publisher_website']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['clientInfo']['publisher_website'];?>
" target="_blank"><?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['publisher']);?>
</a><?php } else {
echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['publisher']);
}?></strong></div><?php }?>
					</div>
				</div>
			</div>

			<div class="perms">
				<?php if ($_smarty_tpl->tpl_vars['app']->value['requiresFullAccess']) {?>
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
Would like to receive full access to:<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php } else { ?>
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
Would like to receive <a href="javascript:showAccess()">access</a> to:<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php }?>
			</div>

		</div>
		<div class="one-half column second-app">
			<div class="appBox" style="position:relative">
				<div class="u-cf">
					<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['ui_login_logo']) {?>
					<div class="u-pull-left logo" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['ui_login_logo'];?>
)">
					</div>
					<?php }?>
					<div class="u-pull-left appDetails" <?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['ui_login_logo']) {?>style="margin-left:10px"<?php }?>>
						<div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['url']['root'];?>
" target="_blank"><?php echo \S::safeHTML(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title']));?>
</a></div>
						<div class="sub">
							<div class="loggedAs">
								<div>
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
as<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['url']['root'];?>
/a/?uid=<?php echo $_smarty_tpl->tpl_vars['app']->value['userInfo']['id'];?>
" class="avatar" /><strong><a href="javascript:;"><?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['userInfo']['fullName']);?>
</a></strong>
								</div>
								<div style="position:relative">
									<div class="signOut"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['logoutURL'];?>
"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Sign in as a different user<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="row perms-large" id="permsLarge">
	    <?php if ($_smarty_tpl->tpl_vars['app']->value['requiresFullAccess']) {?>
	        <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']),2=>\S::safeHTML(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])),3=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['userInfo']['fullName'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']),2=>\S::safeHTML(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])),3=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['userInfo']['fullName'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
The app <strong>%1</strong> would like full access to <strong>%2</strong> as <span class="nowrap-bold">%3</span>.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']),2=>\S::safeHTML(\S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])),3=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['userInfo']['fullName'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	    <?php } else { ?>
	        <div style="margin:1em;"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
The app <strong>%1</strong> would like to:<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::forHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
	    <div class="permsList">
		    <ul>
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value['scopes'], 'scope');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scope']->value) {
?>
		    <li>
				    <?php if ($_smarty_tpl->tpl_vars['scope']->value == 'list') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
List files and folders in your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'webdav') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Access and manage files available in your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'list.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
List files and folders inside your "Apps/%1" folder.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'download') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Download files available in your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'download.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Download files from your "Apps/%1" folder.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'upload') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Upload files to your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'upload.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Upload files inside your "Apps/%1" folder.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'modify') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Make changes to the files and folders inside your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'delete') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Delete files from your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'delete.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Delete files inside your "Apps/%1" folder.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'profile') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
View your basic "%1" account information.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<br>
				    <span style="color:gray;font-size:11px;margin-left:15px"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
That includes your name, company name, website and logo.<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</span>
				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'email') {?>
				        <?php if ($_smarty_tpl->tpl_vars['app']->value['userInfo']['email']) {?>
				            <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['app']->value['userInfo']['email']));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>$_smarty_tpl->tpl_vars['app']->value['userInfo']['email']), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
View your e-mail address (%1).<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>$_smarty_tpl->tpl_vars['app']->value['userInfo']['email']), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				        <?php } else { ?>
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
View your e-mail address, although your account currently doesn't have one set.<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				        <?php }?>
				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'weblink') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Create public links to files inside your "%1" account.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'weblink.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Create public links to files inside your "Apps/%1" folder.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['clientInfo']['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'share') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Share folders with other users.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'share.sandbox') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Share folders inside your "Apps/%1" folder with other users.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php } elseif ($_smarty_tpl->tpl_vars['scope']->value == 'admin') {?>
				    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Manage "%1" user accounts with your administrative privileges.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>\S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				    <?php }?>
			  </li>
		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		    </ul>
	    </div>
	    <?php }?>
    </div>

	<div class="row" style="text-align:center;">
		<div style="margin-top:2em;color:gray;"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array(1=>$_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']));
$_block_repeat1=true;
echo $_block_plugin1(array(1=>$_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Use of your data is subject to the privacy policy of <span class="nowrap-bold">%1</span>.<?php $_block_repeat1=false;
echo $_block_plugin1(array(1=>$_smarty_tpl->tpl_vars['app']->value['clientInfo']['name']), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
		<div style="margin-top:2em;">
			<a class="button button-primary" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['confirmURL'];?>
"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Accept<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a> <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['cancelURL'];?>
" class="button cancel" style="margin-left:10px"><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Cancel<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</a>
		</div>
	</div>

</div>

</body>
</html><?php }
}

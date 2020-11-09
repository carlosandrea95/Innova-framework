<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 04:21:20
  from 'C:\xampp\htdocs\app\protected\views\layouts\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f719d00429990_30223403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d43fe87f64d6a6948d72a05d2705e460d7eb5de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\protected\\views\\layouts\\login.tpl',
      1 => 1600846590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f719d00429990_30223403 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php echo $_smarty_tpl->tpl_vars['template']->value['app']['name'];?>
</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
css/custom.style.css">
	<link href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
vendor/fontawesome/css/all.css" rel="stylesheet">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['pageContent']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
js/vendor-all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
js/plugins/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
js/ripple.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
js/pcoded.min.js"><?php echo '</script'; ?>
>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value['app']['js'], 'js');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</body>

</html>
<?php }
}

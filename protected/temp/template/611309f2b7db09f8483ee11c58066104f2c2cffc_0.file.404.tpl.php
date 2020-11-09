<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 04:32:34
  from 'C:\xampp\htdocs\app\protected\views\layouts\errors\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f719fa2865991_64603920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '611309f2b7db09f8483ee11c58066104f2c2cffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\protected\\views\\layouts\\errors\\404.tpl',
      1 => 1601281953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f719fa2865991_64603920 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> - Error 404</title>
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
    <meta name="author" content="Phoenixcoded"/>
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
css/style.css">
    
    

</head>
<!-- [ offline-ui ] start -->
<div class="auth-wrapper maintance" style="background: #fff;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
images/404.png" alt="" class="img-fluid">
                    <h5 class="text-muted my-4">Oops! Page not found!</h5>
                    <form>
                        <button class="btn waves-effect waves-light btn-primary mb-4"><i class="feather icon-refresh-ccw mr-2"></i>Reload</button>
                        <button class="btn waves-effect waves-light btn-primary mb-4"><i class="feather icon-refresh-ccw mr-2"></i>Go back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ offline-ui ] end -->
<!-- Required Js -->

</body>
</html>
<?php }
}

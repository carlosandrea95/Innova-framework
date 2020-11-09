<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 04:25:27
  from 'C:\xampp\htdocs\app\protected\views\layouts\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f719df756f3c1_44151096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0927b802cbe685cdb87f3413e7851e20f238661' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\protected\\views\\layouts\\login.tpl',
      1 => 1600846590,
      2 => 'file',
    ),
    '610c2f23a73a0f58cc83bd1598fb5bd42bf9928a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\protected\\views\\login\\index.tpl',
      1 => 1600791781,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_5f719df756f3c1_44151096 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Innova ERP</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="http://localhost/app/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="http://localhost/app/assets/css/style.css">
	<link rel="stylesheet" href="http://localhost/app/assets/css/custom.style.css">
	<link href="http://localhost/app/assets/vendor/fontawesome/css/all.css" rel="stylesheet">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form method="POST">
                            <img src="http://localhost/app/assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
                            <h4 class="mb-3 f-w-400">Signin</h4>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Email address</label>
                                <input type="text" name="email" class="form-control" id="Email" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" name="password" class="form-control" id="Password" placeholder="">
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                            </div>
                            <button class="btn btn-block btn-primary mb-4">Signin <span class="fa fa-sign-in-alt"></span></button>
                            <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                            <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html" class="f-w-400">Signup</a></p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div></div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="http://localhost/app/assets/js/vendor-all.min.js"></script>
<script src="http://localhost/app/assets/js/plugins/bootstrap.min.js"></script>
<script src="http://localhost/app/assets/js/ripple.js"></script>
<script src="http://localhost/app/assets/js/pcoded.min.js"></script>

<script src="http://localhost/app/core/js/maestro-ajax.js"></script>
<script src="http://localhost/app/core/js/master-ajax.js"></script>

</body>

</html>
<?php }
}

<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-28 04:21:37
  from 'C:\xampp\htdocs\app\protected\views\login\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f719d11c293d3_32851677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '610c2f23a73a0f58cc83bd1598fb5bd42bf9928a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\app\\protected\\views\\login\\index.tpl',
      1 => 1600791781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f719d11c293d3_32851677 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form method="POST">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value['assetsDir'];?>
images/logo-dark.png" alt="" class="img-fluid mb-4">
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
	</div><?php }
}

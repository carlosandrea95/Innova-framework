
<!DOCTYPE html>
<html lang="en">

<head>

	<title>{$template.app.name}</title>
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
	<link rel="icon" href="{$template.assetsDir}images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{$template.assetsDir}css/style.css">
	<link rel="stylesheet" href="{$template.assetsDir}css/custom.style.css">
	<link href="{$template.assetsDir}vendor/fontawesome/css/all.css" rel="stylesheet">


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	{include $pageContent}
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="{$template.assetsDir}js/vendor-all.min.js"></script>
<script src="{$template.assetsDir}js/plugins/bootstrap.min.js"></script>
<script src="{$template.assetsDir}js/ripple.js"></script>
<script src="{$template.assetsDir}js/pcoded.min.js"></script>

{* appJs *}
{foreach from=$template.app.js item=$js}
<script src="{$js}"></script>
{/foreach}

</body>

</html>

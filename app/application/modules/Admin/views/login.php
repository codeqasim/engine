<body class="be-splash-screen">
<div class="be-wrapper be-login">
<div class="be-content">
<div class="main-content container-fluid">
<div class="splash-container">
<div class="panel panel-default panel-border-color panel-border-color-primary">
<?php if (isset($error) && !empty($error)) { ?>
<div class="alert alert-danger">
<?php echo $error; ?>
</div>
<?php } ?>
<div class="panel-heading"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Please enter your user information.</span></div>
<div class="panel-body">
<form action="<?=base_url('admin/login')?>" method="post">
<div class="login-form">
<div class="form-group">
<input id="username" name="email" type="text" placeholder="Username" autocomplete="off" class="form-control">
</div>
<div class="form-group">
<input id="password" name="password" type="password" placeholder="Password" class="form-control">
</div>
<div class="form-group row login-tools">
<div class="col-xs-6 login-remember">
<div class="be-checkbox">
<input type="checkbox" id="remember">
<label for="remember">Remember Me</label>
</div>
</div>
<div class="col-xs-6 login-forgot-password"><a href="#">Forgot Password?</a></div>
</div>
<div class="form-group row login-submit">
<div class="col-xs-6">
<button data-dismiss="modal" type="submit" class="btn btn-default btn-xl">Register</button>
</div>
<div class="col-xs-6">
<button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Sign in</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
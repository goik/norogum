<!-- login-form -->
<form method="post" action="" class="form-login">
<div class="inp-row">
	<div class="inp-row-pad error-field">
		<div class="default-inp-bg">
			<div class="default-inp-bg-border">
				<input 	type="text" 
									class="def-inp def-inp-login" 
									placeholder="<?=$tr["login-form-input-email"] ?>" />
			</div>
		</div>
	</div>
</div>
<div class="inp-row">
	<div class="inp-row-pad">
		<div class="default-inp-bg">
			<div class="default-inp-bg-border">
				<input 	type="password" 
									class="def-inp def-inp-login" 
									placeholder="<?=$tr["login-form-input-password"] ?>" />
			</div>
		</div>
	</div>
</div>
</form>
<!-- /login-form -->

<!-- login-form-two-col -->
<div class="login-form-two-col">
	<div class="login-form-two-col-left">
		<div class="login-form-two-col-left-pad">
			<a href="#" class="forgot-pass-link forgot-form-visible">
				<?=$tr["login-form-link-forgot-password"] ?>
			</a>
		</div>
	</div>
	<div class="login-form-two-col-right">
		<div class="login-form-two-col-right-pad">
			<a href="#" class="login-btn">
				<span class="login-btn-txt">
					<?=$tr["login-form-btn"] ?>
				</span>
			</a>
		</div>
	</div>
</div>
<!-- /login-form-two-col -->
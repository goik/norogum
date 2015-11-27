<h1><?=$tr["contact-form"] ?></h1>

<form method="post" action="" class="ccform">

	<div class="ccfield-prepend">
		<span class="ccform-addon">
			<i class="fa fa-user fa-2x fa-spin"></i>
		</span>
		<input 	class="ccformfield" 
							type="text" 
							placeholder="<?=$tr["contact-name"] ?>" />
	</div>

	<div class="ccfield-prepend">
		<span class="ccform-addon">
			<i class="fa fa-envelope fa-2x"></i>
		</span>
		<input 	class="ccformfield" 
							type="text" 
							placeholder="<?=$tr["contact-email"] ?>"/>
	</div>

	<div class="ccfield-prepend">
		<span class="ccform-addon">
			<i class="fa fa-comment fa-2x"></i>
		</span>
		<textarea 
									class="ccformfield" 
									name="comments" 
									rows="8" cols="5" 
									placeholder="<?=$tr["contact-message"] ?>"></textarea>
	</div>

	<div class="ccfield-prepend no-border">
		<input 	class="ccbtn" 
							type="submit" 
							value="<?=$tr["contact-submit"] ?>" />
	</div>

</form>
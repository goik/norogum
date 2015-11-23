<?php
	include_once("inc/gzip-top.php");
	include_once("inc/function.php");
?>
<!DOCTYPE html>
	<?php 
		include_once("inc/head.php");
		include_once("inc/line-top.php");
	?>
	<body id="top" class="light-bg">
		<div class="body-top-decoration-layer"></div>
		<!-- ~~~~~~~main- ~~~~~~~-->
		<div class="main-fix-carcass-out-pad">
			<div class="main-fix-carcass">
				<div class="main-fix-carcass-trafaret">
					<div class="main-fix-carcass-trafaret-opacity">
						<?php include_once("inc/header.php"); ?>
						<?php include_once("module/unique-slider.php"); ?>
						<?php include_once("module/filter-form.php"); ?>
						<!-- ~~~~~~~main-content~~~~~~~-->
						<div class="main-content">
							<div class="main-content-pad">
								<?php include_once("module/services.php"); ?>
								<?php include_once("module/top-ad.php"); ?>
								<?php include_once("module/last-ad.php"); ?>
								<?php include_once("module/bottom-advertising.php"); ?>
							</div>
						</div>
						<!-- ~~~~~~~/main-content~~~~~~~-->
						<div class="footer-bottom-spacer"></div>
					</div>
				</div>
				<?php include_once("inc/footer.php"); ?>
			</div>
		</div>
		<!-- ~~~~~~~/main- ~~~~~~~-->
		<script type="text/javascript" charset="utf-8" src="js/all-js.php"></script>
	</body>
</html>
<?php
	include_once("inc/line-bottom.php");
	include_once("inc/gzip-bottom.php");
?>
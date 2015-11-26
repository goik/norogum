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
						<!-- ~~~~~~~main-content~~~~~~~-->
						<div class="main-content">
							<div class="main-content-pad">

										<div class="main-content-top-spacre"></div>

										<!-- main-content-title-cell -->
										<div class="main-content-title-cell">
											<h1 class="main-content-title">
												<span class="main-content-title-txt">
													<?=$tr["personal-page-title"] ?>
												</span>
											</h1>
										</div>
										<div class="decoration-line"><div class="decoration-line-fill"></div></div>
										<!-- /main-content-title-cell -->

										<?php include_once("module/personal-info.php"); ?>


										<!-- ~~~~~~~~~~~~~~~~~~-->
										<!-- ~~~~~~advt-add ~~~~~~-->
										<!-- ~~~~~~~~~~~~~~~~~~-->
										<div class="advt-add">

											<h2 class="advt-add-title">
												<span class="advt-add-title-txt">
													Ավելացնել հայտարարություն
												</span>
											</h2>

											<!-- activation-block -->
											<div class="activation-block">
												<div class="activation-block-pad">

													Ուղարկեք <span class="dark-txt">6625</span> թիվը 
													<span class="dark-txt">1025</span> կարճ 
													համարին և ակտիվացրեք Ձեր անձնական էջը

													<!-- reg-inp-row -->
													<div class="reg-inp-row fixs">
														<div class="reg-inp-row-pad">
															<label class="inp-label" for="reg-form-user-activation-code">
																<span class="inp-label-pad">
																	Ակտիվացման կոդ
																	<span class="required-fild-symbol">*</span>
																</span>
															</label>
															<div class="def-inp-bg">
																<div class="def-inp-bg-border">
																	<input 	type="text" 
																						class="def-inp" 
																						id="reg-form-user-activation-code" 
																						placeholder="" />
																</div>
															</div>
														</div>
														<span class="btn-place">
															<a href="activ2.php?lang=<?=$current_language ?>" class="orange-btn fix-btn-size">
																<span class="orange-btn-txt">
																	ԱԿՏԻՎԱՑՆԵԼ
																</span>
															</a>
														</span>
													</div>
													<!-- /reg-inp-row -->

													<!-- txt-ex -->
													<div class="txt-ex">
														Oրինակ` #45*1
													</div>
													<!-- /txt-ex -->

													<div class="advt-bottom-spacer"></div>

												</div>
											</div>
											<!-- /activation-block -->

										</div>
										<!-- ~~~~~~~~~~~~~~~~~~-->
										<!-- ~~~~~~/advt-add ~~~~~~-->
										<!-- ~~~~~~~~~~~~~~~~~~-->



































							</div>
						</div>
						<!-- ~~~~~~~/main-content~~~~~~~-->
						<div class="tab-footer-spacer"></div>
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
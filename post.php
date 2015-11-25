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
											<?=$tr["ad-title"] ?>
										</span>
									</h1>
								</div>
								<div class="decoration-line"><div class="decoration-line-fill"></div></div>
								<!-- /main-content-title-cell -->
								<?php
									include_once("module/post-short-info.php");
								?>
								<!-- ~~~~~~advt-add ~~~~~~-->
								<div class="advt-add c-height">

									<h2 class="advt-add-title">
										<span class="advt-add-title-txt">
											<?=$tr["about-service"] ?>
										</span>
									</h2>

									<!-- activation-block -->
									<div class="activation-block">
										<div class="activation-block-pad lhx">
											<?=$tr["about-service-descr"] ?>
										</div>
									</div>
									<!-- /activation-block -->

									<div class="advt-bottom-spacer-small"></div>

									<h2 class="advt-add-title">
										<span class="advt-add-title-txt">
											<?=$tr["images-for-service"] ?>
										</span>
									</h2>

									<!-- services-images-block -->
									<div class="services-images-block">
										<div class="services-images-block-pad">
											<ul class="services-images-list">
												<?php
													foreach($postImages["large"] as $index => $value){
												?>
												<li class="services-images-list-item">
													<div class="services-images-list-item-pad">
														<figure class="services-images-list-item-figure">
															<a alt="" href="img/images-services/<?=$postImages["large"][$index] ?>" class="services-images-list-item-link fancybox hta" data-fancybox-group="gallery" title="">
																<span class="services-images-list-item-link-pad">
																	<img src="img/images-services/<?=$postImages["small"][$index] ?>" class="hta images-services" alt="" title="" height="145" width="198"></span>
															</a>
														</figure>
													</div>
												</li>
												<?php
													}
												?>
											</ul>
										</div>
									</div>
									<!-- /services-images-block -->

									<?php include_once("module/file-list-and-comment.php"); ?>
								</div>
								<!-- ~~~~~~/advt-add ~~~~~~-->




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
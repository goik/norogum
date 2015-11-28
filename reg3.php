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
											<?=$tr["reg-title"] ?>
										</span>
									</h1>
								</div>
								<div class="decoration-line"><div class="decoration-line-fill"></div></div>
								<!-- /main-content-title-cell -->


								<!-- !!!!!! tab-cell !!!!!! -->
								<div class="tab-cell">
									<div class="tab-cell-pad">

										<!-- tab-cell-list -->
										<ul class="tab-cell-list">
											<li class="tab-cell-list-item current">
												<a href="#" class="tab-cell-list-item-link">
													<span class="person-icon device-icon">
														<img 	src="img/person.svg" 
																		alt="" 
																		class="person-icon-img" 
																		width="22" 
																		height="21"/>
													</span>
													<span class="tab-cell-list-item-link-txt desctop-icon">
														<?=$tr["reg-person-tab"] ?>
													</span>
												</a>
											</li>
											<li class="tab-cell-list-item">
												<a href="#" class="tab-cell-list-item-link">
													<span class="company-icon device-icon">
														<img 	src="img/company.svg" 
																		alt="" 
																		class="company-icon-img" 
																		width="27" 
																		height="24"/>
													</span>
													<span class="tab-cell-list-item-link-txt desctop-icon">
														<?=$tr["reg-person-company"] ?>
													</span>
												</a>
											</li>
										</ul>
										<!-- /tab-cell-list -->

									</div>
								</div>
								<!-- !!!!!! /tab-cell !!!!!! -->

								<!-- !!!!!! tab-content-cell !!!!!!-->
								<div class="tab-content-cell">
									<ul class="tab-content-cell-list">
										<li class="tab-content-cell-list-item">
											<?php
												include_once("module/reg3-content.php");
											?>
										</li>
										<li class="tab-content-cell-list-item">
											<?php
												include_once("module/reg3-content-company.php");
											?>
										</li>
									</ul>
								</div>
								<!-- !!!!!! /tab-content-cell !!!!!!-->

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
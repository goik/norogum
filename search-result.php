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



								<!-- main-content-title-cell -->
								<div class="main-content-title-cell">
									<h1 class="main-content-title">
										<span class="main-content-title-txt">
											<?=$tr["custom-cat"] ?>
										</span>
										<span class="main-content-sub-title-txt">
											<span class="main-content-sub-title-txt-arrow">
												<span class="first-icon-arrow-next-icon-2"></span>
											</span>
											<?=$tr["custom-sub-cat"] ?>
										</span>
									</h1>
								</div>
								<div class="decoration-line"><div class="decoration-line-fill blue-fill"></div></div>
								<!-- /main-content-title-cell -->
								<div class="inner-top-spacer"></div>
								
								<!-- ~~~~~~inner-two-col~~~~~~-->
								<div class="inner-two-col">
									<div class="inner-two-col-left">
										<div class="inner-two-col-left-pad">
											<?php include_once("module/sidebar-menu.php"); ?>
											<?php include_once("module/sidebar-adver.php"); ?>
										</div>
									</div>
									<div class="inner-two-col-right">
										<div class="inner-two-col-right-pad">
												<?php 
													$i=0;
													foreach($searchResult['title'] as $index => $value){
												?>
													<!-- ad-article -->
													<article class="ad-article w100p-article">
														<div class="ad-article-left">
															<div class="ad-article-left-pad">
																<a href="post.php?lang=<?=$current_language ?>" class="ad-article-link">
																	<span class="ad-article-link-pad">
																		<span class="relat-n3">
																			<img 	src="img/ipsum/<?=$searchResult['avatar'][$i] ?>" 
																							alt="" 
																							title="" 
																							width="115" 
																							height="115" 
																							class="hta resize-img no-empty"/>
																			<img 	src="img/article-img/empty-ad-img.png" 
																							alt="" 
																							title="" 
																							width="115" 
																							height="115" 
																							class="hta resize-img empty-img-for-size"/>
																		</span>
																	</span>
																</a>
															</div>
															<!-- rating-under-image -->
															<span class="rating-under-image">
																<span class="rating-txt">
																	<?=$tr["rating"] ?>
																</span>
																<!-- rating-star-article -->
																<span class="rating-star-article">
																	<!-- star-list -->
																	<ul class="star-list">
																		<li class="star-list-item select-star">
																			<a href="#" class="star-list-item-link">
																				<span class="star-list-item-link-txt">
																					<span class="first-icon-star-icon-1"></span>
																				</span>
																			</a>
																		</li>
																		<li class="star-list-item select-star">
																			<a href="#" class="star-list-item-link">
																				<span class="star-list-item-link-txt">
																					<span class="first-icon-star-icon-1"></span>
																				</span>
																			</a>
																		</li>
																		<li class="star-list-item select-star">
																			<a href="#" class="star-list-item-link">
																				<span class="star-list-item-link-txt">
																					<span class="first-icon-star-icon-1"></span>
																				</span>
																			</a>
																		</li>
																		<li class="star-list-item">
																			<a href="#" class="star-list-item-link">
																				<span class="star-list-item-link-txt">
																					<span class="first-icon-star-icon-1"></span>
																				</span>
																			</a>
																		</li>
																		<li class="star-list-item">
																			<a href="#" class="star-list-item-link">
																				<span class="star-list-item-link-txt">
																					<span class="first-icon-star-icon-1"></span>
																				</span>
																			</a>
																		</li>
																	</ul>
																	<!-- /star-list -->
																</span>
																<!-- rating-star-article -->
															</span>
															<!-- /rating-under-image -->
														</div>
														<div class="ad-article-right">
															<div class="ad-article-right-pad n-pad12">
																<div class="post-date">
																	<div class="post-date-cell">
																		<?=$tr["add"] ?> <u><?=$searchResult["date"][$i] ?></u>
																	</div>
																</div>
																<!-- ad-article-txt n-size-width -->
																<div class="ad-article-txt n-size-width">
																	<h2 class="art-title">
																		<a href="post.php?lang=<?=$current_language ?>">
																			<?=$searchResult["title"][$i] ?>
																		</a>
																	</h2>
																	<div class="user-name-field">
																		<div class="user-name-field-pad">
																			<span class="user-name-field-fix">
																				<a href="#">
																					<?=$searchResult["author"][$i] ?>
																				</a>
																			</span>
																		</div>
																	</div>
																	<span class="city">
																		<a href="#">
																			<?=$searchResult["region"][$i] ?>
																		</a>
																	</span>
																	<div class="ad-article-txt-int">
																		<?=$searchResult["description"][$i] ?>
																	</div>
																</div>
																<!-- /ad-article-txt n-size-width -->
																<!-- ad-article-other-element -->
																<div class="ad-article-other-element n-pad-x50">
																	<a href="post.php?lang=<?=$current_language ?>" class="read-more-link">
																		<span class="read-more-link-txt">
																					<?=$tr["read-more"] ?>
																		</span>
																	</a>
																</div>
																<!-- /ad-article-other-element -->
																<!-- article-img-place -->
																<div class="article-img-place">
																	<ul class="other-image-list">
																		<?php
																			$image_index=0;
																			foreach($searchResult["images"][$i] as $index => $value){
																		?>
																		<li class="other-image-list-item">
																			<div class="other-image-list-item-pad">
																				<span class="ad-article-link">
																					<span class="ad-article-link-pad">
																						<span class="relat-n3">
																							<img 	src="img/ipsum/<?=$searchResult["images"][$i][$index]?>" 
																											alt="" 
																											title="" 
																											width="115" 
																											height="115" 
																											class="hta resize-img no-empty"/>
																							<img 	src="img/article-img/empty-ad-img.png" 
																											alt="" 
																											title="" 
																											width="115" 
																											height="115" 
																											class="hta resize-img empty-img-for-size"/>
																						</span>
																					</span>
																				</span>
																			</div>
																		</li>
																		<?php } ?>
																	</ul>
																</div>
																<!-- /article-img-place -->
															</div>
														</div>
													</article>
													<!-- /ad-article -->
											<?php
													$i++;
												}
											?>
											<?php include_once("module/pagination.php"); ?>
										</div>
									</div>
								</div>
								<!-- ~~~~~~/inner-two-col~~~~~~-->




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
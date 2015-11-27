										<!-- main-content-title-cell -->
										<div class="main-content-title-cell">
											<h1 class="main-content-title">
												<span class="main-content-title-txt">
													<?=$tr["module-top-ad-title"] ?>
												</span>
											</h1>
										</div>
										<div class="decoration-line"><div class="decoration-line-fill"></div></div>
										<!-- /main-content-title-cell -->



										<!--~~~~~~ top-info ~~~~~~-->
										<section class="top-info-section">
											<div class="top-info-section-left">
												<div class="top-info-section-left-pad">
													<?php foreach($topAds["descr"] as $index => $value){ ?>
													<article class="ad-article">
														<div class="ad-article-left">
															<div class="ad-article-left-pad">
																<a href="post.php?lang=<?=$current_language ?>" class="ad-article-link">
																	<span class="ad-article-link-pad">
																		<span class="relat-n2">
																			<img 	src="img/article-img/<?=$topAds["img"][$index] ?>" 
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
														</div>
														<div class="ad-article-right">
															<div class="ad-article-right-pad">
																<div class="ad-article-txt">
																	<a href="post.php?lang=<?=$current_language ?>">
																		<?=$topAds["descr"][$index] ?>
																	</a>
																</div>
																<!-- user-name-field -->
																<div class="user-name-field">
																	<div class="user-name-field-pad">
																		<span class="user-name-field-fix">
																			<a href="#">
																				<?=$topAds["author"][$index] ?>
																			</a>
																		</span>
																	</div>
																</div>
																<!-- /user-name-field -->
																<!-- ad-article-other-element -->
																<div class="ad-article-other-element">
																	<a href="post.php?lang=<?=$current_language ?>" class="read-more-link">
																		<span class="read-more-link-txt">
																			<?=$tr["read-more"] ?>
																		</span>
																	</a>
																	<span class="rating-star-article">
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
																	</span>
																	<span class="ad-article-date"><?=$topAds["date"][$index] ?></span>
																	<!-- ad-article-date -->

																</div>
																<!-- /ad-article-other-element -->

															</div>
														</div>
													</article>
													<?php } ?>
												</div>
											</div>
											<div class="top-info-section-right">
												<div class="top-info-section-right-pad">

													<div class="ad-right-sidebar-place">
														<a href="" class="ad-right-sidebar-link">
															<img 	src="img/ad-right-sidebar.png" 
																			alt="" 
																			title="" 
																			width="221" 
																			height="400" 
																			class="hta resize-img"/>
														</a>
													</div>

												</div>
											</div>
										</section>
										<!--~~~~~~ /top-info ~~~~~~-->
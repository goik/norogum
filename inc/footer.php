<!-- ~~~~~~~~~~~~~~~~~~-->
<!-- ~~~~~~~footer~~~~~~~-->
<!-- ~~~~~~~~~~~~~~~~~-->
	<footer class="footer-fix">
		<div class="footer-fix-inner">
			<div class="footer-fix-pad">
				<div class="footer-top-line"></div>
				<!-- footer-triple-cell -->
				<div class="footer-triple-cell">
					<div class="footer-triple-cell-center">
						<div class="footer-triple-cell-center-pad">
							<!-- footer-nav -->
							<nav class="footer-nav">
								<ul class="footer-menu-list">
									<?php foreach($mainMenu["title"] as $index => $value){ ?>
									<li class="footer-menu-list-item"><!--add  current-->
										<a href='<?=$mainMenu["url"][$index] ?>?lang=<?=$current_language ?>' class="footer-menu-list-item-link">
											<span class="footer-menu-list-item-link-txt">
												<?=$mainMenu["title"][$index] ?>
											</span>
										</a>
									</li>
									<?php } ?>
								</ul>
							</nav>
							<!-- /footer-nav -->
						</div>
					</div>
					<div class="footer-triple-cell-left">
						<div class="footer-triple-cell-left-pad">
							<a href="/" class="footer-logo" >
								<span class="footer-logo-svg-cell">
									<img 	src="img/norogum.am-logo.svg" 
													alt="norogum.am" 
													title="norogum.am" 
													class="footer-logo-img hta" 
													width="98" 
													height="93" />
								</span>
							</a>
						</div>
					</div>
					<div class="footer-triple-cell-right">
						<div class="footer-triple-cell-right-pad">
							<ul class="social-icon-list">
								<li class="social-icon-list-item">
									<div class="social-icon-list-item-pad">
										<a href="#" class="social-icon-list-item-link facebook-icon-cell">
											<span class="first-icon-facebook-icon-1 fsx1"></span>
										</a>
									</div>
								</li>
								<li class="social-icon-list-item">
									<div class="social-icon-list-item-pad">
										<a href="#" class="social-icon-list-item-link twitter-icon-cell">
											<span class="first-icon-twitter-icon-1 fsx1"></span>
										</a>
									</div>
								</li>
								<li class="social-icon-list-item">
									<div class="social-icon-list-item-pad">
										<a href="#" class="social-icon-list-item-link googleplus-icon-cell">
											<span class="first-icon-google-plus-icon-1 fsx1"></span>
										</a>
									</div>
								</li>
								<li class="social-icon-list-item">
									<div class="social-icon-list-item-pad">
										<a href="#" class="social-icon-list-item-link youtube-icon-cell">
											<span class="first-icon-youtube-icon-1 fsx1"></span>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- footer-triple-cell -->
				<!-- copy-right-cell -->
				<div class="copy-right-cell">
					<div class="copy-right-cell-pad">
						<div class="copy-right-cell-txt">
							<?=$tr["copyRight"] ?>
						</div>
					</div>
				</div>
				<!-- /copy-right-cell -->
			</div>
	</div>
</footer>
<!-- ~~~~~~~~~~~~~~~~~~-->
<!-- ~~~~~~~footer~~~~~~~-->
<!-- ~~~~~~~~~~~~~~~~~-->
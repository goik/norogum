 ~~~~~~~header~~~~~~~-->
<header class="header-fix">
	<div class="header-fix-left">
		<div class="header-fix-left-pad">
			<a href="index.php?lang=<?=$current_language ?>" class="header-logo hta" title="norogum.am">
				<span class="header-logo-svg-cell">
					<img 	src="img/norogum.am-logo.svg" 
									alt="norogum.am" 
									title="norogum.am" 
									width="161" 
									height="153" 
									class="header-logo-img hta" />
				</span>
			</a>
		</div>
	</div>
	<div class="header-fix-right">
		<div class="header-fix-right-pad">
			<!-- lang-cell -->
			<div class="lang-cell-out-pad">
				<div class="lang-cell">
					<ul class="lang-cell-list">
					<?php foreach($languages as $index => $value){ ?>
						<li class="lang-cell-list-item <?php if ($current_language==$index){echo "current";} ?>">
							<a href="?lang=<?=$index ?>" class="lang-cell-list-item-link">
								<span class="lang-cell-list-item-link-txt">
									<?=$languages[$index] ?> 
								</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<!-- /lang-cell -->
			<!-- ~~~~~~~~~~~~~~ -->
			<!-- ~~~~~~login~~~~~~ -->
			<!-- ~~~~~~~~~~~~~~ -->
			<div class="login-cell-out-pad">
				<div class="login-cell">
					<ul class="login-cell-list">
						<li class="login-cell-list-item h-z-index w135">
							<div class="login-cell-list-item-pad">
								<a href="reg1.php?lang=<?=$current_language ?>" class="registration-btn">
									<span class="registration-btn-txt">
										<?=$tr["registration"] ?>
									</span>
								</a>
							</div>
						</li>
						<li class="login-cell-list-item js-drop-down-selector">
							<div class="login-cell-list-item-pad">
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--~~~~~~~~~~~~~~~enter-btn~~~~~~~~~~~~~~~~~~-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<div class="enter-btn">
									<span class="avatar-place">
										<span class="avatar-img-cell">
											<img src="img/article-img/9.jpg" alt="" title="" class="small-avatar front-img" width="38" />
											<span class="empty-avatar"></span>
										</span>
									</span>
									<span class="enter-btn-txt">
										<?=$tr["enter"] ?>
									</span>
									<!--======login-drop-down====== -->
									<div class="login-drop-down">
										<div class="login-drop-down-top"></div>
										<div class="login-drop-down-bottom">
											<div class="login-drop-down-bottom-pad">

												<!-- form-list -->
												<ul class="form-list">
													<li class="form-item">
														<?php include_once("module/form-login.php") ?>
													</li>
													<li class="form-item">
														<?php include_once("module/form-forgot.php") ?>
													</li>
												</ul>
												<!-- form-list -->

											</div>
										</div>
									</div>
									<!--======/login-drop-down====== -->
								</div>
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
								<!--~~~~~~~~~~~~~~~/enter-btn~~~~~~~~~~~~~~~~~~-->
								<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!-- ~~~~~~~~~~~~~~ -->
			<!-- ~~~~~~/login~~~~~~ -->
			<!-- ~~~~~~~~~~~~~~ -->
			<div class="gray-line"></div>

		</div>
	</div>
	<div class="header-fix-center">
		<div class="header-fix-center-pad">
			<!-- main-nav -->
			<nav class="main-nav">
				<ul class="main-nav-menu-list">
					<?php foreach($mainMenu["title"] as $index => $value){ ?>
					<li class="main-nav-menu-list-item"><!--add current-->
						<a href='<?=$mainMenu["url"][$index] ?>?lang=<?=$current_language ?>' class="main-nav-menu-list-item-link">
							<span class="main-nav-menu-list-item-link-txt">
								<?=$mainMenu["title"][$index] ?>
							</span>
						</a>
					</li>

					<?php } ?>
				</ul>
			</nav>
			<!-- /main-nav -->
		</div>
	</div>
</header>
<!-- ~~~~~~~/header~~~~~~~
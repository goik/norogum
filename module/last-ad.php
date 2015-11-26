<!-- main-content-title-cell -->
<div class="main-content-title-cell">
	<h1 class="main-content-title">
		<span class="main-content-title-txt">
			<?=$tr["module-last-ad-title"] ?>
		</span>
	</h1>
</div>
<!-- /main-content-title-cell -->

<!-- decoration-line -->
<div class="decoration-line"><div class="decoration-line-fill"></div></div>
<!-- /decoration-line -->
										
<!-- ~~~~~~last-ad-section~~~~~~ -->
<section class="last-ad-section">
	<div class="last-ad-section-left">
		<div class="last-ad-section-left-pad">
			<ul class="info-list">
				<?php for ($i=0; $i<=3; $i++){ ?>
				<li class="info-list-item">
					<article class="info-list-item-article">
						<img 	src="img/<?=$lastAd["img"][$i] ?>" 
										alt="" 
										title="" 
										width="30" 
										height="29" 
										class="hta ico-position" />
						<div class="info-list-item-article-descr">
							<a href="post.php?lang=<?=$current_language ?>" class="info-list-item-article-descr-link">
								<?=$i ?> <?=$lastAd["descr"][$i] ?>
							</a>
						</div>
						<div class="info-list-item-article-author">
							<?=$lastAd["author"][$i] ?>
						</div>
					</article>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<div class="last-ad-section-middle">
		<div class="last-ad-section-middle-pad">
			<ul class="info-list">
				<?php for ($i=4; $i<=7; $i++){ ?>
				<li class="info-list-item">
					<article class="info-list-item-article">
						<img 	src="img/<?=$lastAd["img"][$i] ?>" 
										alt="" 
										title="" 
										width="30" 
										height="29" 
										class="hta ico-position" />
						<div class="info-list-item-article-descr">
							<a href="post.php?lang=<?=$current_language ?>" class="info-list-item-article-descr-link">
								<?=$i ?> <?=$lastAd["descr"][$i] ?>
							</a>
						</div>
						<div class="info-list-item-article-author">
							<?=$lastAd["author"][$i] ?>
						</div>
					</article>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="last-ad-section-right">
		<div class="last-ad-section-right-pad">
			<ul class="info-list">
				<?php for ($i=8; $i<=11; $i++){ ?>
				<li class="info-list-item">
					<article class="info-list-item-article">
						<img 	src="img/<?=$lastAd["img"][$i] ?>" 
										alt="" 
										title="" 
										width="30" 
										height="29" 
										class="hta ico-position" />
						<div class="info-list-item-article-descr">
							<a href="post.php?lang=<?=$current_language ?>" class="info-list-item-article-descr-link">
								<?=$i ?> <?=$lastAd["descr"][$i] ?>
							</a>
						</div>
						<div class="info-list-item-article-author">
							<?=$lastAd["author"][$i] ?>
						</div>
					</article>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</section>
<!-- ~~~~~~last-ad-section~~~~~~ -->

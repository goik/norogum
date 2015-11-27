main-content-title-cell -->
<div class="main-content-title-cell">
	<!-- t-two-col -->
	<div class="t-two-col">
		<div class="t-two-col-left">

			<h1 class="main-content-title">
				<span class="main-content-title-txt">
					<?=$tr["module-last-ad-title"] ?>
				</span>
			</h1>

		</div>
		<div class="t-two-col-right">
			<div class="t-two-col-right-pad">

				<label class="last-or-random">
					<span class="last-or-random-cell">
						<span class="last-or-random-cell-txt">
							ՎԵՐՋԻՆ
						</span>
					</span>
					<input type="checkbox" class="last-or-random-check" />
					<span class="last-or-random-cell">
						<span class="b-track">
							<span class="b-track-face"></span>
						</span>
					</span>
					<span class="last-or-random-cell">
						<span class="last-or-random-cell-txt">
							ՊԱՏԱՀԱԿԱՆ
						</span>
					</span>
				</label>

			</div>
		</div>
	</div>
	<!-- /t-two-col -->
</div>
<div class="decoration-line"><div class="decoration-line-fill"></div></div>
<!-- /main-content-title-cell -->
										
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
<!-- ~~~~~~last-ad-section~~~~~~
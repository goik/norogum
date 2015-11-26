main-content-title-cell -->
<div class="main-content-title-cell">
	<h1 class="main-content-title">
		<span class="main-content-title-txt">
			<?=$tr["module-services-title"] ?>
		</span>
	</h1>
</div>
<div class="decoration-line"><div class="decoration-line-fill blue-fill"></div></div>
<!-- /main-content-title-cell -->

<!-- services-slider-cell -->
<div class="services-slider-cell">



	<!-- service-all-list -->
	<div class="service-all-list" style="display:none">
		<ul class="service-all-list-ul">
			<li class="service-all-list-ul-item">

				<div class="title-cell">

				</div>


			</li>
		</ul>
	</div>
	<!-- /service-all-list -->



	<!-- services-slider-top-spacer -->
	<div class="services-slider-top-spacer"></div>
	<a href="#" class="services-arrow services-slider-arrow-prev"><span class="first-icon-arrow-prev-icon-1"></span></a>
	<a href="#" class="services-arrow services-slider-arrow-next"><span class="first-icon-arrow-next-icon-1"></span></a>
	<!--~~~~~ services-slider ~~~~~-->
	<div class="services-slider">
		<?php foreach($servicesMainCat as $index => $value){ ?>
		<!--services-slider-item-->
		<div class="services-slider-item item">
			<div class="services-slider-item-pad">
				<a href="#" class="service-icon-place">
					<span class="service-icon-place-img">
						<span class="service-icon-place-img-pad">
							<span class="<?=$servicesMainCatIcon[$index] ?>"></span>
						</span>
					</span>
					<span class="service-icon-place-txt">
						<span class="service-icon-place-txt-inner">
							<?=$servicesMainCat[$index] ?>
						</span>
					</span>
				</a>
			</div>
		</div>
		<!--/services-slider-item-->
		<?php } ?>
	</div>
	<!--~~~~~ services-slider ~~~~~-->
	<div class="services-slider-bottom-spacer"></div>
</div>
<!-- /services-slider-cell
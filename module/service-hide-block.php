<!--******service-block-list******-->
<div class="services-block-list-cell-ABS">
	<div class="services-block-list-cell">

		<span class="close-services-block-list-cell">
			<img 	src="img/close.svg" alt="" title="" width="20" height="20"/>
		</span>

		<ul class="services-block-list">
			<?php 
				$i=0;
				foreach($servicesMainCat as $index => $value){
			?>
			<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<li class="services-block-list-item">
				<!-- services-block-title -->
				<div class="services-block-title">
					<div class="services-block-title-pad">
						<spn class="services-block-title-txt">
							<img src="img/service-icon-<?=($i+1) ?>.svg" alt="" title="" width="25" class="service-list-icon-img" />
							<?=$servicesMainCat[$index] ?>
						</spn>
					</div>
				</div>
				<!-- /services-block-title -->
				<!-- services-block-list-item-pad -->
				<div class="services-block-list-item-pad">
					<!-- ib  -->
					<div class="ib">
						<ul class="block-checkbox-list">
							<?php foreach($servicesMainSubCat[$i] as $index => $value){ ?>
							<li class="block-checkbox-list-item">
								<label class="block-checkbox-list-item-label">
									<span class="block-checkbox-list-item-sys">
										<input type="checkbox" class="default-checkbox" />
										<span class="block-checkbox-list-item-sys-custom">
											<span class="first-icon-check"></span>
										</span>
									</span>
									<span class="block-checkbox-list-item-label-txt">
										<?=$servicesMainSubCat[$i][$index] ?>
									</span>
								</label>
							</li>
							<?php } ?>
						</ul>
					</div>
					<!-- /ib -->
				</div>
				<!-- services-block-list-item-pad -->
			</li>
			<!-- ~~~~~~~~~~~~~~~~~~~/~~~~~~~~~~~~~~~~~~~-->
			<?php
				$i++;
			 } 
			 ?>
		</ul>
	</div>
</div>
<!--******/service-block-list******-->
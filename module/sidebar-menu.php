<h2 class="sidebar-title">
	<span class="sidebar-title-pad">
		<?=$tr["sidebar-title-service"] ?>
	</span>
</h2>

<!-- sidebar-menu -->
<div class="sidebar-menu">
	<ul class="sidebar-menu-list">
		<?php 
			$i=0;
			foreach($servicesMainCat as $index => $value){
		?>
		<li class="sidebar-menu-list-item">
			<a href="#" class="sidebar-menu-list-item-link">
				<span class="sidebar-menu-list-item-link-txt">
					<span class="sidebar-menu-arrow">
						<span class="first-icon-arrow-next-icon-2"></span>
					</span>
					<?=$servicesMainCat[$index] ?>
				</span>
			</a>
			<div class="sub-cell">
				<div class="sub-cell-height-detect">
					<ul class="sidebar-menu-sub-list">
						<?php foreach($servicesMainSubCat[$i] as $index => $value){ ?>
						<li class="sidebar-menu-sub-list-item"><!--add current-->
							<a href="#" class="sidebar-menu-sub-list-item-link">
								<span class="sidebar-menu-sub-list-item-link-txt">
									<?=$servicesMainSubCat[$i][$index] ?>
								</span>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</li>
		<?php } ?>
	</ul>
</div>
<!-- sidebar-menu -->
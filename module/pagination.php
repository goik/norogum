<!-- pagination -->
<div class="pagination">
	<div class="pagination-pad">
		<ul class="pagination-list">
			<li class="pagination-list-item">
				<a href="#" class="pagination-list-item-link">
					<span class="pagination-list-item-link-txt">
						&nbsp;
						<span class="pagination-arrow pagination-arrow-prev">
							<span class="first-icon-arrow-prev-icon-1"></span>
						</span>
					</span>
				</a>
			</li>
			<?php for ($i=0; $i<=3; $i++){ ?>
			<li class="pagination-list-item"><!--add current-->
				<a href="#" class="pagination-list-item-link">
					<span class="pagination-list-item-link-txt">
						<?=($i+1) ?>
					</span>
				</a>
			</li>
			<?php } ?>
			<li class="pagination-list-item">
				<a href="#" class="pagination-list-item-link">
					<span class="pagination-list-item-link-txt">
						&nbsp;
						<span class="pagination-arrow pagination-arrow-next">
							<span class="first-icon-arrow-next-icon-2"></span>
						</span>
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>
<!-- /pagination -->
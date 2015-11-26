form-element-two-column -->
<div class="form-element-two-column">
	<div class="form-element-two-column-left">
		<div class="form-element-two-column-left-pad">
			<form class="registration-form" method="post" actiopn="">


				<!-- reg-form-two-col -->
				<div class="reg-form-two-col">
					<div class="reg-form-two-col-left">
						<div class="reg-form-two-col-left-pad">

							<div class="top-spacer-in-tab"></div>

							<!-- two-col -->
							<div class="two-col">
								<div class="two-col-left">
									<div class="two-col-left-pad">

										<!-- reg-inp-row -->
										<div class="reg-inp-row disabled-input">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-phone-numb">
													<span class="inp-label-pad">
														<?=$tr["registration-phone-step-2"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input class="def-inp" id="reg-form-user-phone-numb" placeholder="" value="+374 55 21 12 25" disabled="disabled" type="text"></div>
												</div>
											</div>
											<span class="btn-place">
												<a href="#" class="green-btn fix-btn-size">
													<span class="green-btn-txt">
														<?=$tr["registration-send-sms"] ?>
													</span>
												</a>
											</span>
										</div>
										<!-- /reg-inp-row -->

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-verification-code">
													<span class="inp-label-pad">
														<?=$tr["registration-confirm-code-step-2"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input class="def-inp" id="reg-form-user-verification-code" placeholder="" type="text"></div>
												</div>
											</div>
											<span class="btn-place">
												<a href="reg3.php?lang=<?=$current_language ?>" class="orange-btn fix-btn-size">
													<span class="orange-btn-txt">
														<?=$tr["registration-confirm-btn"] ?>
													</span>
												</a>
											</span>
										</div>
										<!-- /reg-inp-row -->

									</div>
								</div>
								<div class="two-col-right">
									<div class="two-col-right-pad"></div>
								</div>
							</div>
							<!-- two-col -->

						</div>
					</div>
					<div class="reg-form-two-col-right">
						<div class="reg-form-two-col-right-pad">


						</div>
					</div>
				</div>
				<!-- /reg-form-two-col -->



			</form>
		</div>
	</div>
	<div class="form-element-two-column-right">


		<!-- step-cell -->
		<div class="step-cell">
			<span class="step-txt"><?=$tr["registration-step-txt"] ?></span>
			<div class="step-cell-round step-orange">
				<div class="step-numb">
					2
				</div>
			</div>
		</div>
		<!-- /step-cell -->



	</div>
</div>
<!-- /form-element-two-column
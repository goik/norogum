<!-- form-element-two-column -->
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
										<div class="reg-inp-row error-field">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-name">
													<span class="inp-label-pad">
														<?=$tr["registration-name"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input 	type="text" 
																			class="def-inp" 
																			id="reg-form-user-name" 
																			placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row -->

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-last-name">
													<span class="inp-label-pad">
														<?=$tr["registration-last-name"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input 	type="text" 
																			class="def-inp" 
																			id="reg-form-user-last-name" 
																			placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row -->

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-phone-number">
													<span class="inp-label-pad">
														<?=$tr["registration-phone"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input 	type="text" 
																			class="def-inp" 
																			id="reg-form-user-phone-number" 
																			placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row -->

									</div>
								</div>
								<div class="two-col-right">
									<div class="two-col-right-pad">

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-email">
													<span class="inp-label-pad">
														<?=$tr["registration-email"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input 	type="text" 
																			class="def-inp" 
																			id="reg-form-user-email" 
																			placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row -->

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-password">
													<span class="inp-label-pad">
														<?=$tr["registration-password"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input 	type="password" 
																			class="def-inp" 
																			id="reg-form-user-password" 
																			placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row -->

										<!-- reg-inp-row -->
										<div class="reg-inp-row">
											<div class="reg-inp-row-pad">
												<label class="inp-label" for="reg-form-user-re-password">
													<span class="inp-label-pad"> 
														<?=$tr["registration-re-password"] ?>
														<span class="required-fild-symbol">*</span>
													</span>
												</label>
												<div class="def-inp-bg">
													<div class="def-inp-bg-border">
														<input type="password" class="def-inp" id="reg-form-user-re-password" placeholder="" />
													</div>
												</div>
											</div>
										</div>
										<!-- /reg-inp-row --> 


									</div>
								</div>
							</div>
							<!-- /two-col -->

						</div>
					</div>
					<div class="reg-form-two-col-right">
						<div class="reg-form-two-col-right-pad">

							<div class="top-spacer-in-tab"></div>

							<!-- reg-inp-row -->
							<div class="reg-inp-row">
								<div class="reg-inp-row-pad">

									<label class="inp-label" for="reg-form-user-captcha-code">
										<span class="inp-label-pad">
											<?=$tr["registration-captcha"] ?>
											<span class="required-fild-symbol">*</span>
										</span>
									</label>

									<!-- captcha-image-cell -->
									<div class="captcha-image-cell">
										<div class="captcha-image-cell-pad">
											<img 	src="img/captcha-img.jpg" 
															alt="" 
															title="" 
															class="captcha-img" 
															width="120" 
															height="49" />
										</div>
									</div>
									<!-- /captcha-image-cell -->

									<!-- def-inp-bg -->
									<div class="def-inp-bg">
										<div class="def-inp-bg-border">
											<input 	type="text" 
																class="def-inp" 
																id="reg-form-user-captcha-code" 
																placeholder="" />
										</div>
									</div>
									<!-- /def-inp-bg -->
									<div class="x-spacer"></div>
									<!-- orange-btn -->
									<a href="reg2.php?lang=<?=$current_language ?>" class="orange-btn">
										<span class="orange-btn-txt">
											<?=$tr["registration-next"] ?>
										</span>
									</a>
									<!-- orange-btn -->

								</div>
							</div>
							<!-- /reg-inp-row -->
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
			<div class="step-cell-round step-green">
				<div class="step-numb">
					1
				</div>
			</div>
		</div>
		<!-- /step-cell -->

	</div>
</div>
<!-- /form-element-two-column -->
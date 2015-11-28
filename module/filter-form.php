								<!-- ~~~~~~filter-form~~~~~~ -->
								<section class="filter-form">
									<div class="filter-form-pad">
										<div class="filter-form-platform">
											<div class="filter-form-platform-pad">

												<!-- filter-form-platform-two-col -->
												<div class="filter-form-platform-two-col">
													<div class="filter-form-platform-two-col-left">
														<div class="filter-form-platform-two-col-left-long">
															<div class="filter-form-platform-two-col-left-long-pad">

																<!-- drop-down-custom-select-box -->
																<div class="drop-down-custom-select-box-cell">

																	<div class="custom-select-box">
																		<div class="custom-select-box-left">
																			<div class="custom-select-box-left-pad">
																				<span class="custom-select-box-result">
																					<span class="custom-select-box-result-fix">
																						<?php /*$tr["custom-select-box-title"]*/?>
																						 <select>
																							<?php 
																								$i=0;
																								foreach($servicesMainCat as $index => $value){
																							?>
																							  <optgroup label="<?=$servicesMainCat[$index] ?>">
																							  <?php foreach($servicesMainSubCat[$i] as $index => $value){ ?>
																							    <option value="<?=$servicesMainSubCat[$i][$index] ?>"><?=$servicesMainSubCat[$i][$index] ?></option>
																							    <?php } ?>
																							  </optgroup>
																								<?php
																							$i++;
																							} 
																							?>
																						</select> 
																					</span>
																				</span>
																			</div>
																		</div>
																		<div class="custom-select-box-right">
																			<div class="custom-select-box-right-pad">
																				<div class="custom-select-box-arrow">
																					<span class="first-icon-arrow-bottom-icon-1"></span>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>
																<!-- drop-down-custom-select-box -->
																<div class="x-spacer-select"></div>

																<span class="inline-select-box-cell">
																	<!-- drop-down-custom-select-box -->
																	<div class="drop-down-custom-select-box-cell">
																		<div class="custom-select-box">
																			<div class="custom-select-box-left">
																				<div class="custom-select-box-left-pad">
																					<span class="custom-select-box-result">
																						<span class="custom-select-box-result-fix">
																							<select>
																					        <option value="5 бальные">5 бальные</option>
																					        <option value="4 бальные">4 бальные</option>
																					        <option value="3 бальные">3 бальные</option>
																					        <option value="2 бальные">2 бальные</option>
																					        <option value="1 бальные">1 бальные</option>
																					    </select>
																						</span>
																					</span>
																				</div>
																			</div>
																			<div class="custom-select-box-right">
																				<div class="custom-select-box-right-pad">
																					<div class="custom-select-box-arrow">
																						<span class="first-icon-arrow-bottom-icon-1"></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- drop-down-custom-select-box -->
																</span>

																<span class="inline-select-box-cell">
																	<!-- drop-down-custom-select-box -->
																	<div class="drop-down-custom-select-box-cell">
																		<div class="custom-select-box">
																			<div class="custom-select-box-left">
																				<div class="custom-select-box-left-pad">
																					<span class="custom-select-box-result">
																						<span class="custom-select-box-result-fix">
																							<select>
																								<?php foreach($region_array as $index => $value) { ?>
																					        <option value="<?=$region_array[$index]?>"><?=$region_array[$index]?></option>
																								<?php } ?>
																					    </select>
																						</span>
																					</span>
																				</div>
																			</div>
																			<div class="custom-select-box-right">
																				<div class="custom-select-box-right-pad">
																					<div class="custom-select-box-arrow">
																						<span class="first-icon-arrow-bottom-icon-1"></span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- drop-down-custom-select-box -->
																</span>

															</div>
														</div>
														<div class="filter-form-platform-two-col-left-short">
															<div class="filter-form-platform-two-col-left-short-pad">

																<!-- drop-down-custom-select-box -->
																<div class="drop-down-custom-select-box-cell">
																	<div class="custom-select-box">
																		<div class="custom-select-box-left">
																			<div class="custom-select-box-left-pad">
																				<span class="custom-select-box-result">
																					<span class="custom-select-box-result-fix">
																						<select>
																				        <option value="ФИЗ.ЛИЦО">ФИЗ.ЛИЦО</option>
																				        <option value="ЮР.ЛИЦО">ЮР.ЛИЦО</option>
																				    </select>
																					</span>
																				</span>
																			</div>
																		</div>
																		<div class="custom-select-box-right">
																			<div class="custom-select-box-right-pad">
																				<div class="custom-select-box-arrow">
																					<span class="first-icon-arrow-bottom-icon-1"></span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- drop-down-custom-select-box -->

																<div class="x-spacer-select"></div>

																<!-- custom-style-checkbox-cell -->
																<div class="custom-style-checkbox">
																	<ul class="custom-style-checkbox-list">
																		<li class="custom-style-checkbox-list-item">
																			<div class="custom-style-checkbox-list-item-pad">
																				<label class="custom-style-checkbox-label">
																					<input type="checkbox" class="style-default-checkbox"/>
																					<span class="style-check-track">
																						<span class="style-check-track-pad">
																							<span class="style-check-face"></span>
																						</span>
																					</span>
																					<span class="label-txt">
																						<?=$tr["only-img"] ?>
																					</span>
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
																<!-- /custom-style-checkbox-cell -->

															</div>
														</div>
													</div>
													<div class="filter-form-platform-two-col-right">
														<div class="filter-form-platform-two-col-right-pad">

															<!-- reg-inp-row -->
															<div class="reg-inp-row">
																<div class="reg-inp-row-pad">
																	<div class="def-inp-bg">
																		<div class="def-inp-bg-border">
																			<input 	type="text" 
																								class="def-inp" 
																								placeholder="" />
																		</div>
																	</div>
																</div>
																<span class="btn-place n-position n-right">
																	<a href="search-result.php" class="blue-btn">
																		<span class="blue-btn-txt">
																			<span class="first-icon-search-icon-1"></span>
																		</span>
																	</a>
																</span>

																<!-- example-txt -->
																<div class="example-txt">
																	<div class="example-txt-pad">
																		<?=$tr["example"] ?>
																	</div>
																</div>
																<!-- /example-txt -->

																<!-- clear-btn-cell -->
																<div class="clear-btn-cell">
																	<div class="clear-btn-cell-pad">
																		<a href="#" class="clear-btn">
																			<span class="clear-btn-txt">
																				<?=$tr["form-clear"] ?>
																			</span>
																		</a>
																	</div>
																</div>
																<!-- clear-btn-cell -->


															</div>
															<!-- /reg-inp-row -->

														</div>
													</div>
												</div>
												<!-- /filter-form-platform-two-col -->



											</div>
										</div>
									</div>
								</section>
								<!-- ~~~~~~/filter-form~~~~~~ -->
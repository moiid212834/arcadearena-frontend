<?php include 'templates/template-top.php'?>
<!-- Content -->

<div class="col">
	<div class="row flex-wrap">
		<div class="col-12 mb-3">
			<div class="card">
				<div class="card-body">
					<div class="e-profile">
						<div class="row">
							<div class="col-12 col-sm-auto mb-3">
								<div class="mx-auto" style="width: 140px;">
									<div class="d-flex justify-content-center align-items-center rounded"
										style="height: 140px; background-color: rgb(233, 236, 239);">
										<span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
									</div>
								</div>
							</div>
							<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
								<div class="text-center text-sm-left mb-2 mb-sm-0">
									<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">
										Roberto Carlos</h4>
									<p class="mb-0">@roberto</p>
									<div class="text-muted"><small>Last seen
											2 hours ago</small></div>
									<div class="mt-2">
										<button class="btn btn-dark" type="button">
											<i class="fa fa-fw fa-camera"></i>
											<span>Change Photo</span>
										</button>
									</div>
								</div>
								<div class="text-center text-sm-right">
									<span class="badge badge-secondary">administrator</span>
									<div class="text-muted"><small>Joined 09
											Dec 2017</small></div>
								</div>
							</div>
						</div>
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="active nav-link" id="nav-settings-tab" data-toggle="tab"
									href="#nav-settings" role="tab" aria-controls="nav-settings"
									aria-selected="true">Settings</a></li>
							<li class="nav-item"><a class="nav-link" id="nav-home-tab" data-toggle="tab"
									href="#nav-home" role="tab" aria-controls="nav-home"
									aria-selected="true">Accounts</a></li>
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="nav-settings" role="tabpanel"
								aria-labelledby="nav-settings-tab">
								<form class="form" novalidate="">
									<div class="row">
										<div class="col">
											<div class="row">
												<div class="col">
													<div class="form-group">
														<label>Full
															Name</label>
														<input class="form-control" type="text" name="name"
															placeholder="John Smith" value="John Smith">
													</div>
												</div>
												<div class="col">
													<div class="form-group">
														<label>Username</label>
														<input class="form-control" type="text" name="username"
															placeholder="johnny.s" value="johnny.s">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="form-group">
														<label>Email</label>
														<input class="form-control" type="text"
															placeholder="user@example.com">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<div class="form-group">
														<label>About</label>
														<textarea class="form-control" rows="5"
															placeholder="My Bio"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12 col-sm-6 mb-3">
											<div class="mb-2"><b>Change
													Password</b></div>
											<div class="row">
												<div class="col">
													<div class="form-group">
														<label>Current
															Password</label>
														<input class="form-control" type="password"
															placeholder="••••••">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="form-group">
														<label>New
															Password</label>
														<input class="form-control" type="password"
															placeholder="••••••">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="form-group">
														<label>Confirm <span
																class="d-none d-xl-inline">Password</span></label>
														<input class="form-control" type="password"
															placeholder="••••••">
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-sm-5 offset-sm-1 mb-3">
											<div class="mb-2"><b>Keeping in
													Touch</b></div>
											<div class="row">
												<div class="col">
													<label>Email
														Notifications</label>
													<div class="custom-controls-stacked px-2">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input"
																id="notifications-blog" checked="">
															<label class="custom-control-label"
																for="notifications-blog">Blog
																posts</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input"
																id="notifications-news" checked="">
															<label class="custom-control-label"
																for="notifications-news">Newsletter</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input"
																id="notifications-offers" checked="">
															<label class="custom-control-label"
																for="notifications-offers">Personal
																Offers</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col d-flex justify-content-end">


											<button class="btn btn-dark" type="submit">Save
												Changes</button>
										</div>
									</div>
								</form>

							</div>
							<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<h2 class="my-3">Link Accounts</h2>
								<div class="container1">
									<button class="add_form_field btn btn-outline-dark mr-auto">Add New Field &nbsp;
										<span style="font-size:16px; font-weight:bold;">+ </span>
									</button>
									<div class="my-3 input-group">
										<div class="input-group-text">Link</div> <input type="text" class="form-control"
											name="mytext[]"><select name="account" id="account">
											<option value="">PSN</option>
											<option value="x">XBOX</option>
										</select><a href="#" class="delete btn btn-outline-danger">Delete</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<div class="col-12">
		<img src="../assets/images/banner.jpg" class="w-100 rounded shadow" alt="">
	</div>
</div>


<!-- End Content -->
<?php include 'templates/template-middle.php'?>
<!-- Right Side Bar -->
<div class="pr-md-4 pt-2">
	<div class="row">
		<div class="col-12">
			<div class="card mb-3">
				<div class="card-body">
					<h5>Delete Your Arcade Arena Account</h5>
					<div class="py-2">
						<button class="btn btn-danger mr-2" type="">Delete Account</button>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<h6 class="card-title font-weight-bold">Support</h6>
					<p class="card-text">Get fast, free help from our
						friendly assistants.</p>
					<button type="button" class="btn btn-dark">Contact
						Us</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Right Side Bar End -->
<script src="../assets/js/dashboard/profile.js"></script>
<?php include 'templates/template-bottom.php'?>
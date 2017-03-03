<main>
	<div class="container">
		<div class="row">
			<div class="col s12 m12">
				<div class="card">
					<div class="card-content">
						<span class="card-title activator grey-text text-darken-4">Employee</span>

						<div class="row">
							<form class="col s12" action="<?php echo site_url('c_booking/update_employee'.$this->session->userdata('username'));?>" method="post">
							<?php foreach ($user as $users) {
								# code...
							?>

								<div class="row">
									<div class="input-field col s12 m12">
			                          <input class="" type="text" class="" name="" value="<?php echo $users->username; ?>" disabled>
			                          <label for="">Username</label>
			                        </div>
								</div>

								<div class="row">
									<div class="input-field col s12 m12">
			                          <input class="" type="text" class="" name="" value="<?php echo $users->nama; ?>" disabled>
			                          <label for="">Name</label>
			                        </div>
								</div>

								<div class="row">
									<div class="input-field col s12 m12">
			                          <input class="" type="password" class="" name="" value="<?php echo $users->password; ?>" disabled>
			                          <label for="">Password</label>
			                        </div>
								</div>

								<div class="row">
									<div class="input-field col s12 m12">
			                          <input class="" type="text" class="" name="" value="<?php echo $users->status; ?>" disabled>
			                          <label for="">Status</label>
			                        </div>
								</div>

								<div class="row">
									<div class="input-field col s12 m12">
			                          <input class="" type="text" class="" name="" value="<?php echo $users->jabatan; ?>" disabled>
			                          <label for="">Position</label>
			                        </div>
								</div>

								<!-- <input type="submit" name="" class="btn blue" value="Save"> -->
								<a href="<?php echo site_url('c_booking/register');?>" class="btn blue right">Register Employee</a>

								<?php } ?>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>
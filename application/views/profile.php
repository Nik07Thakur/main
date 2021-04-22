<?php $this->load->view('header-layout/header'); 
?>
<div class="content">
    <div class="container-fluid">
      <div class="row">
      		<div class="col-md-2"></div>
				<div class="col-md-8">
					<?php  
						if(isset($_GET['success'])){
						    echo '<div class="alert alert-success alert-dismissible fade show" role="alert" id="hide_alert">
							  <strong>Success!</strong> Your profile has been successfully updated.
							   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>';
						}
						?>
				  <div class="card">
				    <div class="card-header card-header-primary">
				      <h4 class="card-title">Edit Profile</h4>
				      <p class="card-category">Update your profile</p>
				    </div>
				    <div class="card-body">
				      <form action="<?php echo base_url('profile'); ?>" method="post">
				      	<input type="hidden" name="id" value="<?php echo $currentUser[0]->_id; ?>">
				      	<div class="row">
				          <div class="col-md-12">
				            <div class="form-group">
				              <label class="bmd-label-floating">Role</label>
				              <select class="form-control" name="role" disabled>
				              	<option value=""></option>
				              	<option value="admin" <?php if($currentUser[0]->role == 'admin') echo 'selected="selected"'; ?>>Admin</option>
				              	<option value="agent" <?php if($currentUser[0]->role == 'agent') echo 'selected="selected"'; ?>>Agent</option>
				              	<option value="customer" <?php if($currentUser[0]->role == 'customer') echo 'selected="selected"'; ?>>Customer</option>
				              </select> 
				            </div>
				          </div>
				        </div>
				        <div class="row">
				          <div class="col-md-12">
				            <div class="form-group">
				              <label class="bmd-label-floating">Name</label>
				              <input type="text" class="form-control" name="name" value="<?php echo $currentUser[0]->firstname." ".$currentUser[0]->lastname; ?>">
				            </div>
				          </div>
				      	</div>
				      	<div class="row">
				          <div class="col-md-12">
				            <div class="form-group">
				              <label class="bmd-label-floating">Email address</label>
				              <input type="email" class="form-control" name="email" value="<?php echo $currentUser[0]->email; ?>" disabled>
				            </div>
				          </div>
				      	</div>
				      	<div class="row">
				         <div class="col-md-12">
				            <div class="form-group">
				              <label class="bmd-label-floating">Phone No.</label>
				              <input type="text" class="form-control" name="phone" value="<?php echo $currentUser[0]->phone; ?>">
				            </div>
				          </div>
				        </div>
				        <button type="submit" name="submit" class="btn btn-primary pull-right">Update Profile</button>
				        <div class="clearfix"></div>
				      </form>
				    </div>
				  </div>
				</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>
<?php 
$this->load->view('footer-layout/footer');
?>
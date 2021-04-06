<?php $this->load->view('header-layout/header'); 
?>
<div class="content">
	<div class="container-fluid">
	  <div class="row">
	    <div class="col-lg-3 col-md-6 col-sm-6">
	      <div class="card card-stats">
	        <div class="card-header card-header-warning card-header-icon">
	          <div class="card-icon">
	            <i class="material-icons">people</i>
	          </div>
	          <p class="card-category">Total Customers</p>
	          <h3 class="card-title"><?php echo $totalCustomers; ?></h3>
	        </div>
	        <div class="card-footer">
	          <div class="stats">
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-lg-3 col-md-6 col-sm-6">
	      <div class="card card-stats">
	        <div class="card-header card-header-success card-header-icon">
	          <div class="card-icon">
	            <i class="material-icons">people</i>
	          </div>
	          <p class="card-category">Total Agents</p>
	          <h3 class="card-title"><?php echo $totalAgents; ?></h3>
	        </div>
	        <div class="card-footer">
	          <div class="stats">
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-lg-3 col-md-6 col-sm-6">
	      <div class="card card-stats">
	        <div class="card-header card-header-danger card-header-icon">
	          <div class="card-icon">
	            <i class="material-icons">article</i>
	          </div>
	          <p class="card-category">Total RFQ</p>
	          <h3 class="card-title">0</h3>
	        </div>
	        <div class="card-footer">
	          <div class="stats">
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="col-lg-3 col-md-6 col-sm-6">
	      <div class="card card-stats">
	        <div class="card-header card-header-info card-header-icon">
	          <div class="card-icon">
			  <i class="material-icons">drafts</i>
	          </div>
	          <p class="card-category">Total Quotations</p>
	          <h3 class="card-title">0</h3>
	        </div>
	        <div class="card-footer">
	          <div class="stats">
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>


<?php 
$this->load->view('footer-layout/footer');
?>
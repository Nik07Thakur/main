<?php $this->load->view('header-layout/header'); ?>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Customers</h4>
              <p class="card-category">Customers List</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-no-bordered table-hover datatable">
                  <thead class="text-primary">
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Phone
                    </th>
                    <th>
                      Role
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                  	<?php 
                  	if($customersList){
                     
                  		foreach ($customersList as $customer) {
                        
                        ?>
                    <tr>
                      <td>
                        <?php  echo $customer->firstname." ".$customer->lastname; ?>
                      </td>
                      <td>
                        <?php  echo $customer->email; ?>
                      </td>
                      <td>
                        <?php  echo $customer->phone; ?>
                      </td>
                      <td>
                        <?php  echo $customer->role; ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url('deleteCustomer');?>/<?php echo $customer->_id; ?>" data-toggle="tooltip" style="color:red;" data-placement="top" name="delete" onclick='return confirm("Do you want delete this customer")' title="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                <?php  } }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php $this->load->view('footer-layout/footer'); ?>
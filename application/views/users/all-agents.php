<?php $this->load->view('header-layout/header'); ?>

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Agents</h4>
              <p class="card-category"> Agents List</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table datatable">
                  <thead class=" text-primary">
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
                    if($agentsList){
                      foreach ($agentsList as $agent) { ?>
                    <tr>
                      <td>
                        <?php  echo $agent->firstname." ".$agent->firstname; ?>
                      </td>
                      <td>
                        <?php  echo $agent->email; ?>
                      </td>
                      <td>
                        <?php  echo $agent->phone; ?>
                      </td>
                      <td>
                        <?php  echo $agent->role; ?>
                      </td>
                      <td>
                        <a href="<?php echo base_url('deleteAgent');?>/<?php echo $agent->_id; ?>" data-toggle="tooltip" style="color:red;" data-placement="top" name="delete" onclick='return confirm("Do you want delete this Agent")' title="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                <?php  } }?>
                  </tbody>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php $this->load->view('footer-layout/footer'); ?>
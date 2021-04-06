<div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg') ?>">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a></div>
  <div class="sidebar-wrapper">
    <div class="user">
      <div class="photo">
        <img src="<?php echo base_url('assets/img/faces/avatar.jpg'); ?>">
      </div>
      <div class="user-info">
        <a data-toggle="collapse" href="#collapseExample" class="username collapsed" aria-expanded="false">
          <span>
            <?php
              echo $currentUser[0]->name; ?>
          </span>
        </a>
      </div>
    </div>
    <ul class="nav">
      <li class="nav-item dashboard">
        <a class="nav-link" href="<?php echo base_url(); ?>">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item customers">
        <a class="nav-link" href="<?php echo base_url('customers'); ?>">
          <i class="material-icons">people</i>
          <p>All Customers</p>
        </a>
      </li>
      <li class="nav-item agents">
        <a class="nav-link" href="<?php echo base_url('agents'); ?>">
          <i class="material-icons">people</i>
          <p>All Agents</p>
        </a>
      </li>
      <!-- <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
          <i class="material-icons">library_books</i>
          <p>Typography</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
          <i class="material-icons">bubble_chart</i>
          <p>Icons</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./map.html">
          <i class="material-icons">location_ons</i>
          <p>Maps</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
          <i class="material-icons">language</i>
          <p>RTL Support</p>
        </a>
      </li>
      <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
          <i class="material-icons">unarchive</i>
          <p>Upgrade to PRO</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
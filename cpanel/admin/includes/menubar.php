<style>
  
  .bg-red, .callout.callout-def, .alert-def, .alert-error, .label-def, .modal-def .modal-body {
    background-color: #e0e0e0 !important;
    color: black !important;
  }
  .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
    background-color: #00a65a !important;
  }
  .bg-yellow, .callout.callout-warning, .alert-warning, .label-warning, .modal-warning .modal-body {
    background-color: #f39c12 !important;
  }
  .bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
    background-color: #00c0ef !important;
  }
  .bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
    background-color: #dd4b39 !important;
  }
  
  .label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
  }
  </style>
<aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../images/logo.png" alt="Helpcare Logo" style="width: 230px;" >
       <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="#" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div> -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="provider.php" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Service Providers</p>
                </a>
              </li>
            
            </ul>
          </li>
        
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pager"></i>
              <p>
                Service
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="categories.php" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sub-categories.php" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Sub Category </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transaction
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Appointment</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="booking.php" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Bookings</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-mail-bulk"></i>
              <p>
                Feedback
                <i class="fas fa-angle-left right"></i>
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Reviews</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                <i class=" nav-icon">-</i>
                  <p>Ratings</p>
                </a>
              </li>
             
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-money-check-alt"></i>
              <p>Pricing</p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
              <p>Utilities</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
            <i class="nav-icon fas fa-tools"></i>
              <p>Settings</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
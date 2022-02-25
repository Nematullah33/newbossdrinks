<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
            <img class="img-80 img-radius" src="<?= base_url('assets/admin/images/neamat.jpg')?>" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details"><i class="fa fa-caret-down"></i></span>
                </div>
            </div>
            <div class="main-menu-content">
                <ul>
                    <li class="more-details">
                        <a href="<?php echo base_url('profile')?>"><i class="ti-user"></i>View Profile</a>
                        <a href="#!"><i class="ti-settings"></i>Settings</a>
                        <a href=""><i class="ti-layout-sidebar-left"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-15 p-b-0">
            <form class="form-material">
                <div class="form-group form-primary">
                    <input type="text" name="footer-email" class="form-control">
                    <span class="form-bar"></span>
                    <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                </div>
            </form>
        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="<?= base_url('/home')?>" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        
      <?php echo view('erp/menus/product_menu')?>
      <?php echo view('erp/menus/packages_menu')?>
      <?php echo view('erp/menus/order_menu')?>
      <?php echo view('erp/menus/earning_menu')?>
      <?php echo view('erp/menus/coupons_menu')?>
      <?php echo view('erp/menus/uploade_menu')?>
      
        
       
    </div>
</nav>
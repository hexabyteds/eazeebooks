
<a href="<?php echo base_url('home') ?>" class="logo"> 
    <span class="logo-lg">
        <img src="<?php echo base_url((!empty($setting->logo)?$setting->logo:'assets/img/icons/mini-logo.png')) ?>" alt="">
    </span>
    <span class="logo-mini">

<img src="<?php echo base_url((!empty($setting->favicon)?$setting->favicon:'assets/img/icons/mini-logo.png')) ?>" alt="">
</span>
</a>
<div class="se-pre-con"></div>
<!-- Header Navbar -->
<?php $gui_p = $this->uri->segment(1);
         if($gui_p != 'gui_pos'){
         ?> 
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="pe-7s-keypad"></span>
    </a>
<span class="top-fixed-link">
      <?php
         
           if($this->permission1->method('new_invoice','create')->access()){
           ?>
           <a href="<?php echo base_url('add_invoice')?>" class="btn btn-success btn-outline"><i class="fa fa-balance-scale"></i> <?php  echo display('invoice') ?></a>
     <?php }?>

     
        <?php if($this->permission1->method('customer_receive','create')->access()){ ?>
           <a href="<?php echo base_url('customer_receive')?>" class="btn btn-success btn-outline"><i class="fa fa-money"></i> <?php echo display('customer_receive')?></a>
       <?php } ?>
      
  <?php if($this->permission1->method('supplier_payment','create')->access()){ ?>
          <a href="<?php echo base_url('supplier_payment')?>" class="btn btn-success btn-outline"><i class="fa fa-money" aria-hidden="true"></i> <?php echo display('supplier_payment')?></a>
      <?php } ?>

<?php if($this->permission1->method('add_purchase','create')->access()){ ?>
          <a href="<?php echo base_url('add_purchase')?>" class="btn btn-success btn-outline"><i class="ti-shopping-cart"></i> <?php echo display('purchase') ?></a>
 <?php } ?>
</span>

    <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
            <!-- Messages -->
            <?php if($this->permission1->method('pos_invoice','create')->access()){
           ?>
             <li>
                    <a href="<?php echo base_url('gui_pos')?>" class="text-white  btn-success pos-btn"> <span class="fa fa-plus"></span> <?php echo display('pos_invoice') ?></a>
                </li>
              <?php }?>
              <?php if($max_version > $current_version){?>
                <li> <blink><a href="<?php echo base_url('autoupdate/Autoupdate')?>" class="text-white  btn-danger update-btn"> <?php echo $max_version.' Version Available'; ?></a></blink>
                </li>
              <?php }?>
          <li class="dropdown notifications-menu">
                    <a href="<?php echo base_url('out_of_stock') ?>" >
                        <i class="pe-7s-attention" title="<?php echo display('out_of_stock') ?>"></i>
                        <span class="label label-danger"><?php  echo html_escape($out_of_stocks) ?></span>
                    </a>
                </li>
            <!-- settings -->
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('edit_profile') ?>"><i class="pe-7s-users"></i> <?php echo display('edit_profile') ?></a></li>
                    <li><a href="<?php echo base_url('change_password') ?>"><i class="pe-7s-settings"></i><?php echo display('change_password') ?></a></li>
                    <li><a href="<?php echo base_url('logout') ?>"><i class="pe-7s-key"></i>  <?php echo display('logout') ?></a></li>
                </ul>
            </li>
        </ul>
    </div>
  
</nav>
<?php }?>
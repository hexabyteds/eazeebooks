<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view('includes/head') ?>
    </head>

    <body class="hold-transition sidebar-mini">
                 <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div> 
      
        <!-- Site wrapper -->
        <div class="wrapper">
 
            <header class="main-header"> 
                <?php $this->load->view('includes/header') ?>
            </header>

 
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <?php $this->load->view('includes/sidebar') ?>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
       
                <!-- Main content -->
                <div class="content <?php $gui_segment = $this->uri->segment(1);
                if($gui_segment == 'gui_pos'){echo 'p-0';}else{echo ' ';}
                ?>">



   <?php $gui_p = $this->uri->segment(1);
         if($gui_p != 'gui_pos'){
         ?>    
                <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo $module; ?></a></li>
                <li class="active"><?php echo $title; ?></li>
            </ol>
            <?php }?>

                    <!-- load messages -->
                    <?php $this->load->view('includes/messages') ?>
                   <!--<a href="<?php echo base_url('create_account') ?>"  class="btn btn-info" style="float: right; margin: 0 0 10px 1px;">+New Account</a>-->
                    <div class="se-pre-con"></div>
                    <!-- load custom page -->
                    <?php echo $this->load->view($module.'/'.$page) ?>
                </div> <!-- /.content -->
            </div> <!-- /.content-wrapper -->
            <footer class="main-footer">
                <input type="hidden" name="" id="base_url" value="<?php echo base_url();?>">
                <div class="pull-right hidden-xs">
                    <?php echo (!empty($setting->address)?$setting->address:null) ?> 
                </div>

                <strong>
                    <?php echo (!empty($setting->footer_text)?$setting->footer_text:null) ?>
                </strong>
                    <a href="<?php echo current_url() ?>">
                    <?php echo (!empty($setting->title)?$setting->title:null) ?></a>
    <input type="hidden" id="base_url" value="<?php echo base_url();?>" name="">
    <input type="hidden" name="dis_type" id="discount_type" value="<?php echo $discount_type?>">
    <input type ="hidden" name="csrf_test_name" id="CSRF_TOKEN" value="<?php echo $this->security->get_csrf_hash();?>">
     <input type="hidden" id="currency" value="<?php echo $currency;?>" name="">
            </footer>
        </div> <!-- ./wrapper -->
 
        <!-- Start Core Plugins-->
        <?php $this->load->view('includes/js') ?>
        
       <!-- calculator modal -->
    <div class="modal fade-scale" id="calculator" role="dialog">
    <div class="modal-dialog" id="calculatorcontent">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
            <div class="calcontainer">
         <div class="screen">
      <h1 id="mainScreen">0</h1>
    </div>
    <table class="cal-table">
      <tr>
        <td><button value="7" id="7" class="cal-btn" onclick="InputSymbol(7)">7</button></td>
        <td><button value="8" id="8" class="cal-btn" onclick="InputSymbol(8)">8</button></td>
        <td><button value="9" id="9" class="cal-btn" onclick="InputSymbol(9)">9</button></td>
        <td><button onclick="DeleteLastSymbol()" class="cal-btn">CE</button></td>
      </tr>
      <tr>
        <td><button value="4" id="4" class="cal-btn" onclick="InputSymbol(4)">4</button></td>
        <td><button value="5" id="5" class="cal-btn" onclick="InputSymbol(5)">5</button></td>
        <td><button value="6" id="6" class="cal-btn" onclick="InputSymbol(6)">6</button></td>
        <td><button value="/" id="104" class="cal-btn" onclick="InputSymbol(104)">/</button></td>
      </tr>
      <tr>
        <td><button value="1" id="1" class="cal-btn" onclick="InputSymbol(1)">1</button></td>
        <td><button value="2" id="2" class="cal-btn" onclick="InputSymbol(2)">2</button></td>
        <td><button value="3" id="3" class="cal-btn" onclick="InputSymbol(3)">3</button></td>
        <td><button value="*" id="103" class="cal-btn" onclick="InputSymbol(103)">*</button></td>
      </tr>
      <tr>
        <td><button value="0" id="0" class="cal-btn" onclick="InputSymbol(0)">0</button></td>
        <td><button value="." id="128" class="cal-btn" onclick="InputSymbol(128)">.</button></td>
        <td><button value="-" id="102" class="cal-btn" onclick="InputSymbol(102)">-</button></td>
        <td><button value="+" id="101" class="cal-btn" onclick="InputSymbol(101)">+</button></td>
      </tr>
      <tr>
        <td colspan="2"><button onclick="ClearScreen()" class="cal-btn">C</button></td>
        <td colspan="1"><button onclick="CalculateTotal()" class="cal-btn">=</button></td>
        <td colspan="1"><button  data-dismiss="modal" class="cal-btn-danger"><i class="fa fa-power-off"></i></button></td>
      </tr>
    </table>
</div>
        </div>
       
      </div>
      
    </div>
  </div>


 

    <div class="modal fade modal-success" id="cust_info" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h3 class="modal-title"><?php echo display('add_new_customer') ?></h3>
                        </div>
                        
                        <div class="modal-body">
                            <div id="customeMessage" class="alert hide"></div>
                       <?php echo form_open('invoice/invoice/instant_customer', array('class' => 'form-vertical', 'id' => 'newcustomer')) ?>
                    <div class="panel-body">
 <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">
                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-4 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="customer_name" id="m_customer_name" type="text" placeholder="<?php echo display('customer_name') ?>"  required="" tabindex="1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label"><?php echo display('customer_email') ?></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="email" id="email" type="email" placeholder="<?php echo display('customer_email') ?>" tabindex="2"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-4 col-form-label"><?php echo display('customer_mobile') ?></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="number" placeholder="<?php echo display('customer_mobile') ?>" min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-4 col-form-label"><?php echo display('customer_address') ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="<?php echo display('customer_address') ?>" tabindex="4"></textarea>
                            </div>
                        </div>
                      
                    </div>
                    
                        </div>

                        <div class="modal-footer">
                            
                            <a href="#" class="btn btn-danger" tabindex="5" data-dismiss="modal">Close</a>
                            
                            <input type="submit" tabindex="6" class="btn btn-success" value="Submit">
                        </div>
                        <?php echo form_close() ?>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
    </body>
</html>

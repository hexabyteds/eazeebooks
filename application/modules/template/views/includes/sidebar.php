
<div class="sidebar">
    <!-- Sidebar user panel -->
  
    <div class="user-panel text-center">
        <div class="image">
            <?php $image = $this->session->userdata('image') ?>
            <img src="<?php echo base_url((!empty($image)?$image:'assets/img/icons/default.jpg')) ?>" class="img-circle" alt="User Image">
        </div>
        <div class="info">
            <p><?php echo $this->session->userdata('fullname') ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('user_level') ?></a>
        </div>
    </div> 




    <!-- sidebar menu -->
    <ul class="sidebar-menu">

         <li class="treeview <?php echo (($this->uri->segment(1)=="home")?"active":null) ?>">
            <a href="<?php echo base_url('home') ?>"> <i class="ti-dashboard"></i>  <span><?php echo display('dashboard')?></span> 
            </a>
        </li>
        
              <!-- Invoice menu start -->
            <?php if($this->permission1->method('new_invoice','create')->access() || $this->permission1->method('manage_invoice','read')->access() || $this->permission1->method('pos_invoice','create')->access() || $this->permission1->method('credit_voucher','create')->access() || $this->permission1->method('show_tree','read')->access() ||
            $this->permission1->method('customer_receive','create')->access() || $this->permission1->method('gui_pos','create')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_invoice") || $this->uri->segment('1') == ("invoice_list") || $this->uri->segment('1') == ("pos_invoice") || $this->uri->segment('1') == ("gui_pos") ||
             $this->uri->segment('1') == ("customer_receive") || $this->uri->segment('1') == ("invoice_details") || $this->uri->segment('1') == ("invoice_pad_print") || $this->uri->segment('1') == ("credit_voucher") || $this->uri->segment('1') == ("voucher_list") || $this->uri->segment('1') == ("pos_print") || $this->uri->segment('1') == ("invoice_edit")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-balance-scale"></i><span><?php echo display('invoice') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if($this->permission1->method('new_invoice','create')->access()){ ?>
                    <li  class="treeview <?php
            if ($this->uri->segment('1') == ("add_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_invoice') ?>">New Invoice</a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_invoice','read')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("invoice_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('invoice_list') ?>">Manage Invoice</a></li>
                    <?php } ?>
            <?php if($this->permission1->method('pos_invoice','create')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("gui_pos")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('gui_pos') ?>">POS Invoice</a></li>
                    <?php } ?>
                     <?php if($this->permission1->method('add_quotation','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_quotation")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_quotation') ?>"><?php echo display('add_quotation') ?></a></li>
                <?php }?>
                <?php if($this->permission1->method('manage_quotation','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("manage_quotation")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_quotation') ?>"><?php echo display('manage_quotation') ?></a></li>
                <?php } ?>
                 <?php if($this->permission1->method('create_service','create')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_service")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_service') ?>"><?php echo display('add_service') ?></a></li>
                <?php } ?>
                 <?php if($this->permission1->method('manage_service','read')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("manage_service")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('manage_service') ?>"><?php echo display('manage_service') ?></a></li>
                      <?php } ?>
                       <?php if($this->permission1->method('service_invoice','create')->access()){ ?>
                       <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_service_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_service_invoice') ?>"><?php echo display('service_invoice') ?></a></li>
                       <?php } ?>
                        <?php if($this->permission1->method('manage_service_invoice','read')->access()){ ?>
                       <li class="treeview <?php
            if ($this->uri->segment('1') == ("manage_service_invoice")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('manage_service_invoice') ?>"><?php echo display('manage_service_invoice') ?></a></li>
                       <?php } ?>
                       <?php if($this->permission1->method('customer_receive','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("customer_receive")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('customer_receive') ?>"><?php echo display('customer_receive'); ?></a></li>
                    <?php }?>
                      <?php if($this->permission1->method('aprove_v','read')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("voucher_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('voucher_list') ?>">Credit Note</a></li> 
                     <?php }?>
                     
            
                </ul>
            </li>
             <?php } ?>

          <?php if($this->permission1->method('add_customer','create')->access() || $this->permission1->method('manage_customer','read')->access()|| $this->permission1->method('credit_customer','read')->access() || $this->permission1->method('paid_customer','read')->access() || $this->permission1->method('customer_ledger','read')->access() || $this->permission1->method('customer_advance','create')->access()){?>
          <li class="treeview <?php echo (($this->uri->segment(1)=="add_customer" || $this->uri->segment(1)=="customer_list" || $this->uri->segment(1)=="credit_customer" || $this->uri->segment(1)=="paid_customer" || $this->uri->segment(1)=="edit_customer" || $this->uri->segment(1)=="customer_ledgerdata" || $this->uri->segment(1)=="customer_ledger" || $this->uri->segment(1)=="advance_receipt" || $this->uri->segment(1)=="customer_advance")?"active":'') ?>">
                    
            <a href="javascript:void(0)">
               
               <i class="metismenu-icon pe-7s-user"></i> <span><?php echo display('customer') ?></span>
                 <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a> 

                <ul class="treeview-menu">

               <?php if($this->permission1->method('add_customer','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="add_customer")?"active":'') ?>">
                <a href="<?php echo base_url('add_customer') ?>" class="<?php echo (($this->uri->segment(1)=="add_customer")?"active":null) ?>"> <?php echo display('add_customer')?>
                   
                </a>
              
            </li>
        <?php }?>
         <?php if($this->permission1->method('manage_customer','read')->access()){ ?>
            <li class="<?php echo (($this->uri->segment(1)=="customer_list")?"active":'') ?>">
                <a href="<?php echo base_url('customer_list') ?>">
                   
                    <?php echo display('customer_list')?>
                   
                </a>
              
            </li>
        <?php }?>
          <?php if($this->permission1->method('credit_customer','read')->access()){ ?>

             <li class="<?php echo (($this->uri->segment(1)=="credit_customer")?"active":'') ?>">
                <a href="<?php echo base_url('credit_customer') ?>">
                   
                    <?php echo display('credit_customer')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('paid_customer','read')->access()){ ?>
             <li class="<?php echo (($this->uri->segment(1)=="paid_customer")?"active":'') ?>">
                <a href="<?php echo base_url('paid_customer') ?>" >
                   
                    <?php echo display('paid_customer')?>
                   
                </a>
              
            </li>
        <?php }?>
         <?php if($this->permission1->method('customer_ledger','read')->access()){ ?>
            <li class="<?php echo (($this->uri->segment(1)=="customer_ledger" || $this->uri->segment(1)=="customer_ledgerdata")?"active":'') ?>">
                <a href="<?php echo base_url('customer_ledger') ?>" >
                   
                    <?php echo display('customer_ledger')?>
                   
                </a>
              
            </li>
        <?php }?>
         <?php if($this->permission1->method('customer_advance','create')->access()){ ?>
             <li class="<?php echo (($this->uri->segment(1)=="customer_advance")?"active":'') ?>">
                <a href="<?php echo base_url('customer_advance') ?>" >
                   
                    <?php echo display('customer_advance')?>
                   
                </a>
              
            </li>
        <?php }?>
        </ul>
                  
</li>
<?php }?>
<!-- supplier menu part -->
 
<!-- supplier menu end -->
<!-- product menu part -->
 <?php if($this->permission1->method('create_product','create')->access() || $this->permission1->method('add_product_csv','create')->access() || $this->permission1->method('manage_product','read')->access() || $this->permission1->method('create_category','create')->access() || $this->permission1->method('manage_category','read')->access() || $this->permission1->method('add_unit','create')->access() || $this->permission1->method('manage_unit','read')->access()){?>
    <li class="treeview <?php echo (($this->uri->segment(1)=="category_form" || $this->uri->segment(1)=="category_list" || $this->uri->segment(1)=="unit_form" || $this->uri->segment(1)=="unit_list" || $this->uri->segment(1)=="product_form" || $this->uri->segment(1)=="product_list" || $this->uri->segment(1)=="barcode" || $this->uri->segment(1)=="qrcode" || $this->uri->segment(1)=="bulk_products" || $this->uri->segment(1)=="product_details")?"active":'') ?>">
                    
            <a href="javascript:void(0)">
               
               <i class="metismenu-icon fa fa-cubes"></i> <span><?php echo display('product') ?></span>
                 <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
            </a> 

                <ul class="treeview-menu">

             <?php if($this->permission1->method('category','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="category_form")?"active":'') ?>">
                <a href="<?php echo base_url('category_form') ?>" > <?php echo display('add_category')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('manage_category','read')->access()|| $this->permission1->method('manage_category','update')->access()|| $this->permission1->method('manage_category','delete')->access()){ ?>
            <li class="<?php echo (($this->uri->segment(1)=="category_list")?"active":'') ?>">
                <a href="<?php echo base_url('category_list') ?>">
                   
                    <?php echo display('category_list')?>
                   
                </a>
              
            </li>
        <?php }?>
    <?php if($this->permission1->method('unit','create')->access() || $this->permission1->method('unit','update')->access()){ ?>
         <li class="<?php echo (($this->uri->segment(1)=="unit_form")?"active":'') ?>">
                <a href="<?php echo base_url('unit_form') ?>" > <?php echo display('add_unit')?>
                   
                </a>
              
            </li>
        <?php }?>
         <?php if($this->permission1->method('manage_unit','create')->access() || $this->permission1->method('manage_unit','read')->access() || $this->permission1->method('manage_unit','delete')->access() || $this->permission1->method('manage_unit','update')->access()){ ?>
        <li class="<?php echo (($this->uri->segment(1)=="unit_list")?"active":'') ?>">
                <a href="<?php echo base_url('unit_list') ?>">
                   
                    <?php echo display('unit_list')?>
                   
                </a>
              
        </li>
    <?php }?>
     <?php if($this->permission1->method('create_product','create')->access()){ ?>
        <li class="<?php echo (($this->uri->segment(1)=="product_form")?"active":'') ?>">
                <a href="<?php echo base_url('product_form') ?>">
                   
                    <?php echo display('add_product')?>
                   
                </a>
        </li>
    <?php }?>
     <?php if($this->permission1->method('add_product_csv','create')->access()){ ?>
         <li class="<?php echo (($this->uri->segment(1)=="bulk_products")?"active":'') ?>">
                <a href="<?php echo base_url('bulk_products') ?>">
                   
                    <?php echo display('add_product_csv')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('manage_product','read')->access()){ ?>
         <li class="<?php echo (($this->uri->segment(1)=="product_list")?"active":'') ?>">
                <a href="<?php echo base_url('product_list') ?>">
                   
                    <?php echo display('manage_product')?>
                   
                </a>
              
            </li>
        <?php }?>
          
        </ul>
                  
</li>
<?php }?>
                     <!-- Purchase menu start -->
            <?php if($this->permission1->method('add_purchase','create')->access() || $this->permission1->method('manage_purchase','read')->access() || $this->permission1->method('supplier_payment','create')->access()|| $this->permission1->method('debit_voucher','create')->access()) {?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_purchase") || $this->uri->segment('1') == ("purchase_edit") || $this->uri->segment('1') == ("purchase_list") || $this->uri->segment('1') == ("purchase_details") || $this->uri->segment('1') == ("debit_voucher") || $this->uri->segment('1') == ("supplier_payment")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-shopping-cart"></i><span><?php echo display('purchase') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('add_purchase','create')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_purchase")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('add_purchase') ?>"><?php echo display('add_purchase') ?></a></li>
                       <?php } ?>
                     <?php if($this->permission1->method('manage_purchase','read')->access()){ ?>
                    <li class="treeview <?php
            if ($this->uri->segment('1') == ("purchase_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>"><a href="<?php echo base_url('purchase_list') ?>"><?php echo display('manage_purchase') ?></a></li>
            
            <?php if($this->permission1->method('add_supplier','create')->access()){ ?>
                <li class="<?php echo (($this->uri->segment(1)=="add_supplier")?"active":'') ?>">
                <a href="<?php echo base_url('add_supplier') ?>" class="<?php echo (($this->uri->segment(1)=="add_supplier")?"active":null) ?>"> <?php echo display('add_supplier')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('manage_supplier','read')->access()){ ?>
            <li class="<?php echo (($this->uri->segment(1)=="supplier_list")?"active":'') ?>">
                <a href="<?php echo base_url('supplier_list') ?>">
                   
                    <?php echo display('supplier_list')?>
                   
                </a>
              
            </li>
          <?php }?>
           
 <?php if($this->permission1->method('supplier_ledger','read')->access()){ ?>
            <li class="<?php echo (($this->uri->segment(1)=="supplier_ledger" || $this->uri->segment(1)=="supplier_ledgerdata")?"active":'') ?>">
                <a href="<?php echo base_url('supplier_ledger') ?>" >
                   
                    <?php echo display('supplier_ledger')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('supplier_advance','create')->access()){ ?>
             <li class="<?php echo (($this->uri->segment(1)=="supplier_advance")?"active":'') ?>">
                <a href="<?php echo base_url('supplier_advance') ?>" >
                   
                    <?php echo display('supplier_advance')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('supplier_payment','create')->access()){ ?>
             <li class="<?php echo (($this->uri->segment(1)=="supplier_payment")?"active":'') ?>">
                <a href="<?php echo base_url('supplier_payment') ?>" >
                   
                    <?php echo display('supplier_payment')?>
                   
                </a>
              
            </li>
        <?php }?>
        <?php if($this->permission1->method('debit_voucher','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("debit_voucher")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('debit_voucher') ?>">Debit Note</a></li>
                     <?php }?>
        
                       <?php } ?>
                </ul>
            </li>
        <?php } ?>
            <!-- Purchase menu end -->  

        

      <!-- Stock menu start -->
            <?php if($this->permission1->method('stock','read')->access()){?>
        <li class="treeview <?php
        if ($this->uri->segment('1') == ("stock")) {
            echo "active";
        } else {
            echo " ";
        }
        ?>">
            <a href="#">
                <i class="ti-bar-chart"></i><span><?php echo display('stock') ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                 <?php if($this->permission1->method('stock_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("stock")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('stock') ?>"><?php echo display('stock_report') ?></a></li>
            <?php }?>

            </ul>
        </li>
    <?php }?>
        <!-- Stock menu end -->
        <!-- Account part star -->
        <?php if($this->permission1->method('show_tree','read')->access() ||     $this->permission1->method('aprove_v','read')->access() || $this->permission1->method('contra_voucher','create')->access() || $this->permission1->method('journal_voucher','create')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('2') == ("voucher_report")   || $this->uri->segment('1') == ("general_ledger") ||    $this->uri->segment('1') == ("coa")  || $this->uri->segment('1') == ("supplier_payment_received") ||    $this->uri->segment('1') == ("cash_adjustment") ||  $this->uri->segment('1') == ("contra_voucher") || $this->uri->segment('1') == ("journal_voucher")  || $this->uri->segment('1') == ("edit_voucher") ||  $this->uri->segment('1') == ("opening_balance")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-money"></i><span><?php echo display('accounts') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('show_tree','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("coa")){ 
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('coa') ?>"><?php echo display('c_o_a'); ?></a></li>
                <?php }?>


                <!--  Test COA -->

                <?php if($this->permission1->method('show_tree','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("coa_test")){ 
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('coa_test') ?>"><?php echo display('c_o_a_T'); ?></a></li>
                <?php }?>

                <!-- END TEST COA -->

                
                 <?php if($this->permission1->method('opening_balance','create')->access()){ ?>
                 <li class="treeview <?php if ($this->uri->segment('1') == ("opening_balance")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('opening_balance') ?>"><?php echo display('opening_balance'); ?></a></li>
                    <?php }?>
                 
                      

                     <?php if($this->permission1->method('cash_adjustment','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("cash_adjustment")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('cash_adjustment') ?>"><?php echo display('cash_adjustment'); ?></a></li>
                    <?php }?>
                     
                     
                    
                      <?php if($this->permission1->method('contra_voucher','create')->access()){ ?>
                       <li class="treeview <?php if ($this->uri->segment('1') == ("contra_voucher")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('contra_voucher') ?>"><?php echo display('contra_voucher'); ?></a></li>
                     <?php }?>
                      <?php if($this->permission1->method('journal_voucher','create')->access()){ ?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("journal_voucher")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('journal_voucher') ?>"><?php echo display('journal_voucher'); ?></a></li> 
                     <?php }?>

                      
                    
                </ul>
            </li>
           <?php } ?>
<!--  Account End -->
            <!-- Report menu start -->
             <?php if($this->permission1->method('add_closing','create')->access() || $this->permission1->method('closing_report','read')->access() || $this->permission1->method('todays_report','read')->access() || $this->permission1->method('todays_customer_receipt','read')->access() || $this->permission1->method('todays_sales_report','read')->access() || $this->permission1->method('due_report','read')->access() || $this->permission1->method('todays_purchase_report','read')->access() || $this->permission1->method('purchase_report_category_wise','read')->access() || $this->permission1->method('product_sales_reports_date_wise','read')->access() || $this->permission1->method('sales_report_category_wise','read')->access() || $this->permission1->method('shipping_cost_report','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("closing_form") || $this->uri->segment('1') == ("closing_report") || $this->uri->segment('1') == ("closing_report_search") || $this->uri->segment('1') == ("todays_report")|| $this->uri->segment('1') == ("todays_customer_received") || $this->uri->segment('1') == ("todays_customerwise_received") || $this->uri->segment('1') == ("sales_report") || $this->uri->segment('1') == ("datewise_sales_report") || $this->uri->segment('1') == ("userwise_sales_report") || $this->uri->segment('1') == ("invoice_wise_due_report") || $this->uri->segment('1') == ("shipping_cost_report") || $this->uri->segment('1') == ("purchase_report") || $this->uri->segment('1') == ("purchase_report_categorywise")|| $this->uri->segment('1') == ("product_wise_sales_report") || $this->uri->segment('1') == ("category_sales_report") || $this->uri->segment('1') == ("sales_return") || $this->uri->segment('1') == ("supplier_returns") || $this->uri->segment('1') == ("tax_report") || $this->uri->segment('1') == ("profit_report") || $this->uri->segment('1') == ("voucher_report") || $this->uri->segment('1') == ("cash_book") || $this->uri->segment('1') == ("bank_book") || $this->uri->segment('1') == ("general_ledger") || $this->uri->segment('1') == ("general_ledger_form") || $this->uri->segment('1') == ("trial_balance") || $this->uri->segment('1') == ("trial_balance_form") || $this->uri->segment('1') == ("profit_loss_form") || $this->uri->segment('1') == ("profit_loss_report") || $this->uri->segment('1') == ("cash_flow")|| $this->uri->segment('1') == ("inventory_ledger")|| $this->uri->segment('1') == ("coa_print") || $this->uri->segment('1') == ("cashflow_form") || $this->uri->segment('1') == ("balance_sheet")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-book"></i><span><?php echo display('report') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('add_closing','create')->access()){ ?>
                 <li class="treeview <?php if ($this->uri->segment('1') == ("closing_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('closing_form') ?>"><?php echo display('closing') ?></a></li>
                  <?php } ?>
             <?php if($this->permission1->method('closing_report','read')->access()){ ?>
                   <li class="treeview <?php if ($this->uri->segment('1') == ("closing_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('closing_report') ?>"><?php echo display('closing_report') ?></a></li>
                    <?php } ?>
             <?php if($this->permission1->method('todays_report','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("todays_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('todays_report') ?>"><?php echo display('todays_report') ?></a></li>
                     <?php } ?>
             <?php if($this->permission1->method('todays_customer_receipt','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("todays_customer_received")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('todays_customer_received') ?>"><?php echo display('todays_customer_receipt') ?></a></li>
                     <?php } ?>
             <?php if($this->permission1->method('todays_sales_report','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('sales_report') ?>"><?php echo display('sales_report') ?></a></li>
                     <?php } ?>
                     <?php if($this->permission1->method('user_wise_sales_report','read')->access()){ ?>
                       <li class="treeview <?php if ($this->uri->segment('1') == ("userwise_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('userwise_sales_report') ?>"><?php echo display('user_wise_sales_report') ?></a></li>
                         <?php } ?>
             <?php if($this->permission1->method('due_report','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("invoice_wise_due_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('invoice_wise_due_report') ?>"><?php echo display('due_report'); ?></a></li>
                     <?php } ?>
                      <?php if($this->permission1->method('shipping_cost_report','read')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("shipping_cost_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('shipping_cost_report') ?>"><?php echo display('shipping_cost_report'); ?></a></li>
                       <?php } ?>
             <?php if($this->permission1->method('purchase_report','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("purchase_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('purchase_report') ?>"><?php echo display('purchase_report') ?></a></li>
                     <?php } ?>
             <?php if($this->permission1->method('purchase_report_category_wise','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("purchase_report_categorywise")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('purchase_report_categorywise') ?>"><?php echo display('purchase_report_category_wise') ?></a></li>
                     <?php } ?>
             <?php if($this->permission1->method('sales_report_product_wise','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("product_wise_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('product_wise_sales_report') ?>"><?php echo display('sales_report_product_wise') ?></a></li>
                     <?php } ?>
             <?php if($this->permission1->method('sales_report_category_wise','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("category_sales_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('category_sales_report') ?>"><?php echo display('sales_report_category_wise') ?></a></li>
                     <?php } ?>
                     <?php if($this->permission1->method('invoice_return','read')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("sales_return")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('sales_return') ?>"><?php echo display('invoice_return') ?></a></li>
                       <?php } ?>
                       <?php if($this->permission1->method('supplier_return','read')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("supplier_returns")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('supplier_returns') ?>"><?php echo display('supplier_return') ?></a></li>
                      <?php } ?>
                       <?php if($this->permission1->method('tax_report','read')->access()){ ?>
                     <li class="treeview <?php if ($this->uri->segment('1') == ("tax_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_report') ?>"><?php echo display('tax_report') ?></a></li>
                      <?php } ?>
                      <?php if($this->permission1->method('profit_report','read')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("profit_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('profit_report') ?>"><?php echo display('profit_report') ?></a></li>
                    <?php } ?>
                    
                    <?php if($this->permission1->method('cash_book','read')->access()){ ?>
                 <li class="treeview <?php if ($this->uri->segment('1') == ("cash_book")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('cash_book') ?>"><?php echo display('cash_book'); ?></a></li>
                <?php }?>
                <?php if($this->permission1->method('inventory_ledger','read')->access()){ ?>
                     <li class="treeview <?php if ($this->uri->segment('1') == ("inventory_ledger")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('inventory_ledger') ?>"><?php echo display('Inventory_ledger'); ?></a></li>
                <?php } ?>
                  <?php if($this->permission1->method('bank_book','read')->access()){ ?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("bank_book")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('bank_book') ?>"><?php echo display('bank_book'); ?></a></li>
                      <?php } ?>
                      <?php if($this->permission1->method('general_ledger','read')->access()){ ?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("general_ledger_form") || $this->uri->segment('1') == ("general_ledger")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('general_ledger_form') ?>"><?php echo display('general_ledger'); ?></a></li>
                      <?php } ?>
                       <?php if($this->permission1->method('trial_balance','read')->access()){ ?>
                            <li class="treeview <?php if ($this->uri->segment('1') == ("trial_balance_form") || $this->uri->segment('1') == ("trial_balance")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('trial_balance_form') ?>"><?php echo display('trial_balance'); ?></a></li>
                     <?php } ?>
                              <li class="treeview <?php if ($this->uri->segment('1') == ("profit_loss_form") || $this->uri->segment('1') == ("profit_loss_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('profit_loss_form') ?>"><?php echo display('profit_loss'); ?></a></li>
                     <?php if($this->permission1->method('cash_flow_report','read')->access()){ ?>
                              <li class="treeview <?php if ($this->uri->segment('1') == ("cashflow_form") || $this->uri->segment('1') == ("cash_flow")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('cashflow_form') ?>"><?php echo display('cash_flow'); ?></a></li>
                     <?php } ?>
                      <?php if($this->permission1->method('coa_print','read')->access()){ ?>
                               <li class="treeview <?php if ($this->uri->segment('1') == ("coa_print")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('coa_print') ?>"><?php echo display('coa_print'); ?></a></li>
                    <?php } ?>

                     <?php if($this->permission1->method('balance_sheet','read')->access()){ ?>
                               <li class="treeview <?php if ($this->uri->segment('1') == ("balance_sheet")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('balance_sheet') ?>"><?php echo display('balance_sheet'); ?></a></li>
                    <?php } ?>
                    
                </ul>
            </li>
        <?php }?>
            <!-- Report menu end -->
   <!-- human resource management menu start -->
             <?php if($this->permission1->method('add_designation','create')->access() || $this->permission1->method('manage_designation','read')->access() || $this->permission1->method('add_employee','create')->access() || $this->permission1->method('manage_employee','read')->access() ||$this->permission1->method('add_person','create')->access() || $this->permission1->method('add_loan','create')->access() || $this->permission1->method('add_payment','create')->access() || $this->permission1->method('manage_person','read')->access()||$this->permission1->method('add_attendance','create')->access() || $this->permission1->method('manage_attendance','read')->access() || $this->permission1->method('attendance_report','read')->access() || $this->permission1->method('add_benefits','create')->access() || $this->permission1->method('manage_benefits','read')->access() || $this->permission1->method('add_salary_setup','create')->access() || $this->permission1->method('manage_salary_setup','read')->access() || $this->permission1->method('salary_generate','create')->access() || $this->permission1->method('manage_salary_generate','read')->access() || $this->permission1->method('salary_payment','create')->access() || $this->permission1->method('add_expense_item','create')->access() || $this->permission1->method('manage_expense_item','read')->access() || $this->permission1->method('add_expense','create')->access() || $this->permission1->method('manage_expense','read')->access() || $this->permission1->method('add_ofloan_person','create')->access() || $this->permission1->method('add_office_loan','create')->access() || $this->permission1->method('add_loan_payment','create')->access() || $this->permission1->method('manage_ofln_person','read')->access()){?>
            <!-- Supplier menu start -->
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("designation_form") || $this->uri->segment('1') == ("designation_list") || $this->uri->segment('1') == ("employee_form") || $this->uri->segment('1') == ("employee_list") || $this->uri->segment('1') == ("add_attendance") || $this->uri->segment('1') == ("attendance_list") || $this->uri->segment('1') == ("attendance_report") || $this->uri->segment('1') == ("add_beneficials") || $this->uri->segment('1') == ("manage_benefits") || $this->uri->segment('1') == ("salary_setup") || $this->uri->segment('1') == ("manage_salary_setup") || $this->uri->segment('1') == ("salary_generate") || $this->uri->segment('1') == ("manage_salary_generate") || $this->uri->segment('1') == ("salary_payment") || $this->uri->segment('1') == ("add_expense_item") || $this->uri->segment('1') == ("manage_expense_item") || $this->uri->segment('1') == ("add_expense") || $this->uri->segment('1') == ("manage_expense") || $this->uri->segment('1') == ("expense_statement") || $this->uri->segment('1') == ("add_officeloan_person") || $this->uri->segment('1') == ("add_office_loan") || $this->uri->segment('1') == ("add_office_loan_payment") || $this->uri->segment('1') == ("manage_office_loan_person") || $this->uri->segment('1') == ("office_loan_person_ledger") || $this->uri->segment('1') == ("office_loan_person_ledgerdata") || $this->uri->segment('1') == ("edit_office_loan_person") || $this->uri->segment('1') == ("add_person") || $this->uri->segment('1') == ("add_loan") || $this->uri->segment('1') == ("add_payment") || $this->uri->segment('1') == ("manage_person") || $this->uri->segment('1') == ("personal_loan_edit") || $this->uri->segment('1') == ("person_ledger") || $this->uri->segment('1') == ("personal_loan_summary") || $this->uri->segment('1') == ("payslip") || $this->uri->segment('1') == ("edit_attendance")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-users"></i><span><?php echo display('hrm_management') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
       <?php if($this->permission1->method('add_designation','create')->access() || $this->permission1->method('manage_designation','read')->access() || $this->permission1->method('add_employee','create')->access() || $this->permission1->method('manage_employee','read')->access()){?>
            <!-- Supplier menu start -->
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("designation_form") || $this->uri->segment('1') == ("designation_list") || $this->uri->segment('1') == ("employee_form") || $this->uri->segment('1') == ("employee_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-users"></i><span><?php echo display('hrm') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
         <?php if($this->permission1->method('add_designation','create')->access()){ ?>          
          <li class="treeview <?php if ($this->uri->segment('1') == ("designation_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('designation_form') ?>"><?php echo display('add_designation') ?></a></li>
     <?php } ?>
         <?php if($this->permission1->method('manage_designation','read')->access()){ ?>
                         <li class="treeview <?php if ($this->uri->segment('1') == ("designation_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('designation_list') ?>"><?php echo display('manage_designation') ?></a></li>
                          <?php } ?>
        <?php if($this->permission1->method('add_employee','create')->access()){ ?>
                         <li class="treeview <?php if ($this->uri->segment('1') == ("employee_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('employee_form') ?>"><?php echo display('add_employee') ?></a></li>
                    <?php } ?>
            <?php if($this->permission1->method('manage_employee','read')->access()){ ?>        
                         <li class="treeview <?php if ($this->uri->segment('1') == ("employee_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('employee_list') ?>"><?php echo display('manage_employee') ?></a></li> 
                          <?php } ?> 
                 
                </ul>
            </li>
        <?php } ?>


              <!-- ================== Attendance menu start ================= -->
            <?php if($this->permission1->method('add_attendance','create')->access() || $this->permission1->method('manage_attendance','read')->access() || $this->permission1->method('attendance_report','read')->access()){?>
                          <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_attendance") || $this->uri->segment('1') == ("attendance_list") || $this->uri->segment('1') == ("attendance_report") || $this->uri->segment('1') == ("edit_attendance")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-clock-o"></i><span><?php echo display('attendance') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
         <?php if($this->permission1->method('add_attendance','create')->access()){ ?>       
               <li class="treeview <?php if ($this->uri->segment('1') == ("add_attendance")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_attendance') ?>"><?php echo display('add_attendance') ?></a></li>
           <?php } ?>
        <?php if($this->permission1->method('manage_attendance','read')->access()){ ?>   
                         <li class="treeview <?php if ($this->uri->segment('1') == ("attendance_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('attendance_list') ?>"><?php echo display('manage_attendance') ?></a></li> 
                          <?php } ?>
        <?php if($this->permission1->method('attendance_report','read')->access()){ ?>  
                          <li class="treeview <?php if ($this->uri->segment('1') == ("attendance_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('attendance_report') ?>"><?php echo display('attendance_report') ?></a></li> 
                          <?php } ?>
                </ul>
            </li>
              <?php } ?>
               <!-- ====================== Attendance menu end ================== -->
                 
                            <!-- ========================== Payroll menu start =================== -->
                    <?php if($this->permission1->method('add_benefits','create')->access() || $this->permission1->method('manage_benefits','read')->access() || $this->permission1->method('add_salary_setup','create')->access() || $this->permission1->method('manage_salary_setup','read')->access() || $this->permission1->method('salary_generate','create')->access() || $this->permission1->method('manage_salary_generate','read')->access() || $this->permission1->method('salary_payment','create')->access()){?>
            <!-- payroll menu start -->
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_beneficials") || $this->uri->segment('1') == ("manage_benefits") || $this->uri->segment('1') == ("salary_setup") || $this->uri->segment('1') == ("manage_salary_setup") || $this->uri->segment('1') == ("salary_generate") || $this->uri->segment('1') == ("manage_salary_generate") || $this->uri->segment('1') == ("salary_payment") || $this->uri->segment('1') == ("payslip")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-paypal"></i><span><?php echo display('payroll') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
            <?php if($this->permission1->method('add_benefits','create')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("add_beneficials")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_beneficials') ?>">
                        <?php echo display('add_benefits') ?></a></li><?php }?>
            <?php if($this->permission1->method('manage_benefits','read')->access()){ ?>            
                      <li class="treeview <?php if ($this->uri->segment('1') == ("manage_benefits")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_benefits') ?>"><?php echo display('manage_benefits') ?></a></li>
                      <?php }?>
             <?php if($this->permission1->method('add_salary_setup','create')->access()){ ?>          
                      <li class="treeview <?php if ($this->uri->segment('1') == ("salary_setup")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('salary_setup') ?>"><?php echo display('add_salary_setup') ?></a></li>
                       <?php }?>
            <?php if($this->permission1->method('manage_salary_setup','read')->access()){ ?> 
                      <li class="treeview <?php if ($this->uri->segment('1') == ("manage_salary_setup")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_salary_setup') ?>"><?php echo display('manage_salary_setup') ?></a></li> 
                       <?php }?> 
            <?php if($this->permission1->method('salary_generate','create')->access()){ ?>            
                       <li class="treeview <?php if ($this->uri->segment('1') == ("salary_generate")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('salary_generate') ?>"><?php echo display('salary_generate') ?></a></li>
                       <?php }?> 
            <?php if($this->permission1->method('manage_salary_generate','read')->access()){ ?>
                       <li class="treeview <?php if ($this->uri->segment('1') == ("manage_salary_generate")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_salary_generate') ?>"><?php echo display('manage_salary_generate') ?></a></li>
                        <?php }?> 
                        <?php if($this->permission1->method('salary_payment','create')->access()){ ?>
                     <li class="treeview <?php if ($this->uri->segment('1') == ("salary_payment")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('salary_payment') ?>"><?php echo display('salary_payment') ?></a></li>   <?php }?> 

                </ul>
            </li>
        <?php } ?>
               <!-- =============================== Payroll menu end =================== -->
                 <!-- =======================   Expense menu start ========================= -->
         <?php if($this->permission1->method('add_expense_item','create')->access() || $this->permission1->method('manage_expense_item','read')->access() || $this->permission1->method('add_expense','create')->access() || $this->permission1->method('manage_expense','read')->access()){?>
             <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_expense_item") || $this->uri->segment('1') == ("manage_expense_item") || $this->uri->segment('1') == ("add_expense") || $this->uri->segment('1') == ("manage_expense") || $this->uri->segment('1') == ("expense_statement")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-credit-card"></i><span><?php echo display('expense') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                      <?php
                    if($this->permission1->method('add_expense_item','create')->access()){ ?>
                    <li class="treeview <?php  if ($this->uri->segment('1') == ("add_expense_item")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_expense_item') ?>"><?php echo display('add_expense_item') ?></a></li>
                <?php }?>
                <?php if($this->permission1->method('manage_expense_item','read')->access()){ ?>
                    <li class="treeview <?php  if ($this->uri->segment('1') == ("manage_expense_item")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_expense_item') ?>"><?php echo display('manage_expense_item') ?></a></li>
                <?php }?>
                    <?php if($this->permission1->method('add_expense','create')->access()){ ?>
                    <li class="treeview <?php  if ($this->uri->segment('1') == ("add_expense")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_expense') ?>"><?php echo display('add_expense') ?></a></li>
                <?php } ?>
                <?php if($this->permission1->method('manage_expense','read')->access()){ ?>
                     <li class="treeview <?php  if ($this->uri->segment('1') == ("manage_expense")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_expense') ?>"><?php echo display('manage_expense') ?></a></li>
                     <?php } ?>
                      <?php if($this->permission1->method('expense_statement','read')->access()){ ?>
                      <li  class="treeview <?php  if ($this->uri->segment('1') == ("expense_statement")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('expense_statement') ?>"><?php echo display('expense_statement') ?></a></li>
                  <?php }?>
                </ul>
            </li>
        <?php }?>
    <!-- ========================== Expense menu end ========================== -->

            <!-- Office loan start -->
             <?php if($this->permission1->method('add_ofloan_person','create')->access() || $this->permission1->method('add_office_loan','create')->access() || $this->permission1->method('add_loan_payment','create')->access() || $this->permission1->method('manage_ofln_person','read')->access()){?>
           <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_officeloan_person") || $this->uri->segment('1') == ("add_office_loan") || $this->uri->segment('1') == ("add_office_loan_payment") || $this->uri->segment('1') == ("manage_office_loan_person") || $this->uri->segment('1') == ("office_loan_person_ledger") || $this->uri->segment('1') == ("office_loan_person_ledgerdata") || $this->uri->segment('1') == ("edit_office_loan_person")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-university" aria-hidden="true"></i>

                    <span><?php echo display('office_loan') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('add_ofloan_person','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_officeloan_person")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_officeloan_person') ?>"><?php echo display('add_person') ?></a></li>
                <?php }?>
                 <?php if($this->permission1->method('add_office_loan','create')->access()){ ?>
                      <li class="treeview <?php if ($this->uri->segment('1') == ("add_office_loan")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_office_loan') ?>"><?php echo display('add_loan') ?></a></li>
                  <?php }?>
                   <?php if($this->permission1->method('add_loan_payment','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_office_loan_payment")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_office_loan_payment') ?>"><?php echo display('add_payment') ?></a></li>
                <?php }?>
                 <?php if($this->permission1->method('manage_ofln_person','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("manage_office_loan_person")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_office_loan_person') ?>"><?php echo display('manage_person') ?></a></li>
                <?php }?>
                </ul>
            </li> 
        <?php }?>
            <!-- Office loan end -->
            <!--  Personal loan start -->
               <?php if($this->permission1->method('add_person','create')->access() || $this->permission1->method('add_loan','create')->access() || $this->permission1->method('add_payment','create')->access() || $this->permission1->method('manage_person','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("add_person") || $this->uri->segment('1') == ("add_loan") || $this->uri->segment('1') == ("add_payment") || $this->uri->segment('1') == ("manage_person") || $this->uri->segment('1') == ("personal_loan_edit") || $this->uri->segment('1') == ("person_ledger") || $this->uri->segment('1') == ("personal_loan_summary")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <span><?php echo display('personal_loan') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if($this->permission1->method('add_person','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_person")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_person') ?>"><?php echo display('add_person') ?></a></li>
                <?php }?>
                <?php if($this->permission1->method('add_loan','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_loan")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_loan') ?>"><?php echo display('add_loan') ?></a></li>
                <?php }?>
                  <?php if($this->permission1->method('add_payment','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_payment")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_payment') ?>"><?php echo display('add_payment') ?></a></li>
                <?php }?>
                 <?php if($this->permission1->method('manage_person','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("manage_person")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_person') ?>"><?php echo display('manage_person') ?></a></li>
                    <?php }?>
                </ul>
            </li>
        <?php }?>
            <!-- loan end -->
                </ul>
            </li>
        <?php } ?>
             <!-- Human resource management menu end -->
      
     <!-- Bank menu start -->
              <?php if($this->permission1->method('add_bank','create')->access() || $this->permission1->method('bank_transaction','create')->access() || $this->permission1->method('bank_list','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("bank_form") || $this->uri->segment('1') == ("bank_list") || $this->uri->segment('1') == ("bank_ledger") || $this->uri->segment('1') == ("bank_transaction")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-briefcase"></i><span><?php echo display('bank') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                      <?php if($this->permission1->method('add_bank','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("bank_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('bank_form') ?>"><?php echo display('add_new_bank') ?></a></li>
                <?php }?>
                
                  <?php if($this->permission1->method('bank_list','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("bank_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('bank_list') ?>"><?php echo display('manage_bank') ?></a></li>
                <?php }?>
                  <?php if($this->permission1->method('bank_transaction','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("bank_transaction")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('bank_transaction') ?>"><?php echo display('bank_transaction') ?></a></li>
                <?php }?>

                  <?php if($this->permission1->method('bank_ledger','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("bank_ledger")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('bank_ledger') ?>"><?php echo display('bank_ledger') ?></a></li>
                <?php }?>
                </ul>
            </li>
        <?php } ?>
            <!-- Bank menu end -->
            <!-- service menu start -->
             


            <!-- service menu end -->
            <!-- Comission start -->
             <?php if($this->permission1->method('commission','create')->access() || $this->permission1->method('commission','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("commission") || $this->uri->segment('1') == ("commission_generate")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-layout-grid2"></i><span><?php echo display('commission') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('commission','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("commission") || $this->uri->segment('1') == ("commission_generate")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('commission') ?>"><?php echo display('generate_commission') ?></a></li>
                      <?php } ?>
                </ul>
            </li>
        <?php } ?>
            <!-- Comission end -->
             <!-- Quotation Menu Start -->
         
            <!-- quotation Menu end -->
             <!-- Tax menu start -->
              <?php if($this->permission1->method('add_incometax','create')->access() || $this->permission1->method('manage_income_tax','read')->access()|| $this->permission1->method('tax_settings','create')->access() || $this->permission1->method('tax_report','read')->access() || $this->permission1->method('invoice_wise_tax_report','read')->access() || $this->permission1->method('tax_settings','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("invoice_wise_tax_report") || $this->uri->segment('1') == ("tax_setting") || $this->uri->segment('1') == ("income_tax") || $this->uri->segment('1') == ("manage_income_tax") || $this->uri->segment('1') == ("tax_reports") || $this->uri->segment('1') == ("update_tax_setting")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-money"></i><span><?php echo display('tax') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
             <?php if($this->permission1->method('tax_settings','create')->access()){ ?>       
                <li class="treeview <?php if ($this->uri->segment('1') == ("tax_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_setting') ?>"><?php echo display('tax_settings') ?></a></li>
                      <?php } ?>
              
                <?php if($this->permission1->method('add_incometax','create')->access()){ ?>
                 <li class="treeview <?php if ($this->uri->segment('1') == ("income_tax")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('income_tax') ?>"><?php echo display('add_incometax') ?></a></li>
                 <?php } ?>
                 <?php if($this->permission1->method('manage_income_tax','read')->access()){ ?>
                  <li class="treeview <?php if ($this->uri->segment('1') == ("manage_income_tax")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('manage_income_tax') ?>"><?php echo display('manage_income_tax') ?></a></li>
                    <?php } ?>
                <?php if($this->permission1->method('tax_report','read')->access()){ ?>    
                    <li class="treeview <?php if ($this->uri->segment('1') == ("tax_reports")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('tax_reports') ?>"><?php echo display('tax_report') ?></a></li>
                    <?php } ?>
                <?php if($this->permission1->method('invoice_wise_tax_report','read')->access()){ ?>
                <li class="treeview <?php if ($this->uri->segment('1') == ("invoice_wise_tax_report")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('invoice_wise_tax_report') ?>"><?php echo display('invoice_wise_tax_report') ?></a></li>
                <?php } ?>
                     </ul>

                    

            </li>
       <?php } ?>

<!-- return menu start -->
 <?php if($this->permission1->method('add_return','create')->access() || $this->permission1->method('return_list','read')->access() || $this->permission1->method('supplier_return_list','read')->access() || $this->permission1->method('wastage_return_list','read')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("return_form") || $this->uri->segment('1') == ("invoice_return") || $this->uri->segment('1') == ("invoice_return_details") || $this->uri->segment('1') == ("supplier_return") || $this->uri->segment('1') == ("supplier_return_details") || $this->uri->segment('1') == ("invoice_return_list") || $this->uri->segment('1') == ("invoice_return_search") || $this->uri->segment('1') == ("supplier_return_list") || $this->uri->segment('1') == ("supplier_return_search") || $this->uri->segment('1') == ("wastage_return_list")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="fa fa-retweet" aria-hidden="true"></i><span><?php echo display('return'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('add_return','create')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("return_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('return_form') ?>"><?php echo display('return'); ?></a></li>
                      <?php } ?>
                     <?php if($this->permission1->method('return_list','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("invoice_return_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('invoice_return_list') ?>"><?php echo display('stock_return_list') ?></a></li>
                      <?php } ?>
                     <?php if($this->permission1->method('supplier_return_list','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("supplier_return_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('supplier_return_list') ?>"><?php echo display('supplier_return_list') ?></a></li>
                      <?php } ?>
                    <?php if($this->permission1->method('wastage_return_list','read')->access()){ ?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("wastage_return_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('wastage_return_list') ?>"><?php echo display('wastage_return_list') ?></a></li>
                      <?php } ?>

                </ul>
            </li>

<?php } ?>

<!-- return menu end -->


            <!-- Software Settings menu start -->
              <?php if($this->permission1->method('manage_company','read')->access() ||$this->permission1->method('manage_company','create')->access() || $this->permission1->method('add_user','create')->access() || $this->permission1->method('add_user','read')->access() || $this->permission1->method('add_language','create')->access() || $this->permission1->method('add_currency','create')->access() || $this->permission1->method('soft_setting','create')->access() || $this->permission1->method('add_role','create')->access() ||$this->permission1->method('role_list','read')->access() || $this->permission1->method('user_assign','create')->access() || $this->permission1->method('sms_configure','create')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("company_list") || $this->uri->segment('1') == ("edit_company") || $this->uri->segment('1') == ("add_user") || $this->uri->segment('1') == ("user_list") || $this->uri->segment('1') == ("language") || $this->uri->segment('1') == ("currency_form") || $this->uri->segment('1') == ("currency_list") || $this->uri->segment('1') == ("settings")|| $this->uri->segment('1') == ("mail_setting") || $this->uri->segment('1') == ("app_setting") || $this->uri->segment('1') == ("add_role") || $this->uri->segment('1') == ("role_list") || $this->uri->segment('1') == ("edit_role") || $this->uri->segment('1') == ("assign_role") || $this->uri->segment('1') == ("sms_setting") || $this->uri->segment('1') == ("restore") || $this->uri->segment('1') == ("db_import") || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-settings"></i><span><?php echo display('settings') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                      <!-- Software Settings menu start -->
              <?php if($this->permission1->method('manage_company','read')->access() ||$this->permission1->method('manage_company','create')->access() || $this->permission1->method('add_user','create')->access() || $this->permission1->method('manage_user','read')->access() || $this->permission1->method('add_language','create')->access() || $this->permission1->method('add_currency','create')->access() || $this->permission1->method('soft_setting','create')->access() || $this->permission1->method('back_up','create')->access() || $this->permission1->method('back_up','read')->access() || $this->permission1->method('restore','create')->access() || $this->permission1->method('sql_import','create')->access()){?>
            <li class="treeview <?php
            if ($this->uri->segment('1') == ("company_list") || $this->uri->segment('1') == ("edit_company") || $this->uri->segment('1') == ("add_user") || $this->uri->segment('1') == ("user_list") || $this->uri->segment('1') == ("language") || $this->uri->segment('1') == ("currency_form") || $this->uri->segment('1') == ("currency_list") || $this->uri->segment('1') == ("settings")|| $this->uri->segment('1') == ("mail_setting") || $this->uri->segment('1') == ("app_setting") || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-settings"></i> <span><?php echo display('web_settings') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                     <?php if($this->permission1->method('manage_company','read')->access() || $this->permission1->method('manage_company','update')->access()){?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("company_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('company_list') ?>"><?php echo display('manage_company') ?></a></li>
                <?php }?>
                <?php if($this->permission1->method('add_user','create')->access()){?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("add_user")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_user') ?>"><?php echo display('add_user') ?></a></li>
                <?php }?>
                  <?php if($this->permission1->method('manage_user','read')->access()){?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("user_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('user_list') ?>"><?php echo display('manage_users') ?> </a></li>
                <?php }?>
                <?php if($this->permission1->method('add_language','create')->access() || $this->permission1->method('add_language','update')->access()){?>
                   <li class="<?php echo (($this->uri->segment(1)=="language" || $this->uri->segment('1') == ("editPhrase") || $this->uri->segment('1') == ("phrases"))?"active":'') ?>">
                <a href="<?php echo base_url('language') ?>">
                    
                    <?php echo display('language')?>
                   
                </a>
              
            </li>
                <?php }?>
                  <?php if($this->permission1->method('add_currency','create')->access()){?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("currency_form")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('currency_form') ?>"><?php echo display('currency') ?> </a></li>
                <?php }?>
                <?php if($this->permission1->method('soft_setting','create')->access() || $this->permission1->method('soft_setting','update')->access()){?>
                  <li  class="treeview <?php if ($this->uri->segment('1') == ("settings")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>">
                <a href="<?php echo base_url('settings') ?>" class="<?php echo (($this->uri->segment(1)=="settings")?"active":null) ?>">
                   
                    Company Settings
                   
                </a>
              
            </li>
                <?php }?>
                 <?php if($this->permission1->method('print_setting','create')->access()){?>
                 <li class="treeview <?php if ($this->uri->segment('1') == ("print_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('print_setting') ?>"><?php echo display('print_setting') ?> </a></li>
                   <?php }?>
                 <?php if($this->permission1->method('mail_setting','create')->access()){?>
                    <li class="treeview <?php if ($this->uri->segment('1') == ("mail_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('mail_setting') ?>"><?php echo display('mail_setting') ?> </a></li>
                <?php }?>
                 <li class="treeview <?php if ($this->uri->segment('1') == "app_setting"){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('app_setting') ?>"><?php echo display('app_setting') ?> </a></li>
                </ul>
            </li>
        <?php }?>
         <!-- Role permission start -->
     <?php if($this->permission1->method('add_role','create')->access() ||$this->permission1->method('role_list','read')->access() || $this->permission1->method('edit_role','create')->access() || $this->permission1->method('assign_role','create')->access()){?>
         <li  class="treeview <?php
            if ($this->uri->segment('1') == ("add_role") || $this->uri->segment('1') == ("role_list") || $this->uri->segment('1') == ("edit_role") || $this->uri->segment('1') == ("assign_role")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-key"></i> <span><?php echo display('role_permission') ?></span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
             
                    <?php if($this->permission1->method('add_role','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("add_role")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('add_role')?>"><?php echo display('add_role') ?></a></li>
                    <?php }?>
                      <?php if($this->permission1->method('role_list','read')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("role_list")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('role_list')?>"><?php echo display('role_list') ?></a></li>
                    <?php }?>
                    <?php if($this->permission1->method('user_assign','create')->access()){?>
                        <li class="treeview <?php if ($this->uri->segment('1') == ("assign_role")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('assign_role')?>"><?php echo display('user_assign_role')?></a></li>
                    <?php }?>
                 

                    </ul>
                </li>
            <?php }?>
                <!-- Role permission End -->
      <?php if($this->permission1->method('sms_configure','create')->access()){?>
                <!-- sms menu start -->
                 <li class="treeview <?php if ($this->uri->segment('1') == ("sms_setting")) { echo "active";}else{ echo " ";}?>">
                <a href="#">
                    <i class="fa fa-comments"></i> <span><?php echo display('sms'); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                      <li class="treeview <?php if ($this->uri->segment('1') == ("sms_setting")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('sms_setting')?>"><?php echo display('sms_configure'); ?></a></li>
                     
 
                </ul>
             </li>
         <?php }?>

                <!-- sms menu end -->
                 <!-- Synchronizer setting start -->
              <?php if($this->permission1->method('restore','create')->access() || $this->permission1->method('sql_import','create')->access() || $this->permission1->method('sql_import','create')->access()){?>
            <li style="display:none;" class="treeview <?php
            if ($this->uri->segment('1') == ("restore") || $this->uri->segment('1') == ("db_import")) {
                echo "active";
            } else {
                echo " ";
            }
            ?>">
                <a href="#">
                    <i class="ti-reload"></i>  <span><?php echo display('data_synchronizer') ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display:none;">
                
            <?php if($this->permission1->method('restore','create')->access()){ ?>
           <li class="treeview <?php if ($this->uri->segment('1') == ("restore")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('restore') ?>"><?php echo display('restore') ?></a></li>
           <?php }?>
                 <?php if($this->permission1->method('sql_import','create')->access()){ ?>
                <li style="display:none;" class="treeview <?php if ($this->uri->segment('1') == ("db_import")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('db_import') ?>"><?php echo display('import') ?></a></li>
                <?php }?>

                     <li style="display:none;" class="treeview  <?php if ($this->uri->segment('2') == ("backup_create")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('dashboard/backup_restore/download') ?>"><?php echo display('backup') ?></a></li>
                </ul>
            </li>
        <?php }?>
            <!-- Synchronizer setting end -->
             <?php if ($this->session->userdata('isAdmin')){?>
                 <li style="display:none;" class="treeview <?php if ($this->uri->segment('1') == ("autoupdate")){
                        echo "active";
                    } else {
                        echo " ";
                    }?>"><a href="<?php echo base_url('autoupdate/Autoupdate')?>"><i class="fa fa-cloud-download" aria-hidden="true"></i> <span><?php echo display('update_now'); ?></span></a></li> 
                 <?php }?>
                </ul>
            </li>
        <?php }?>
<!-- Software Settings menu end --> 
    <!-- custom menu start-->

        <?php  
        $path = 'application/modules/';
        $map  = directory_map($path);
        $HmvcMenu   = array();
        if (is_array($map) && sizeof($map) > 0)
        foreach ($map as $key => $value) {
            $menu = str_replace("\\", '/', $path.$key.'config/menu.php'); 
            if (file_exists($menu)) {

                if (file_exists(APPPATH.'modules/'.$key.'/assets/data/env')){
                   @include($menu);
                }
               
            }  
        }  
        ?>

           <!-- custom menu end -->


        <?php if ($this->session->userdata('isAdmin')){?>
         <li style="display:none;" class="treeview"><a href="<?php echo base_url('addon/module/index') ?>"><i class="fa fa-adn"></i> <span><?php echo display('addon'); ?></span></a></li>

         
           <?php }?>
            
 
        
    </ul> 
</div> <!-- /.sidebar -->

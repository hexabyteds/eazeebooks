
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('sales_return', array('class' => 'form-inline')) ?>
                        <?php
                        $today = date('Y-m-d');
                        ?>
                        <div class="form-group">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="<?php echo $from_date?>" placeholder="<?php echo display('start_date') ?>" >
                        </div> 

                        <div class="form-group">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo $to_date?>">
                        </div>  

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                         <a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>

                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span class="text-center">
                                <?php echo display('invoice_return') ?>
                             </span>
                              <span class="padding-lefttitle">
 <?php if($this->permission1->method('all_report','read')->access()){ ?>
                    <a class="btn btn-success m-b-5 m-r-2" href="<?php echo base_url('todays_report') ?>"><?php echo display('todays_report') ?></a>
                     <?php } ?>
        <?php if($this->permission1->method('todays_purchase_report','read')->access()){ ?>
                    <a href="<?php echo base_url('purchase_report') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('purchase_report') ?> </a>
                  <?php }?>
                  <?php if($this->permission1->method('product_sales_reports_date_wise','read')->access()){ ?>
                    <a href="<?php echo base_url('product_wise_sales_report') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('sales_report_product_wise') ?> </a>
                    <?php }?>
    <?php if($this->permission1->method('todays_sales_report','read')->access() && $this->permission1->method('todays_purchase_report','read')->access()){ ?>
                    <a href="<?php echo base_url('profit_report') ?>" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('profit_report') ?> </a>
                    <?php }?>                 
                              </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea">
                            <div class="paddin5ps">
                           <table class="print-table" width="100%">
                                                
                <tr>
                    <td align="left" class="print-table-tr">
                        <img src="<?php echo base_url().$setting->logo;?>" alt="logo">
                    </td>
                    <td align="center" class="print-cominfo">
                        <span class="company-txt">
                            <?php echo $company_info[0]['company_name'];?>
                           
                        </span><br>
                        <?php echo $company_info[0]['address'];?>
                        <br>
                        <?php echo $company_info[0]['email'];?>
                        <br>
                         <?php echo $company_info[0]['mobile'];?>
                        
                    </td>
                   
                     <td align="right" class="print-table-tr">
                        <date>
                        <?php echo display('date')?>: <?php
                        echo date('d-M-Y');
                        ?> 
                    </date>
                    </td>
                </tr>            
                                   
                                </table>
                            </div>
                        <div class="table-responsive paddin5ps">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('invoice_id') ?></th>
                                        <th><?php echo display('customer_name') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('total_amount') ?></th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($return_list) {
                                        $sl = 1;
                                        foreach($return_list as $returns){
                                        ?>
                                        
                            <tr>
                                <td><?php echo $sl++;?></td>
                                <td><?php echo $returns['invoice_id'];?> </td>
                                <td><?php echo $returns['customer_name'];?> </td>
                                <td><?php echo $returns['final_date'];?></td>
                                <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$returns['net_total_amount'] : $returns['net_total_amount'].' '. $currency) ?></td>
                               
                        </tr>
                                    
                                    <?php
                                }}else{
                                ?>
                             <tr>
                                <td colspan="5" class="text-center">No Result Found</td>
                             </tr>
                            <?php }?>
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                     </div>

                </div>
            </div>
        </div>
   
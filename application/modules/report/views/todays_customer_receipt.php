
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('todays_customerwise_received', array('class' => 'form-inline', 'method' => 'post')) ?>
                        <?php
                        $today = $today;

                        ?>
                  <div class="row">
                        <div class="col-sm-6">
                            <label class="col-sm-5" for="customer_id"><?php echo display('customer_name') ?></label>
                            <div class="col-sm-7">
                            <select  name="customer_id" class="form-control" id="customer_id">
                                <option value="">--select one -- </option>
                                <?php
                                foreach ($all_customer as $customer) {
                                    ?>
                                    <option value="<?php echo $customer->customer_id; ?>" <?php if($customer->customer_id == $customer_id){echo 'selected';}?>><?php echo $customer->customer_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        </div> 
                        <div class="col-sm-6">
                            <label class="col-sm-2" ><?php echo display('date') ?></label>
                            <div class="col-sm-4">
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('date') ?>" value="<?php echo $today;?>">
                        </div> 

                        <div class="col-sm-2">
                         <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                     </div>
                    </div>

                       
                  
                      </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Todays sales report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span><?php echo display('todays_customer_receipt') ?> </span>
                            <span class="padding-lefttitle">
                             <?php if($this->permission1->method('todays_sales_report','read')->access()){ ?>
                    <a href="<?php echo base_url('sales_report') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('sales_report') ?> </a>
                <?php }?>
        <?php if($this->permission1->method('todays_purchase_report','read')->access()){ ?>
                    <a href="<?php echo base_url('purchase_report') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('purchase_report') ?> </a>
                  <?php }?>
                  <?php if($this->permission1->method('product_sales_reports_date_wise','read')->access()){ ?>
                    <a href="<?php echo base_url('product_wise_sales_report') ?>" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('sales_report_product_wise') ?> </a>
                    <?php }?>
    <?php if($this->permission1->method('todays_sales_report','read')->access() && $this->permission1->method('todays_purchase_report','read')->access()){ ?>
                    <a href="<?php echo base_url('profit_report') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('profit_report') ?> </a>
                    <?php }?>
 
                                <a  class="btn btn-warning m-b-5 m-r-2" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
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
                                <br>
                            <div class="table-responsive paddin5ps">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('sl') ?></th>
                                            <th><?php echo display('customer_name') ?></th>
                                            <th class="text-center"><?php echo display('description') ?></th>
                                            <th class="text-right"><?php echo display('receipt') ?></th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                 $totals = 0;
                            if ($todays_customer_receipt) {
                                $sl = 0;
                                foreach ($todays_customer_receipt as $single) {
                                    $sl++;
                                    ?>
                                <tr>
                                    <td> <?php echo $sl; ?></td>
                                    <td> <?php echo html_escape($single->HeadName); ?></td>
                                    <td><?php echo html_escape($single->Narration); ?></td>
                                    <td class="text-right"><?php
                                        echo (($position == 0) ? $currency.' ' . number_format($single->Credit,2) : number_format($single->Credit,2).' '. $currency); 
                                        $totals +=$single->Credit;
                                        ?></td>
                                </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <th class="text-center" colspan="4"><?php echo display('not_found'); ?></th>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right"><b><?php echo display('total'); ?></b></td>
                                            <td class="text-right"><b><?php
                                        echo (($position == 0) ? $currency.' ' .number_format($totals,2) :number_format($totals,2).' '. $currency); 
                                       
                                        ?></b></td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


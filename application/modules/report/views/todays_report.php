<!-- Todays sales report -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span><?php echo display('todays_sales_report') ?> </span>
                        <span class="padding-lefttitle">
            <?php if($this->permission1->method('todays_sales_report','read')->access()){ ?>
                <a href="<?php echo base_url('sales_report') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('sales_report') ?> </a>
            <?php }?>
         <?php if($this->permission1->method('todays_purchase_report','read')->access()){ ?>
                <a href="<?php echo base_url('purchase_report') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('purchase_report') ?> </a>
              <?php }?>
              <?php if($this->permission1->method('product_sales_reports_date_wise','read')->access()){ ?>
                <a href="<?php echo base_url('product_wise_sales_report') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('sales_report_product_wise') ?> </a>
                <?php }?>
         <?php if($this->permission1->method('todays_sales_report','read')->access() && $this->permission1->method('todays_purchase_report','read')->access()){ ?>
                <a href="<?php echo base_url('profit_report') ?>" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('profit_report') ?> </a>
                <?php }?>

                <a  class="btn btn-success m-b-5 m-r-2" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
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
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sales_date') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo display('customer_name') ?></th>
                                        <th class="text-right"><?php echo display('total_amount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($sales_report) {
                                        foreach($sales_report as $salereport){
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $salereport['sales_date']?></td>
                                            <td>
                                                <a href="<?php echo base_url() . 'invoice_details/'.$salereport['invoice_id']; ?>">
                                                    <?php echo $salereport['invoice_id']?>
                                                </a>
                                            </td>
                                            <td><?php echo $salereport['customer_name']?></td>
                                            <td class="text-right"><?php

                                             echo (($position == 0) ? $currency.' '.$salereport['total_amount'] : $salereport['total_amount'].' '. $currency) ?></td>
                                        </tr>
                                        <?php }?>
                                    <?php } else {
                                        ?>
                                        <tr>
                                            <th class="text-center" colspan="6"><?php echo display('not_found'); ?></th>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" align="right">&nbsp;<b><?php echo display('total_sales') ?>:</b></td>
                                        <td class="text-right"><b><?php
                                                 
                                         echo (($position == 0) ? $currency.' ' .$sales_amount: $sales_amount.' '. $currency) ?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Todays purchase report -->
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('todays_purchase_report') ?></h4>
                        <p class="text-right">
                            <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')"><?php echo display('print') ?></a>
                        </p>
                    </div>
                </div>
                <div class="panel-body">


                    <div id="purchase_div">
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
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('purchase_date') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th class="text-right"><?php echo display('total_amount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($purchase_report) {
                                        foreach ($purchase_report as $purchases) {
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $purchases['prchse_date']?></td>
                                            <td>
                                                <a href="<?php echo base_url() . 'purchase_details/'.$purchases['purchase_id']; ?>">
                                                    <?php echo $purchases['chalan_no']?>
                                                </a>
                                            </td>
                                            <td><?php echo $purchases['supplier_name']?></td>
                                            <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$purchases['grand_total_amount'] : $purchases['grand_total_amount'].' '. $currency) ?></td>
                                        </tr>
                                        <?php }?>
                                        <?php } else {
                                        ?>
                                        <tr>
                                            <th class="text-center" colspan="6"><?php echo display('not_found'); ?></th>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" align="right">&nbsp; <b><?php echo display('total_purchase') ?>: </b></td>
                                        <td class="text-right"><b><?php echo (($position == 0) ? $currency.' '.$purchase_amount : $purchase_amount.' '.$currency) ?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

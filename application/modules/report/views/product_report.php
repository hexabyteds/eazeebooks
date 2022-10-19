
                     <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('product_wise_sales_report', array('class' => 'form-inline', 'method' => 'get')) ?>
                        
                            <div class="col-sm-3">
                           
                            <label class="col-sm-4" for="product"><?php echo display('product') ?></label>
                            <div class="col-sm-8">
                            <select name="product_id" class="form-control">
                                <option value=""></option>
                                <?php foreach($product_list as $productss){?>
                               <option value="<?php echo  $productss['product_id']?>" <?php if($productss['product_id'] == $product_id){echo 'selected';}?>><?php echo  $productss['product_name']?></option>
                                <?php }?>    
                            </select>
                       </div>
                            </div>
                            <div class="col-sm-7">
                               <div class="col-sm-6"> 
                            <label class="col-sm-4" for="from_date"><?php echo display('start_date') ?></label>
                            <div class="col-sm-8">
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="<?php echo $from?>">
                       
                             </div>
                         </div>
                        <div class="col-sm-6">
                            <label class="col-sm-4" for="to_date"><?php echo display('end_date') ?></label>
                            <div class="col-sm-8">
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo $to?>">
                        </div>  
                        </div>
                            </div>
                            <div class="col-sm-2">
                                  <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <a  class="btn btn-warning" href="#" onclick="printDiv('purchase_div')"><?php echo display('print') ?></a>
                            </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

       

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span><?php echo display('sales_report_product_wise') ?></span>
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
                             </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="purchase_div" class="table-responsive ">
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
                                            <th><?php echo display('product_name') ?></th>
                                            <th><?php echo display('product_model') ?></th>
                                            <th><?php echo display('invoice_no') ?></th>
                                            <th><?php echo display('customer_name') ?></th>
                                            <th><?php echo display('rate') ?></th>
                                            <th><?php echo display('total_ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($product_report) {
                                            foreach($product_report as $reporst){
                                            ?>
                                           
        <tr>
            <td><?php echo $reporst['sales_date']?></td>
            <td><?php echo $reporst['product_name']?></td>
            <td><?php echo $reporst['product_model']?></td>
            <td><?php echo $reporst['invoice']?></td>
            <td><?php echo $reporst['customer_name']?></td>
            <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$reporst['rate'] : $reporst['rate'].' '.$currency) ?></td>
            <td class="text-right"><?php echo (($position == 0) ? $currency.' '. $reporst['total_price'] : $reporst['total_price'].' '.$currency) ?></td>
        </tr>
                                            
                                            <?php
                                        }}
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" align="right">&nbsp; <b><?php echo display('total_ammount') ?></b></td>
                                            <td class="text-right"><b><?php echo (($position == 0) ? $currency.' '.$sub_total : $sub_total.' '.$currency) ?></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
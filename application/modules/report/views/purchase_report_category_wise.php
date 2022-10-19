

              <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('purchase_report_categorywise', array('class' => 'form-inline', 'method' => 'get')) ?>
                        
                            <div class="col-sm-3">
                           
                            <label class="col-sm-4" for="category"><?php echo display('category') ?></label>
                            <div class="col-sm-8">
                           <select  name="category" class="form-control" id="category">
                                <option value="">--select one -- </option>
                                <?php
                                foreach ($category_list as $category) {
                                    ?>
                                    <option value="<?php echo $category['category_id']; ?>" <?php if($category['category_id'] == $category_id){echo 'selected';}?>><?php echo $category['category_name']; ?></option>
                                <?php } ?>
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
                            <span><?php echo display('category_wise_purchase_report') ?> </span>
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
                        <div id="purchase_div">
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
                                            <th><?php echo display('category_name') ?></th>
                                            <th><?php echo display('product_name') ?></th>
                                            <th><?php echo display('model') ?></th>
                                            <th><?php echo display('date') ?></th>
                                            <th><?php echo display('quantity') ?></th>
                                            <th><?php echo display('ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0 ;
                                        if ($purchase_report_category_wise) {
                                            foreach ($purchase_report_category_wise as $single) {
                                                ?>
                                                <tr>
                                        <td><?php echo html_escape($single->category_name); ?></td>
                                        <td><?php echo html_escape($single->product_name); ?></td>
                                        <td><?php echo html_escape($single->product_model); ?></td>
                                        <td><?php echo html_escape($single->purchase_date); ?></td>
                                        <td><?php echo html_escape($single->quantity); ?></td>
                                        <td class="text-right"><?php echo (($position == 0) ? $currency.' '.number_format($single->total_amount,2) : number_format($single->total_amount,2).' '. $currency);
                                        $total +=$single->total_amount;
                                         ?></td>
      
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <th class="text-center" colspan="6"><?php echo display('not_found'); ?></th>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-right"><b><?php echo display('total') ?></b></td>
                                            <td class="text-right"><b><?php echo (($position == 0) ? $currency.' '.number_format($total,2) : number_format($total,2).' '. $currency) ?></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
   
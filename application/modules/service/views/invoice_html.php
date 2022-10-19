
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div class="row print_header">
                                <table>
                                    <tr>
                                <div class="col-sm-8 company-content">
                                    
                                    <img src="<?php
                                    if (isset($setting->invoice_logo)) {
                                        echo base_url().$setting->invoice_logo;
                                    }
                                    ?>" class="img-bottom-m" alt="" >
                                    <br>
                                    <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
                                    <address class="margin-top10">
                                        <strong class="company_name_p"><?php echo $company_info[0]['company_name']?></strong><br>
                                        <?php echo $company_info[0]['address']?><br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr><?php echo $company_info[0]['mobile']?> <br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr> 
                                        <?php echo $company_info[0]['email']?><br>
                                        <abbr><b><?php echo display('website') ?>:</b></abbr> 
                                        <?php echo $company_info[0]['website']?><br>
                                        
                                         <abbr><?php echo $tax_regno?></abbr>
                                    </address>
                                   
                                  

                                </div>
                                
                                 
                                <div class="col-sm-4 text-left invoice-address">
                                    <h2 class="m-t-0"><?php echo display('service') ?></h2>
                                    <div><?php echo display('voucher_no') ?>: <?php echo $invoice_id?></div>
                                    <div class="m-b-15"><?php echo display('hanging_over') ?>:<?php echo $final_date?> </div>

                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

                                    <address class="customer_name_p">  
                                        <strong  class="c_name" ><?php echo $customer_name?> </strong><br>
                                        <?php if ($customer_address) { ?>
                                           <?php echo $customer_address?> 
                                        <?php } ?>
                                        <br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr>
                                        <?php if ($customer_mobile) { ?>
                                           <?php echo $customer_mobile?>  
                                        <?php }if ($customer_email) {
                                            ?>
                                            <br>
                                            <abbr><b><?php echo display('email') ?>:</b></abbr> 
                                             <?php echo $customer_email?>  
                                            
                                        <?php } ?>
                                    </address>
                                </div>
                            </tr>
                        </table>
                            </div> 

                   <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center"><?php echo display('service_name') ?></th>
                                            
                                            <th class="text-right"><?php echo display('quantity') ?></th>
                                         
                                            <?php if ($discount_type == 1) { ?>
                                                <th class="text-right"><?php echo display('discount_percentage') ?> %</th>
                                            <?php } elseif ($discount_type == 2) { ?>
                                                <th class="text-right"><?php echo display('discount') ?> </th>
                                            <?php } elseif ($discount_type == 3) { ?>
                                                <th class="text-right"><?php echo display('fixed_dis') ?> </th>
                                            <?php } ?>
                                        
                                            <th class="text-right"><?php echo display('charge') ?></th>
                                            <th class="text-right"><?php echo display('ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($invoice_detail as $details){?>
                                        <tr>
                                            <td class="text-center"><?php echo $details['sl']?></td>
                                            <td class="text-center"><div><strong><?php echo $details['service_name']?></strong></div></td>
                                            <td align="right"><?php echo $details['qty']?></td>

                                            <?php if ($discount_type == 1) { ?>
                                                <td align="right"><?php echo $details['discount']?></td>
                                            <?php } else { ?>
                                                <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['discount'] : $details['discount'].' '.$currency) ?></td>
                                            <?php } ?>

                                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['charge']: $details['charge'].' '.$currency) ?></td>
                                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['total']: $details['total'].' '.$currency) ?></td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <td class="text-right" colspan="2"><b><?php echo display('grand_total') ?>:</b></td>
                                          
                                            <td align="right" ><b><?php echo $subTotal_quantity?></b></td>
                                            <td></td>
                                            <td></td>
                                            <td align="right" ><b><?php echo (($position == 0) ? $currency.' '.$subTotal_ammount: $subTotal_ammount.' '.$currency) ?></b></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <div class="row">

                                <div class="col-xs-8 invoicefooter-content">

                                    <p></p>
                                    <p><strong><?php echo $invoice_detail[0]['details']?></strong></p> 
                                   
                                </div>
                                <div class="col-xs-4 inline-block">

                                   <table class="table">
                                        <?php
                                        if ($invoice_detail[0]['total_discount'] != 0) {
                                            ?>
                                            <tr>
                                                <th><?php echo display('total_discount') ?> : </th>
                                                <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$total_discount : $total_discount.' '.$currency) ?> </td>
                                            </tr>
                                            <?php
                                        }
                                        if ($invoice_detail[0]['total_tax'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="text-left"><?php echo display('tax') ?> : </th>
                                                <td  class="text-right"><?php echo (($position == 0) ? $currency.' '.$total_tax : $total_tax.' '.$currency) ?> </td>
                                            </tr>
                                        <?php } ?>
                                         <?php if ($invoice_detail[0]['shipping_cost'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="text-left"><?php echo 'Shipping Cost' ?> : </th>
                                                <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$shipping_cost :  $shipping_cost.' '.$currency) ?> </td>
                                            </tr>
                                        <?php } ?>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('previous'); ?> :</th>
                                            <td class="text-right grand_total"><?php echo (($position == 0) ? $currency.' '.$previous : $previous.' '.$currency) ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('grand_total') ?> :</th>
                                            <td class="text-right grand_total"><?php echo (($position == 0) ? $currency.' '.$total_amount : $total_amount.' '.$currency) ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-left grand_total"><?php echo display('paid_ammount') ?> : </th>
                                            <td class="text-right grand_total"><?php echo (($position == 0) ? $currency.' '.$paid_amount : $paid_amount.' '.$currency) ?></td>
                                        </tr>                
                                        <?php
                                        if ($invoice_detail[0]['due_amount'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="text-left grand_total"><?php echo display('due') ?> : </th>
                                                <td  class="text-right grand_total"><?php echo (($position == 0) ? $currency.' '.$due_amount : $due_amount.' '.$currency) ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>

                                   

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                 <div class="inv-footer-left">
                                        <?php echo display('received_by') ?>
                                    </div>
                                </div>
                               <div class="col-sm-4"></div>
                                     <div class="col-sm-4"> <div class="inv-footer-right">
                                        <?php echo display('authorised_by') ?>
                                    </div></div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="<?php echo base_url('add_service'); ?>"><?php echo display('cancel') ?></a>
                        <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>
        </div>
  
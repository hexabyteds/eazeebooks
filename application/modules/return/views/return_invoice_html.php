
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
	                <div id="printableArea">
	                    <div class="panel-body">
	                        <div class="row">
	                        	
	                            <div class="col-sm-8 company-content">
	                                 <img src="<?php if (isset($setting->invoice_logo)) {echo base_url().$setting->invoice_logo; }?>" class="" alt="">
	                                <br>
	                                <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
	                                <address class="margin-top10">
	                                    <strong><?php echo $company_info[0]['company_name']?></strong><br>
	                                    <?php echo $company_info[0]['address']?><br>
	                                    <abbr><b><?php echo display('mobile') ?>:</b></abbr><?php echo $company_info[0]['mobile']?> <br>
	                                    <abbr><b><?php echo display('email') ?>:</b></abbr> 
	                                    <?php echo $company_info[0]['email']?><br>
	                                    <abbr><b><?php echo display('website') ?>:</b></abbr> 
	                                    <?php echo $company_info[0]['website']?>
	                                </address>
	                            </div>
	                         
	                            <div class="col-sm-4 text-left invoice-details-billing">
	                                <h2 class="m-t-0"><?php echo display('return') ?></h2>
	                                <div><?php echo display('return_id') ?>: <?php echo $invoice_no?></div>
	                                 <div><?php echo display('invoice_id') ?>: <?php echo $invoice_id?></div>
	                                <div class="m-b-15"><?php echo display('billing_date') ?>: <?php echo $final_date?></div>

	                                <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

	                                  <address class="details-address">  
	                                    <strong><?php echo $customer_name?> </strong><br>
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
	                        </div> <hr>

	                        <div class="table-responsive m-b-20">
	                            <table class="table table-striped table-bordered">
	                                <thead>
	                                    <tr>
	                                        <th class="text-center"><?php echo display('sl') ?></th>
	                                        <th class="text-center"><?php echo display('product_name') ?></th>
	                                        <th class="text-center"><?php echo display('quantity') ?></th>
	                                        
	                                        
	                                        <th class="text-center"><?php echo display('deduction') ?> %</th>
	                                       
	                                        <th class="text-center"><?php echo display('rate') ?></th>
	                                        <th class="text-center"><?php echo display('ammount') ?></th>
	                                    </tr>
	                                </thead>
	                                <tbody>
										
										<?php foreach($invoice_all_data as $details){?>
										<tr>
	                                    	<td class="text-center"><?php echo $details['sl']?></td>
	                                        <td class="text-center"><div><strong><?php echo $details['product_name']?> - (<?php echo $details['product_model']?>)</strong></div></td>
	                                        <td align="center"><?php echo $details['ret_qty']?></td>

	                                        <?php if ($discount_type == 1) { ?>
	                                        <td align="center"><?php echo $details['deduction']?></td>
	                                        <?php }else{ ?>
	                                        <td align="center"><?php echo (($position==0)?$currency.' '.$details['deduction']:$details['deduction'].' '.$currency) ?></td>
	                                        <?php } ?>
	                                        
	                                        <td align="center"><?php echo (($position==0)?$currency.' '.$details['product_rate']:$details['product_rate'].' '. $currency) ?></td>
	                                        <td align="center"><?php echo (($position==0)?$currency.' '. $details['total_ret_amount']:$details['total_ret_amount'].' '.$currency) ?></td>
	                                    </tr>
	                                    <?php }?>
	                                </tbody>
	                                <tfoot>
	                                	<td align="center" colspan="1"><b><?php echo display('grand_total')?>:</b></td>
	                                	<td></td>
	                                	<td align="center" ><b><?php echo $subTotal_quantity?></b></td>
	                                	<td></td>
	                                	<td></td>
	                                	
	                                	<td align="center" ><b><?php echo (($position==0)?$currency.' '.$subTotal_ammount:$subTotal_ammount.' '.$currency) ?></b></td>
	                                </tfoot>
	                            </table>
	                        </div>
	                        <div class="row">
		                        
		                        	<div class="col-xs-8 invoicefooter-content">
		                                <p><strong><?php echo display('note') ?> : </strong><?php echo $note?></p>
		                                
		                                <div  class="">
											
										</div>
		                            </div>
		                            <div class="col-xs-4 inline-block">

				                        <table class="table">
				                            <?php
			                                	if ($invoice_all_data[0]['total_deduct'] != 0) {
			                                ?>
				                            	<tr>
				                            		<th class="border-bottom-top"><?php echo display('deduction') ?> : </th>
				                            		<td class="border-bottom-top"><?php echo (($position==0)?$currency.' '.$total_deduct:$total_deduct.' '.$currency) ?> </td>
				                            	</tr>
				                            <?php } 
				                              	if ($invoice_all_data[0]['total_tax'] != 0) {
			                                ?>
				                            	<tr>
				                            		<th class="border-bottom-top"><?php echo display('tax') ?> : </th>
				                            		<td class="border-bottom-top"><?php echo (($position==0)?$currency.' '.$total_tax:$total_tax.' '.$currency) ?> </td>
				                            	</tr>
				                            <?php } ?>
				                            	<tr>
				                            		<th class="grand_total"><?php echo display('grand_total') ?> :</th>
				                            		<td class="grand_total"><?php echo (($position==0)?$currency.' '.$totalnamount:$totalnamount.' '.$currency) ?></td>
				                            	</tr>
				                            	
			                            </table>
		                   
		                                <div class="sig_div">
												<?php echo display('authorised_by') ?>
										</div>
		                            
		                        </div>
	                        </div>
	                    </div>
	                </div>

                     <div class="panel-footer text-left">
                     	<a  class="btn btn-danger" href="<?php echo base_url('return_form');?>"><?php echo display('cancel') ?></a>
						<button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>
						
                    </div>
                </div>
            </div>
        </div>
  


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
	                <div id="printableArea">
	                    <div class="panel-body">
	                        <div class="row">
	                        	
	                            <div class="col-sm-8 purchasedetails-address">
	                                 <img src="<?php if (isset($Web_settings[0]['invoice_logo'])) {echo $Web_settings[0]['invoice_logo']; }?>" class="" alt="">
	                                <br>
	                                <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
	                                <address>
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
	                                <h2 class="m-t-0"><?php echo display('supplier_return') ?></h2>
	                                <div><?php echo display('return_id') ?>: <?php echo $invoice_no?></div>
	                                 <div><?php echo display('purchase_id') ?>: <?php echo $purchase_id?></div>
	                                <div class="m-b-15"><?php echo display('billing_date') ?>: <?php echo $final_date?></div>

	                                <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

	                                  <address class="details-address">  
	                                    <strong><?php echo $supplier_name?> </strong><br>
	                                    <?php if ($address) { ?>
		                                <?php echo $address?>
		                                <?php } ?>
	                                    <br>
	                                    <abbr><b><?php echo display('mobile') ?>:</b></abbr>
	                                   
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
	                                        
	                                        <th class="text-center"><?php echo display('rate') ?></th>
	                                        <th class="text-center"><?php echo display('ammount') ?></th>
	                                    </tr>
	                                </thead>
	                                <tbody>
									<?php foreach($return_detail as $details){?>
										<tr>
	                                    	<td class="text-center"><?php echo $details['sl']?></td>
	                                        <td class="text-center"><div><strong><?php echo $details['product_name']?></strong></div></td>
	                                        <td align="center"><?php echo $details['ret_qty']?></td>
	                                        <td align="center"><?php echo (($position==0)?$currency.' '.$details['price']:$details['price'].' '.$currency) ?></td>
	                                        <td align="center"><?php echo (($position==0)?$currency.' '.$details['total_ret_amount']:$details['total_ret_amount'].' '.$currency) ?></td>
	                                    </tr>
	                                   <?php }?>
	                                </tbody>
	                                <tfoot>
	                                	<td align="center" colspan="1"><b><?php echo display('total')?>:</b></td>
	                                    <td></td>
	                                	<td align="center" ><b><?php echo $subTotal_quantity?></b></td>
	                                	<td></td>
	                                	<td align="center" ><b><?php echo (($position==0)?$currency.' '.$subTotal_ammount:$subTotal_ammount.' '.$currency) ?></b></td>
	                                </tfoot>
	                            </table>
	                        </div>
	                        <div class="row">
		                        
		                        	<div class="col-xs-8 invoicefooter-content">
		                                <p><strong><?php echo display('note') ?> : </strong><?php echo $note?></p>
		                               
		                                <div>
												
										</div>
		                            </div>
		                            <div class="col-xs-4 inline-block">

				                        <table class="table">
				                     
				                            	
				                            	<tr>
				                            		<th class="grand_total"><?php echo display('grand_total') ?> :</th>
				                            		<td class="grand_total text-center"><?php echo (($position==0)?$currency.' '.$subTotal_ammount:$subTotal_ammount.' '.$currency) ?></td>
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
  
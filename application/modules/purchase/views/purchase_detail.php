
	    <div class="row">
            <div class="col-sm-12">
                <?php if($this->permission1->method('add_purchase','create')->access()){ ?>
                  <a href="<?php echo base_url('add_purchase')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_purchase')?> </a>
                  <?php }?>
                <?php if($this->permission1->method('manage_supplier','read')->access()){ ?>
                  <a href="<?php echo base_url('purchase_list')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_purchase')?> </a>
              <?php }?>

               
            </div>
        </div>


		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <span><?php echo display('purchase_details') ?></span>
		                    <span class="print-button">
		                     <button  class="btn btn-info " onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button></span>
		                </div>
		            </div>
		            <div class="panel-body" id="printableArea">
		    
           <div class="row purchasedetails-header">
                                
                                <div class="col-sm-8 purchasedetails-address">
                                    <?php foreach($company_info as $cominfo){?>
                                    
                                    <img src="<?php
                                    if (isset($setting->invoice_logo)) {
                                        echo base_url().$setting->invoice_logo;
                                    }
                                    ?>" class="" alt="">
                                    <br>  <br>
                                      
                                    <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
                                    <address>
                                        <strong class="companyname" ><?php echo $cominfo['company_name']?></strong><br>
                                        <?php echo $cominfo['address']?><br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr><?php echo $cominfo['mobile']?> <br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr> 
                                       <?php echo $cominfo['email']?> <br>
                                        <abbr><b><?php echo display('website') ?>:</b></abbr> 
                                       <?php echo $cominfo['website']?><br>
                                       <?php echo $cominfo['building_no']?>,    <?php echo $cominfo['street_name']?>,
                                      <?php echo $cominfo['district']?> , <?php echo $cominfo['city']?>, <?php echo $cominfo['postal_code']?> ,
                                       <?=$cominfo['country']?> 
                                       <br>  Additional No:   <?=$cominfo['additional_no']?>
                                        <br> 
                                       Vat Number:   <?=$cominfo['vat_no']?>
                                         <br>  Other Buyer ID:   <?=$cominfo['other_buyer_no']?>
                                         
                                        <?php }?>
                                        
                                    </address>
                                   
                                  

                                </div>
                                
                                 
                                <div class="col-sm-4 text-left invoice-details-billing">
                                    <h2 class="m-t-0"><?php echo display('purchase') ?></h2>
                                    <div><?php echo display('invoice_no') ?>: <?php echo $chalan_no;?></div>
                                    <div class="m-b-15"><?php echo display('billing_date') ?>: <?php echo $final_date;?></div>

                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

                                    <address class="details-address">  
                                        <strong class="companyname"><?php echo $supplier_detail[0]['supplier_name'];?> </strong><br>
                                       <?php echo $supplier_detail[0]['buiding_no'];?>,
                                       <?php echo $supplier_detail[0]['address2'];?>
                                        <?php echo $supplier_detail[0]['city'];?>
                                         <?php echo $supplier_detail[0]['state'];?>,
                                          <?php echo $supplier_detail[0]['country'];?>
                                           <?php echo $supplier_detail[0]['postal_code'];?>
                                         <br> Additional No:  <?php echo $supplier_detail[0]['additional_number'];?> <br>
                                          Vat Number:  <?php echo $supplier_detail[0]['vat_number'];?>
                                           <br>  Other Seller ID:   <?=$supplier_detail[0]['other_seller_id']?>
                                    </address>
                                </div>
                                
                                
                                
                            </div> 
                            
                            
                            

                          <br>


		                <div class="table-responsive paddin5ps">
		                    <table  class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('product_name') ?></th>
										<th class="text-center"><?php echo display('quantity') ?></th>
										<th class="text-center"><?php echo display('rate') ?></th>
											<th class="text-center">Discount</th>
											
												<th class="text-center">Tax Rate</th>
												
													<th class="text-center">Tax Amount</th>
													
													
										<th class="text-center"><?php echo display('total_ammount') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($purchase_all_data) {
								?>
								<?php foreach($purchase_all_data as $details){ ?>
									<tr>
										<td><?php echo $details['sl']?></td>
										<td>
											
										<?php echo $details['product_name'].' -('.$details['product_model'].')'?>	
											
										</td>
										<td class="text-right"><?php echo $details['quantity']?></td>
										<td class="text-right"><?php echo (($position==0)?$currency.' '.$details['rate']:$details['rate'].' '.$currency) ?></td>
                                            <td class="text-right"><?php echo $details['discount']?></td>
                                            
                                            <td class="text-right"><?php echo $details['tax_rate']?></td>
                                            
                                            <td class="text-right"><?php echo $details['tax_amount']?></td>
													
													
										<td class="text-right"><?php echo (($position==0)?$currency.' '.$details['total_amount']:$details['total_amount'].' '.$currency) ?></td>
									</tr>
								
								<?php
							}}
								?>
								</tbody>
								<tfoot>
									<tr>
										<td class="text-right" colspan="7"><b><?php echo display('total') ?>:</b></td>
										<td  class="text-right"><b><?php echo (($position==0)?$currency.' '.$total:$total.' '.$currency) ?></b></td>
									</tr>
									
									<tr>
										<td class="text-right" colspan="7"><b>Total Tax:</b></td>
										<td  class="text-right"><b><?php echo $currency. number_format($total_tax, 2, '.', ''); ?></b></td>
									</tr>
									
									
									 <?php if($discount > 0){?>
									<tr>
										<td class="text-right" colspan="7"><b><?php echo display('discounts') ?>:</b></td>
										<td  class="text-right"><b><?php echo (($position==0)?$currency.' '.$discount:$discount.' '.$currency) ?></b></td>
									</tr>
								<?php }?>
									<tr>
										<td class="text-right" colspan="7"><b><?php echo display('grand_total') ?>:</b></td>
										<td  class="text-right"><b><?php echo (($position==0)?$currency.' '.$sub_total_amount:$sub_total_amount.' '. $currency) ?></b></td>
									</tr>
									 <?php if($paid_amount > 0){?>
									<tr>
										<td class="text-right" colspan="7"><b><?php echo display('paid_amount') ?>:</b></td>
										<td  class="text-right"><b><?php echo (($position==0)?$currency.' '.$paid_amount:$paid_amount.' '.$currency) ?></b></td>
									</tr>
								<?php }?>
                              <?php if($due_amount > 0){?>
									<tr>
										<td class="text-right" colspan="7"><b><?php echo display('due_amount') ?>:</b></td>
										<td  class="text-right"><b><?php echo (($position==0)?$currency.' '.$due_amount:$due_amount.' '. $currency) ?></b></td>
									</tr>
								<?php }?>
								</tfoot>
		                    </table>
		                 
		                </div>
		                
		            </div>
		        </div>
		    </div>
		</div>
	
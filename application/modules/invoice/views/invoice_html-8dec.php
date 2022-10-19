  <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea" onload="printDiv('printableArea')">
                        <div class="panel-body">
                            <div class="row print_header">
                                <div class="col-md-6">      

                                   <img class="barcode-img" src="<?php echo base_url();?>my-assets/image/sales_qr/<?php echo $invoice_id?>.png" > </div>
                         <div class="col-md-6">        <h4 class="tax-invoice">فاتورة ضريبية<br>Tax Invoice</h4></div>
                            
                            <div class="row">
                                
  
            
          <div class="col-sm-7" >
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
                                         <br>  Other Seller ID:   <?=$cominfo['other_buyer_no']?>
                                         
                                        <?php }?>
                                        
                                        
                                      
                                        
                                    </address>
                                   
                                  

                                </div>
                                
                                 
                                <div class="col-sm-4 ">
                                  
                                 <br><br><br>
                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

                                    <address class="details-address" style="width:250px;">   
                                        <strong class="companyname"><?php echo $supplierData[0]['customer_name'];?> </strong><br>
                                        
                                         Invoice Number:<?php echo $invoice_id?> <br>
Invoice Issue Date :<?php echo date("d-M-Y",strtotime($final_date));?> <br>

<br><br>
                                       <?php echo $supplierData[0]['buiding_no'];?>,
                                       <?php echo $supplierData[0]['address2'];?>
                                        <?php echo $supplierData[0]['city'];?>
                                         <?php echo $supplierData[0]['state'];?>,
                                          <?php echo $supplierData[0]['country'];?>
                                           <?php echo $supplierData[0]['postal_code'];?>
                                         <br> Additional No:  <?php echo $supplierData[0]['additional_number'];?> <br>
                                          Vat Number:  <?php echo $supplierData[0]['vat_number'];?>
                                           <br>  Other Buyer ID:   <?=$supplierData[0]['other_bayer_id']?>
                                    </address>
                                </div>
                                
                                
                                   
                                   
                                </div>  
                                
                                </div>
                              
                                 
                                    
                                    
                <div class="col-sm-12 table-responsive paddin5ps">
            <style>
                .table_invoice >tbody>tr>td{ padding:1px !important; }
            </style>
          <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
       <th>Nature of goods of services<br>
       طبيعة سلع الخدمات</th>
       <th>Unit Price <br>سعر الوحدة</th>
       <th>Quantity<bR>كمية</th>
       <th>Taxable Amount<br>المبلغ الخاضع للضريبة</th>
     
	      <?php if($is_discount > 0){ ?>
                                            <?php if ($discount_type == 1) { ?>
                                                <th>Discount %<bR>خصم %</th>
                                            <?php } elseif ($discount_type == 2) { ?>
                                                <th>Discount %<bR>خصم </th>
                                            <?php } elseif ($discount_type == 3) { ?>
                                                <th><?php echo display('fixed_dis') ?> </th>
                                            <?php } ?>
                                        <?php }else{ ?>
                                      <th class="text-right"><?php echo ''; ?> </th>
                                    <?php }?>
       <th>Tax Rate<br>معدل الضريبة</th>
       <th>Tax Amount<br>قيمة الضريبة</th>
       <th>Item Subtotal(Including VAT)<br>المجموعضريبة القيمة المضافة) الفرعي للبند (متضمنًا</th>
       
   </tr>
    </thead>
    <tbody>
   
  
   <?php
//print_r($users);
foreach($invoice_all_data as $details){?>
   <tr>
       <td><?php echo $details['product_name']?> - (<?php echo $details['product_model']?>)</td>
       <td><?php echo $details['rate']?> SAR</td>
       <td><?php echo $details['quantity']?></td>
       <td><?=($details['rate']*$details['quantity'])?> SAR</td>
          <?php if ($discount_type == 1) { ?>
                                                <td align="right"><?php echo $details['discount_per']?></td>
                                            <?php } else { ?>
                                                <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['discount_per'] : $details['discount_per'].' '. $currency) ?></td>
                                        
                                        <?php }?>
      

                                                                                       <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['tax_rate'] : $details['tax_rate'].' '. $currency) ?></td>
<td align="right"><?php echo (($position == 0) ? $currency.' '.$details['tax_amount'] : $details['tax_amount'].' '. $currency) ?></td>
 <td align="center"><?php $total_final=$details['tax_amount']+$details['total_price']; echo (($position == 0) ? $currency.' '.$total_final : $total_final.' '. $currency) ?></td>
                                       
                                  
       </tr>
    <?php } ?>
   
    </tbody>
  </table>
  
  </div>                       
                                    
                                    
  <div class="col-sm-12">
            
          <table class="table table_invoice table-bordered">
   
    <tbody>
      <?php  if ($invoice_all_data[0]['total_tax'] != 0) { ?>
   <tr>
     <td></td>  
     <td>Total (Excluding VAT)</td>
       <td>الإجماليالإجمالي (باستثناء ضريبة القيمة المضافة)</td>
       <td><?php echo html_escape((($position == 0) ? $currency.' '.$total_tax : $total_tax.' '. $currency)) ?></td>
   </tr>
	  <? } ?>
	<?php
	if ($invoice_all_data[0]['total_discount'] != 0) {
	?>
     <tr>
     <td></td>  
     <td>Discount</td>
    <td>خصم</td>
       <td><?php echo html_escape((($position == 0) ? $currency.' '.$total_discount  : $total_discount.' '. $currency)) ?></td>
   </tr>
	<?php } ?> 
     <tr>
     <td></td>  
     <td>Total Taxable Amount(Excluding VAT)</td>
   <td>إجمالي المبلغ الخاضع للضريبة (باستثناء ضريبة القيمة المضافة)</td>
       <td><?php echo html_escape((($position == 0) ? $currency.' '.$total_amount : $total_amount.' '. $currency)) ?> </td>
   </tr>
	<tr>
	<th class="text-left grand_total"><?php echo display('previous'); ?> :</th>
	<td class="text-right grand_total"><?php echo html_escape((($position == 0) ? $currency.' '.$previous  :$previous.' '. $currency)) ?></td>
	</tr>
	<tr>
	<th class="text-left grand_total"><?php echo display('grand_total') ?> :</th>
	<td class="text-right grand_total"><?php echo html_escape((($position == 0) ? $currency.' '.$total_amount : $total_amount.' '. $currency)) ?></td>
	</tr>
	<tr>
	<th class="text-left grand_total border-bottom-top"><?php echo display('paid_ammount') ?> : </th>
	<td class="text-right grand_total border-bottom-top"><?php echo html_escape((($position == 0) ? $currency.' '.$paid_amount : $paid_amount.' '. $currency)) ?></td>
	</tr>                
	<?php
	if ($invoice_all_data[0]['due_amount'] != 0) {
	?>
	<tr>
	<th class="text-left grand_total"><?php echo display('due') ?> : </th>
	<td  class="text-right grand_total"><?php echo html_escape((($position == 0) ? $currency.' '.$due_amount : $due_amount.' '. $currency)) ?></td>
	</tr>
	<?php
	}
	?>
    </tbody>
  </table>
  
                                </div>       
                                    
                                    
                                    
                                    
                            </div>
                           
                    
                               <div class="row">

                            </div>
                           
                           
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                       
                        <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>
        </div>
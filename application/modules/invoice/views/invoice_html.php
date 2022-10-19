  <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea" onload="printDiv('printableArea')">
                        <div class="panel-body">
                            <div class="row print_header">
                            <h4 class="tax-invoice">فاتورة ضريبية<br>Tax Invoice</h4>
                            
                            <div class="row">
                                
  
            
          <div class="col-sm-4 purchasedetails-address" style="width:25% !important;">
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
                                
                                 
                                <div class="col-sm-5 text-left invoice-details-billing">
                                  
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
                                
                                  <div class="col-sm-3 text-left invoice-address">
                                       

                                   <img class="barcode-img" src="<?php echo base_url();?>my-assets/image/sales_qr/<?php echo $invoice_id?>.png" >
                                    </div>
                                   
                                   
                                </div>  
                                
                                </div>
                              
                                 
                                    
                                    
                <div class="col-sm-12">
            <style>
                .table_invoice >tbody>tr>td{ padding:1px !important; }
            </style>
          <table class="table table_invoice table-bordered">
    <thead style="background-color: #b6b9b9;">
      <tr style="color: #fff;">
        <th>Line Items:</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        
        <th>:البنود</th>
      </tr>
    </thead>
    <tbody>
   
   <tr>
       <td>Nature of goods of services<br>
       طبيعة سلع الخدمات</td>
       <td>Unit Price <br>سعر الوحدة</td>
       <td>Quantity<bR>كمية</td>
       <td>Taxable Amount<br>المبلغ الخاضع للضريبة</td>
     
	      <?php if($is_discount > 0){ ?>
                                            <?php if ($discount_type == 1) { ?>
                                                <td>Discount %<bR>خصم %</td>
                                            <?php } elseif ($discount_type == 2) { ?>
                                                <td>Discount %<bR>خصم </td>
                                            <?php } elseif ($discount_type == 3) { ?>
                                                <td><?php echo display('fixed_dis') ?> </td>
                                            <?php } ?>
                                        <?php }else{ ?>
                                      <td class="text-right"><?php echo ''; ?> </th>
                                    <?php }?>
       <td>Tax Rate<br>معدل الضريبة</td>
       <td>Tax Amount<br>قيمة الضريبة</td>
       <td>Item Subtotal(Including VAT)<br>المجموعضريبة القيمة المضافة) الفرعي للبند (متضمنًا</td>
       
   </tr>
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
      

                                                                                       <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['tax_rate'] : $details['tax_rate'].'%') ?></td>
<td align="right"><?php echo (($position == 0) ? $currency.' '.$details['tax_amount'] : $details['tax_amount'].' '. $currency) ?></td>
 <td align="center"><?php $total_final=$details['tax_amount']+$details['total_price']; echo (($position == 0) ? $currency.' '.$total_final : $total_final.' '. $currency) ?></td>
                                       
                                  
       </tr>
    <?php } ?>
   
    </tbody>
  </table>
  
  </div>                       
                                    
                                    
  <div class="col-sm-12">
            
          <table class="table table_invoice table-bordered">
    <thead style="background-color: #b6b9b9;">
      <tr style="color: #fff;">
        <th>Total amounts:</th>
        <th></th>
        <th></th>
        <th>:إجمالي المبالغ</th>
        
      </tr>
    </thead>
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
                           
                      <?php
                      //print_r($data);
                      ?>
                            <!--<div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                                   <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center">Nature of goods or services</th>
                                              <th class="text-center"><?php if($is_unit !=0){ echo display('unit');
                                              }?></th>
                                            <th class="text-center"><?php if($is_desc !=0){ echo display('item_description');} ?></th>
                                            <th class="text-center"><?php if($is_serial !=0){ echo display('serial_no');} ?></th>
                                            <th class="text-right">Quantity</th>
                                            
                                                <?php if($is_discount > 0){ ?>
                                            <?php if ($discount_type == 1) { ?>
                                                <th class="text-right"><?php echo display('discount_percentage') ?> %</th>
                                            <?php } elseif ($discount_type == 2) { ?>
                                                <th class="text-right"><?php echo display('discount') ?> </th>
                                            <?php } elseif ($discount_type == 3) { ?>
                                                <th class="text-right"><?php echo display('fixed_dis') ?> </th>
                                            <?php } ?>
                                        <?php }else{ ?>
                                      <th class="text-right"><?php echo ''; ?> </th>
                                    <?php }?>
 
                                            <th class="text-right">Unit price</th>
                                            <th class="text-right">Item Subtotal (Including VAT)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                        //print_r($users);
                                        foreach($invoice_all_data as $details){?>
                                        <tr>
                                            <td class="text-center"><?php echo $details['sl']?></td>
                                            <td class="text-center"><div><?php echo $details['product_name']?> - (<?php echo $details['product_model']?>)</div></td>
                                              <td class="text-center"><div><?php echo $details['unit']?></div></td>
                                            <td align="center"><?php echo $details['description']?></td>
                                            <td align="center"><?php echo $details['serial_no']?></td>
                                            <td align="right"><?php echo $details['quantity']?></td>
                                                                
                                         <?php if ($discount_type == 1) { ?>
                                                <td align="right"><?php echo $details['discount_per']?></td>
                                            <?php } else { ?>
                                                <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['discount_per'] : $details['discount_per'].' '. $currency) ?></td>
                                            

                                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['rate'] : $details['rate'].' '. $currency) ?></td>
                                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['total_price'] : $details['total_price'].' '. $currency) ?></td>
                                        </tr>
                                        <?php }?>
                                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['rate'] : $details['rate'].' '. $currency) ?></td>
<td align="right"><?php echo (($position == 0) ? $currency.' '.$details['rate'] : $details['total_price'].' '. $currency) ?></td>
                                        </tr>
                                        <?php }?>
                                        <tr>
                                            <td class="text-left" colspan="5"><b><?php echo display('grand_total') ?>:</b></td>
                                            <td align="right" ><b><?php echo number_format($subTotal_quantity,2)?></b></td>
                                            <td></td>
                                            <td></td>
                                            <td align="right" ><b><?php echo (($position == 0) ? $currency.' '.$details['rate']  : $details['total_price'].' '. $currency) ?></b></td>
                                        </tr>
                                        
                                    </tbody>

                                </table>
                            </div>-->
                               <div class="row">

                                <!--<div class="col-xs-8 invoicefooter-content">

                                    <p></p>
                                    <p><strong><?php echo $invoice_details?></strong></p> 
                                   
                                </div>-->
                                <div class="col-xs-4 inline-block">

                                   <!-- <table class="table">
                                        <?php
                                        if ($invoice_all_data[0]['total_discount'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="border-bottom-top"><?php echo display('total_discount') ?> : </th>
                                                <td class="text-right border-bottom-top"><?php echo html_escape((($position == 0) ? $currency.' '.$total_discount  : $total_discount.' '. $currency)) ?> </td>
                                            </tr>
                                            <?php
                                        }
                                        if ($invoice_all_data[0]['total_tax'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="text-left border-bottom-top"><?php echo display('tax') ?> : </th>
                                                <td  class="text-right border-bottom-top"><?php echo html_escape((($position == 0) ? $currency.' '.$total_tax : $total_tax.' '. $currency)) ?> </td>
                                            </tr>
                                        <?php } ?>
                                         <?php if ($invoice_all_data[0]['shipping_cost'] != 0) {
                                            ?>
                                            <tr>
                                                <th class="text-left border-bottom-top"><?php echo 'Shipping Cost' ?> : </th>
                                                <td class="text-right border-bottom-top"><?php echo html_escape((($position == 0) ? $currency.' '.$shipping_cost: $shipping_cost.' '. $currency)) ?> </td>
                                            </tr>
                                        <?php } ?>
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
                                    </table>
-->
                                   

                                </div>
                            </div>
                            <!--<div class="row margin-top50">
                                <div class="col-sm-4">
                                 <div class="inv-footer-left">
                                        <?php echo display('received_by') ?>
                                    </div>
                                </div>
                               <div class="col-sm-4"></div>
                                     <div class="col-sm-4"> <div class="inv-footer-right">
                                        <?php echo display('authorised_by') ?>
                                    </div></div>
                            </div>-->
                           
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                       
                        <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>

                    </div>
                </div>
            </div>
        </div>
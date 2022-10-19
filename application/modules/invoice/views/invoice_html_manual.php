<style>

@media print {
.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6,
.col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
float: left;               
}
.col-sm-4{
  float: right;    
}
.text-center{
text-align: center;
}
.text-left{
text-align: left;
}
.text-right{
text-align: right;
}
.col-sm-12 {
width: 100%;
}

.col-sm-11 {
width: 91.66666666666666%;
}

.col-sm-10 {
width: 83.33333333333334%;
}

.col-sm-9 {
width: 75%;
}
.col-sm-8 {
width: 66.66666666666666%;
}



.col-sm-7 {
width: 58.333333333333336%;
}

.col-sm-6 {
width: 50%;
}

.col-sm-5 {
width: 41.66666666666667%;
}

.col-sm-4 {
width: 33.33333333333333%;
}

.col-sm-3 {
width: 25%;
}

.col-sm-2 {
width: 16.666666666666664%;
}

.col-sm-1 {
width: 8.333333333333332%;
}  

.invoicefooter-content{
float: left !impotant;
}
.inline-block{
float: right !impotant;
}   

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}
table {
    background-color: transparent;
}
table {
    border-spacing: 0;
    border-collapse: collapse;
}  

table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    border-top: 1px solid #e4e5e7;
} 

.c_name {
    font-size: 20px;
}
b, strong {
    font-weight: 700;
}
address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.42857143;
}  
}
.print_header {
border-bottom: 2px #333 solid;
}
</style>
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd">
    <div id="printableArea" onload="printDiv('printableArea')">
        <div class="panel-body">
            <div class="row print_header">
                
                <div class="col-sm-8 company-content">
                    <?php foreach($company_info as $company){?>
                    <img src="<?php
                    if (isset($logo)) {
                        echo base_url().html_escape($logo);
                    }
                    ?>" class="img-bottom-m" alt=""> 
                    <br>
                    <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
                    <address class="margin-top10">
                        <strong class="company_name_p"><?php echo $company['company_name']?></strong><br>
                        <?php echo $company['address']?><br>
                        <abbr><b><?php echo display('mobile') ?>:</b></abbr> <?php echo $company['mobile']?><br>
                        <abbr><b><?php echo display('email') ?>:</b></abbr> 
                        <?php echo $company['email']?><br>
                        <abbr><b><?php echo display('website') ?>:</b></abbr> 
                        <?php echo $company['website']?><br>
                      <?php }?>
                         <abbr><?php echo $tax_regno?></abbr>
                    </address>
                   
                  

                </div>
                
                 
                <div class="col-sm-4 text-left invoice-address">
                    <h2 class="m-t-0"><?php echo display('invoice') ?></h2>
                    <div><?php echo display('invoice_no') ?>: <?php echo $invoice_no?></div>
                    <div class="m-b-15"><?php echo display('billing_date') ?>: <?php echo date("d-M-Y",strtotime($final_date));?></div>

                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>

                    <address class="customer_name_p">  
                        <strong class="c_name"><?php echo $customer_name?> </strong><br>
                        <?php if ($customer_address) { ?>
                            <?php echo $customer_address;?>
                        <?php } ?>
                        <br>
                        <abbr><b><?php echo display('mobile') ?>:</b></abbr>
                        <?php if ($customer_mobile) { ?>
                            <?php echo $customer_mobile;?>
                        <?php }if ($customer_email) {
                            ?>
                            <br>
                            <abbr><b><?php echo display('email') ?>:</b></abbr> 
                            <?php echo $customer_email;?>
                        <?php } ?>
                    </address>
                </div>
            </div> 

            <div class="table-responsive" id="product_infodiv">
                <div class="col-sm-12 col-md-12 col-xs-12">
                <table class="table table-striped" border="0" width="100%">
                    <thead>
                         <tr>
                            <th class="text-center"><?php echo display('sl') ?></th>
                            <th class="text-center"><?php echo display('product_name') ?></th>
                              <th class="text-center"><?php if($is_unit !=0){ echo display('unit');
                              }?></th>
                            <th class="text-center"><?php if($is_desc !=0){ echo display('item_description');} ?></th>
                            <th class="text-center"><?php if($is_serial !=0){ echo display('serial_no');} ?></th>
                            <th class="text-right"><?php echo display('quantity') ?></th>
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
                            <th class="text-right"><?php echo display('rate') ?></th>
                            <th class="text-right"><?php echo display('ammount') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($invoice_all_data as $details){?>
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
                            <?php } ?>

                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['rate'] : $details['rate'].' '. $currency) ?></td>
                            <td align="right"><?php echo (($position == 0) ? $currency.' '.$details['total_price'] : $details['total_price'].' '. $currency) ?></td>
                        </tr>
                        <?php }?>
                        <tr>
                            <td class="text-left" colspan="5"><b><?php echo display('total') ?>:</b></td>
                            <td align="right" ><b><?php echo number_format($subTotal_quantity,2)?></b></td>
                            <td></td>
                            <td></td>
                            <td align="right" ><b><?php echo (($position == 0) ? $currency.' '.$subTotal_ammount  : $subTotal_ammount.' '. $currency) ?></b></td>
                        </tr>
                    </tbody>

                </table>
            </div>
            </div>
               <div class="row">

                <div class="col-sm-8 invoicefooter-content">

                    <p></p>
                    <p><strong><?php echo $invoice_details?></strong></p> 
                   
                </div>
                <div class="col-sm-4 inline-block">

                    <table class="table">
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

                   

                </div>
            </div>
            <div class="row margin-top50">
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

   
</div>
</div>
</div>
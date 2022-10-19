<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('invoice_edit') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open('invoice/invoice/bdtask_update_invoice', array('class' => 'form-vertical', 'id' => 'update_invoice')) ?>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 col-form-label"><?php echo display('customer_name').'/'.display('phone') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="customer_name" value="<?php echo $customer_name?>"  onkeyup="customer_autocomplete()" class="form-control customerSelection" placeholder='<?php echo display('customer_name') ?>' required id="customer_name" tabindex="1">

                                        <input type="hidden" class="customer_hidden_value" name="customer_id" value="<?php echo $customer_id;?>" id="autocomplete_customer_id"/>
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-3 col-form-label"><?php
                                        echo display('payment_type');
                                        ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select name="paytype" class="form-control" required="" onchange="bank_paymet(this.value)">
                                            <option value="">Select Payment Option</option>
                                            <option value="1" <?php if($paytype ==1){echo 'selected';}?>>Cash Payment</option>
                                            <option value="2"  <?php if($paytype ==2){echo 'selected';}?>>Bank Payment</option> 
                                        </select>
                                      

                                     
                                    </div>
                                 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 col-form-label"><?php echo display('date') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="2" class="form-control datepicker" name="invoice_date" value="<?php echo $date?>"  required />
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-6">
                                 <div class="form-group row">
                                <label for="invoice_no" class="col-sm-3 col-form-label"><?php
                                    echo display('invoice_no');
                                    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                         <input class="form-control" type="text"  name="invoice_no" id="invoice_no" required value="<?php echo html_escape($invoice); ?>" readonly/>
                                    </div>
                            </div>
                        </div>
                                 <div class="col-sm-6" id="bank_div">
                            <div class="form-group row">
                                <label for="bank" class="col-sm-3 col-form-label"><?php
                                    echo display('bank');
                                    ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                   <select name="bank_id" class="form-control bankpayment"  id="bank_id">
                                        <option value="">Select Location</option>
                                        <?php foreach($bank_list as $bank){?>
                                            <option value="<?php echo html_escape($bank['bank_id'])?>" <?php if($bank['bank_id'] == $bank_id){echo 'selected';}?>><?php echo html_escape($bank['bank_name']);?></option>
                                        <?php }?>
                                    </select>
                                  <input type="hidden" id="editpayment_type" value="<?php echo $paytype;?>" name="">
                                </div>
                             
                            </div>
                        </div>
                        </div>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                    <th class="text-center"><?php echo display('item_information') ?> <i class="text-danger">*</i></th>
                                    <th class="text-center"><?php echo display('item_description')?></th>
                                    <th class="text-center" ><?php echo display('serial_no')?></th>
                                        <th class="text-center"><?php echo display('available_qnty') ?></th>
                                        <th class="text-center"><?php echo display('unit') ?></th>
                                        <th class="text-center"><?php echo display('quantity') ?>  <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('rate') ?> <i class="text-danger">*</i></th>

                                        <?php if ($discount_type == 1) { ?>
                                            <th class="text-center"><?php echo display('discount_percentage') ?> %</th>
                                        <?php } elseif ($discount_type == 2) { ?>
                                            <th class="text-center"><?php echo display('discount') ?> </th>
                                        <?php } elseif ($discount_type == 3) { ?>
                                            <th class="text-center"><?php echo display('fixed_dis') ?> </th>
                                        <?php } ?>
										
										  <th class="text-center">Tax Rate</th>
                                           
                                              <th class="text-center">Tax Amount</th>

                                        <th class="text-center"><?php echo display('total') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                  <?php foreach($invoice_all_data as $details){?>
                                    <tr>
                                        <td class="product_field">
                                            <input type="text" name="product_name" onkeypress="invoice_productList(<?php echo $details['sl']?>);" value="<?php echo $details['product_name']?>-(<?php echo $details['product_model']?>)" class="form-control productSelection" required placeholder='<?php echo display('product_name') ?>' id="product_name_<?php echo $details['sl']?>" tabindex="3">

                                            <input type="hidden" class="product_id_<?php echo $details['sl']?> autocomplete_hidden_value" name="product_id[]" value="<?php echo $details['product_id']?>" id="SchoolHiddenId"/>
                                        </td>
                                        <td>
                                            <input type="text" name="desc[]" class="form-control text-right "  value="<?php echo $details['description']?>"/>
                                        </td>
                                         <td>
                                         <select class="form-control invoice_fields" id="serial_no_<?php echo $details['sl']?>" name="serial_no[]" >

                                        <option value="<?php echo $details['serial_no']?>"><?php echo $details['serial_no']?></option>
                                            </select>
                                        </td>
                                       <td>
                                            <input type="text" name="available_quantity[]" class="form-control text-right available_quantity_<?php echo $details['sl']?>" value="<?php echo $details['stock_qty']?>" readonly="" />
                                        </td>
                                        <td>
                                            <input type="text" name="unit[]" class="form-control text-right " readonly="" value="<?php echo $details['unit']?>" />
                                        </td>
                                        <td>
                                            <input type="text" name="product_quantity[]" onkeyup="bdtask_invoice_quantity_calculate(<?php echo $details['sl']?>);" onchange="bdtask_invoice_quantity_calculate(<?php echo $details['sl']?>);" value="<?php echo $details['quantity']?>" class="total_qntt_<?php echo $details['sl']?> form-control text-right" id="total_qntt_<?php echo $details['sl']?>" min="0" placeholder="0.00" tabindex="4" required="required"/>
                                        </td>

                                        <td>
                                            <input type="text" name="product_rate[]" onkeyup="bdtask_invoice_quantity_calculate(<?php echo $details['sl']?>);" onchange="bdtask_invoice_quantity_calculate(<?php echo $details['sl']?>);" value="<?php echo $details['rate']?>" id="price_item_<?php echo $details['sl']?>" class="price_item<?php echo $details['sl']?> form-control text-right" min="0" tabindex="5" required="" placeholder="0.00"/>
                                        </td>
                                        <!-- Discount -->
                                        <td>
                                            <input type="text" name="discount[]" onkeyup="bdtask_invoice_quantity_calculate(<?php echo $details['sl']?>);"  onchange="(<?php echo $details['sl']?>);" id="discount_<?php echo $details['sl']?>" class="form-control text-right" placeholder="0.00" value="<?php echo $details['discount_per']?>" min="0" tabindex="6"/>

                                            <input type="hidden" value="<?php echo $discount_type ?>" name="discount_type" id="discount_type_<?php echo $details['sl']?>">
                                        </td>
										
										<td class="invoice_fields">
                                            <input class="tax_rate form-control text-right" type="text" name="tax_rate[]" id="tax_rate<?php echo $details['sl']?>" value="<?php echo $details['tax_rate']?>" readonly="readonly" />
                                        </td>
                                        
                                        
                                        <td class="invoice_fields">
                                            <input class="tax_amount form-control text-right" type="text" name="tax_amount[]" id="tax_amount<?php echo $details['sl']?>" value="<?php echo $details['tax_amount']?>" readonly="readonly" />
                                        </td>
										
										

                                        <td>
                                            <input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_<?php echo $details['sl']?>" value="<?php echo $details['total_price']?>" readonly="readonly" />

                                            <input type="hidden" name="invoice_details_id[]" id="invoice_details_id" value="<?php echo $details['invoice_details_id']?>"/>
                                        </td>
                                        <td>

                                            <!-- Tax calculate start-->
                                            <?php $x=0;
                                            foreach($taxes as $taxfldt){
                                                $taxval='tax'.$x;
                                                ?>
                                            <input id="total_tax<?php echo $x;?>_<?php echo $details['sl']?>" class="total_tax<?php echo $x;?>_<?php echo $details['sl']?>" value="<?php echo $details[$taxval]?>" type="hidden">
                                            <input id="all_tax<?php echo $x;?>_<?php echo $details['sl']?>" class="total_tax<?php echo $x;?>" type="hidden" name="tax[]">
                                             <?php $x++;} ?>
                                            <!-- Tax calculate end-->
                                            <!-- Discount calculate start-->
                                            <input type="hidden" id="total_discount_<?php echo $details['sl']?>" class="" value="<?php echo $details['discount']?>"/>

                                            <input type="hidden" id="all_discount_<?php echo $details['sl']?>" class="total_discount" value="<?php echo $details['discount']?>" name="discount_amount[]" />

                                            <button  class="btn btn-danger text-center" type="button" value="<?php echo display('delete') ?>" onclick="deleteRow_invoice(this)" tabindex="7"><i class="fa fa-close"></i></button>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </tbody>
 <tfoot>
                                     <tr>
                                        <td colspan="9" rowspan="2">
                                <center><label sclass="text-center" for="details" class="  col-form-label"><?php echo display('invoice_details') ?></label></center>
                                <textarea name="inva_details" id="details" class="form-control" placeholder="<?php echo display('invoice_details') ?>"><?php echo $invoice_details;?></textarea>
                                </td>
                                    <td class="text-right" colspan="1"><b><?php echo display('invoice_discount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" onkeyup="quantity_calculate(1);"  onchange="quantity_calculate(1);" id="invoice_discount" class="form-control text-right total_discount" name="invoice_discount" placeholder="0.00"  value="<?php echo $invoice_discount;?>"/>
                                        <input type="hidden" id="txfieldnum" value="<?php echo count($taxes);?>">
                                    </td>
                                      <td><a  id="add_invoice_item" class="btn btn-info" name="add-invoice-item"  onClick="addInputField_invoice('addinvoiceItem');"  tabindex="11"><i class="fa fa-plus"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><b><?php echo display('total_discount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" value="<?php echo $total_discount;?>" readonly="readonly" />
                                    </td>
                                </tr>
                                       <?php $x=0;
                                     foreach($taxes as $taxfldt){?>
                                    <tr class="hideableRow hiddenRow">
                                       
                                <td class="text-right" colspan="10"><b><?php echo html_escape($taxfldt['tax_name']) ?></b></td>
                                <td class="text-right">
                                    <input id="total_tax_ammount<?php echo $x;?>" tabindex="-1" class="form-control text-right valid totalTax" name="total_tax<?php echo $x;?>" value="<?php $txval ='tax'.$x;
                                     echo html_escape($taxvalu[0][$txval])?>" readonly="readonly" aria-invalid="false" type="text">
                                </td>
                                </tr>
                            <?php $x++;}?>
                                 
                    <tr>
                                    <tr>
                                <td class="text-right" colspan="10"><b><?php echo display('total_tax') ?>:</b></td>
                                <td class="text-right">
                                    <input id="total_tax_amount" tabindex="-1" class="form-control text-right valid" name="total_tax" value="<?php echo $total_tax;?>" readonly="readonly" aria-invalid="false" type="text">
                                </td>
                                 <td><button type="button" class="toggle btn-warning">
                <i class="fa fa-angle-double-down"></i>
              </button></td>
                                </tr>
                               
                                 <tr>
                                    <td class="text-right" colspan="10"><b><?php echo display('shipping_cost') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="shipping_cost" class="form-control text-right" name="shipping_cost" onkeyup="quantity_calculate(1);"  onchange="quantity_calculate(1);"  placeholder="0.00"  value="<?php echo $shipping_cost?>"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10"  class="text-right"><b><?php echo display('grand_total') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="<?php echo $total_amount?>" readonly="readonly" />
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="10"  class="text-right"><b><?php echo display('previous'); ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="previous" class="form-control text-right" name="previous" value="<?php echo $prev_due?>" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="10"  class="text-right"><b><?php echo display('net_total'); ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="n_total" class="form-control text-right" name="n_total" value="<?php echo $net_total;?>" readonly="readonly" placeholder="" />
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td class="text-right" colspan="10"><b><?php echo display('paid_ammount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="paidAmount" 
                                               onkeyup="invoice_paidamount();" class="form-control text-right" name="paid_amount" placeholder="0.00" tabindex="13"  value="<?php echo $paid_amount;?>"/>
                                    </td>
                                </tr>
                                <tr>
                                    
                                
                                    <td class="text-right" colspan="10">
                                          <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>
                                          <input type="hidden" name="invoice_id" id="invoice_id" value="<?php echo $invoice_id?>"/>
                                            <input type="hidden" name="invoice" id="invoice" value="<?php echo $invoice?>"/>
                                        <b><?php echo display('due') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="<?php echo $due_amount?>" readonly="readonly"/>
                                    </td>
                                </tr>
                                 <tr>
                                    <td align="center" colspan="2">
                                        <input type="button" id="full_paid_tab" class="btn btn-warning" value="<?php echo display('full_paid') ?>" tabindex="14" onClick="invoicee_full_paid()"/>

                                        <input type="submit" id="add_invoice" class="btn btn-success" name="add-invoice" value="<?php echo display('save_changes') ?>" tabindex="15"/>
                                    </td>

                                    <td class="text-right" colspan="8"><b><?php echo display('change') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="change" class="form-control text-right" name="change" value="0" readonly="readonly"/>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>

                  <div class="modal fade" id="printconfirmodal" tabindex="-1" role="dialog" aria-labelledby="printconfirmodal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"><?php echo display('print') ?></h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('invoice_print', array('class' => 'form-vertical', 'id' => '', 'name' => '')) ?>
            <div id="outputs" class="hide alert alert-danger"></div>
            <h3> <?php echo display('successfully_inserted') ?></h3>
            <h4><?php echo display('do_you_want_to_print') ?> ??</h4>
            <input type="hidden" name="invoice_id" id="inv_id">
          </div>
          <div class="modal-footer">
            <a href="<?php echo base_url('invoice_list')?>" class="btn btn-default"><?php echo display('no') ?></a>
            
            <button type="submit" class="btn btn-primary" id="yes"><?php echo display('yes') ?></button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>

        </div>


<!-- Customer js php -->
<link href="<?php echo base_url('assets/css/gui_pos.css') ?>" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url() ?>my-assets/js/admin_js/pos_invoice.js" type="text/javascript"></script>

<div class="alert alert-danger alert-dismissible fade in altmsg" id="almsg" role="alert"> No Available Qty ..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button></div>

 
        <div class="row">
            <div class="col-sm-12">
            
       <?php if($this->permission1->method('new_invoice','create')->access()){ ?>
                    <a href="<?php echo base_url('add_invoice') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('new_invoice') ?> </a>
                <?php }?>
<?php if($this->permission1->method('manage_invoice','read')->access()){ ?>
                    <a href="<?php echo base_url('invoice_list') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manage_invoice') ?> </a>
 <?php }?>
                
            </div>
        </div>

        <!-- POS Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span class="text-left"><?php echo display('new_pos_invoice') ?></span>
                        </div>
                    </div>
<br>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item_p" class="col-sm-3 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" name="product_name" class="form-control bq" placeholder='<?php echo display('barcode_qrcode_scan_here') ?>' id="add_item_p" autocomplete='off' tabindex="1" value="">
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                              <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item" class="col-sm-4 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="product_name" class="form-control bq" placeholder='Manual Input barcode' id="add_item_m_p" autocomplete='off' tabindex="1" value="">
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php echo form_open_multipart('invoice/invoice/bdtask_manual_sales_insert', array('class' => 'form-vertical', 'id' => 'pos_sale_insert', 'name' => 'insert_pos_invoice')) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_date" class="col-sm-3 col-form-label"><?php echo display('date') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <?php
                                       
                                        $date = date('Y-m-d');
                                        ?>
                                        <input class="form-control datepicker" type="text" size="50" id="invoice_date" name="invoice_date" required value="<?php echo html_escape($date); ?>" tabindex="2" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                 <div class="form-group row">
                                <label for="invoice_no" class="col-sm-4 col-form-label"><?php
                                    echo display('invoice_no');
                                    ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                         <input class="form-control" type="text"  name="invoice_no" id="invoice_no" required value="<?php echo html_escape($invoice_no); ?>" readonly/>
                                    </div>
                            </div>
                        </div>
                          
                        </div>

                        <div class="row">
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="customer_name1" class="col-sm-3 col-form-label"><?php echo display('customer_name').'/'.display('phone') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" size="100"  name="customer_name" class="customerSelection form-control" placeholder='<?php echo display('customer_name').'/'.display('phone') ?>' id="customer_name" value="<?php echo $customer_name;?>" tabindex="3"  onkeyup="customer_autocomplete()"/>

                                        <input id="autocomplete_customer_id" class="customer_hidden_value" type="hidden" name="customer_id" value="<?php echo $customer_id?>">
                                        <?php
                                        if (empty($customer_name)) {
                                            ?>
                                            <small id="emailHelp" class="text-danger"><?php echo display('please_add_walking_customer_for_default_customer') ?></small>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                     <?php if($this->permission1->method('add_customer','create')->access()){ ?>
                                    <div  class="col-sm-3">
                                         <a href="#" class="client-add-btn btn btn-success" aria-hidden="true" data-toggle="modal" data-target="#cust_info"><i class="ti-plus m-r-2"></i></a>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>

                                  <div class="col-sm-6" id="payment_from">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
                                        echo display('payment_type');
                                        ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                        <select name="paytype" class="form-control" required="" onchange="bank_paymet(this.value)">
                                <option value="1"><?php echo display('cash_payment');?></option>
                                <option value="2"><?php echo display('bank_payment');?></option> 
                                        </select>
                                      

                                       <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">
                                    </div>
                                 
                                </div>
                            </div>
                                    <div class="col-sm-6" id="bank_div">
                            <div class="form-group row">
                                <label for="bank" class="col-sm-4 col-form-label"><?php
                                    echo display('bank');
                                    ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-7">
                                   <select name="bank_id" class="form-control bankpayment"  id="bank_id">
                                        <option value="">Select Bank</option>
                                        <?php foreach($bank_list as $bank){?>
                                            <option value="<?php echo html_escape($bank['bank_id'])?>"><?php echo html_escape($bank['bank_name']);?></option>
                                        <?php }?>
                                    </select>
                                 
                                </div>
                             
                            </div>
                        </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="addinvoice">
                                <thead>
                                    <tr>
                    <th class="text-center product_field"><?php echo display('item_information') ?> <i class="text-danger">*</i></th>
                    <th class="text-center"><?php echo display('item_description')?></th>
                     <th class="text-center"><?php echo display('serial_no')?></th>
                    <th class="text-center"><?php echo display('available_qnty') ?></th>
                    <th class="text-center"><?php echo display('unit') ?></th>
                    <th class="text-center"><?php echo display('quantity') ?> <i class="text-danger">*</i></th>
                    <th class="text-center"><?php echo display('rate') ?> <i class="text-danger">*</i></th>

                                <?php if ($discount_type == 1) { ?>
                                    <th class="text-center invoice_fields"><?php echo display('discount_percentage') ?> %</th>
                                <?php } elseif ($discount_type == 2) { ?>
                                    <th class="text-center invoice_fields"><?php echo display('discount') ?> </th>
                                <?php } elseif ($discount_type == 3) { ?>
                                    <th class="text-center invoice_fields"><?php echo display('fixed_dis') ?> </th>
                                <?php } ?>

                                <th class="text-center invoice_fields"><?php echo display('total') ?> 
                                </th>
                                <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr></tr>
                                </tbody>
                                   <tfoot>
                                     <tr>
                                        <td colspan="7" rowspan="2">
                                <center><label class="text-center" for="details" class="  col-form-label"><?php echo display('invoice_details') ?></label></center>
                                <textarea name="inva_details" class="form-control" placeholder="<?php echo display('invoice_details') ?>"></textarea>
                                </td>
                                    <td class="text-right" colspan="1"><b><?php echo display('invoice_discount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" onkeyup="quantity_calculate(1);"  onchange="quantity_calculate(1);" id="invoice_discount" class="form-control text-right total_discount" name="invoice_discount" placeholder="0.00"  />
                                        <input type="hidden" id="txfieldnum" value="<?php echo $taxnumber;?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><b><?php echo display('total_discount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" value="0.00" readonly="readonly" />
                                    </td>
                                </tr>
                                    <?php $x=0;
                                     foreach($taxes as $taxfldt){?>
                                    <tr class="hideableRow hiddenRow">
                                       
                                <td class="text-right" colspan="8"><b><?php echo html_escape($taxfldt['tax_name']) ?></b></td>
                                <td class="text-right">
                                    <input id="total_tax_ammount<?php echo $x;?>" tabindex="-1" class="form-control text-right valid totalTax" name="total_tax<?php echo $x;?>" value="0.00" readonly="readonly" aria-invalid="false" type="text">
                                </td>

                                </tr>
                            <?php $x++;}?>
                                 
                    <tr>
                                    <tr>
                                <td class="text-right" colspan="8"><b><?php echo display('total_tax') ?>:</b></td>
                                <td class="text-right">
                                    <input id="total_tax_amount" tabindex="-1" class="form-control text-right valid" name="total_tax" value="0.00" readonly="readonly" aria-invalid="false" type="text">
                                </td>
                                 <td><a  class="toggle btn btn-warning btn-sm taxbutton">
                <i class="fa fa-angle-double-down"></i>
              </a></td>
                                </tr>
                               
                                 <tr>
                                    <td class="text-right" colspan="8"><b><?php echo display('shipping_cost') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="shipping_cost" class="form-control text-right" name="shipping_cost" onkeyup="quantity_calculate(1);"  onchange="quantity_calculate(1);"  placeholder="0.00"  />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8"  class="text-right"><b><?php echo display('grand_total') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" />
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="8"  class="text-right"><b><?php echo display('previous'); ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="previous" class="form-control text-right" name="previous" value="0.00" readonly="readonly" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="8"  class="text-right"><b><?php echo display('net_total'); ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="n_total" class="form-control text-right" name="n_total" value="0" readonly="readonly" placeholder="" />
                                    </td>
                                </tr>
                                <tr>
                                   
                                    <td class="text-right" colspan="8"><b><?php echo display('paid_ammount') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="paidAmount" 
                                               onkeyup="invoice_paidamount();" class="form-control text-right" name="paid_amount" placeholder="0.00" tabindex="13" value=""/>
                                    </td>
                                </tr>
                                <tr>
                                   
                                   <td align="center">
                                        <input type="button" id="add_invoice_item" class="btn btn-info" name="add-invoice-item"  onClick="addInputField('addinvoiceItem');" value="<?php echo display('add_new_item') ?>" tabindex="12"/>

                                        <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>
                                    </td>

                                    <td class="text-right" colspan="7"><b><?php echo display('due') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly"/>
                                    </td>
                                </tr>
                                 <tr>
                                    <td align="center">
                                        <input type="button" id="full_paid_tab" class="btn btn-warning" value="<?php echo display('full_paid') ?>" tabindex="14" onClick="full_paid()"/>

                                        <input type="submit" id="add_invoice" class="btn btn-success" name="add-invoice" value="<?php echo display('submit') ?>" tabindex="15"/>
                                    </td>
                                    <td><a href="#" class="btn btn-info" data-toggle="modal" data-target="#calculator"><i class="fa fa-calculator" aria-hidden="true"></i> Calculator</a></td>

                                    <td class="text-right" colspan="6"><b><?php echo display('change') ?>:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="change" class="form-control text-right" name="change" value="0.00" readonly="readonly"/>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
                   <div class="modal fade" id="printconfirmodal" tabindex="-1" role="dialog" aria-labelledby="printconfirmodal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
        <a href="" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
            <h4 class="modal-title" id="myModalLabel"><?php echo display('print')?></h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('invoice_pos_print', array('class' => 'form-vertical', 'id' => '', 'name' => '')) ?>
            <div id="outputs" class="hide alert alert-danger"></div>
            <h3> <?php echo display('successfully_inserted')?> </h3>
            <h4><?php echo display('do_you_want_to_print')?> ??</h4>
            <input type="hidden" name="invoice_id" id="inv_id">
            <input type="hidden" name="url" value="<?php echo base_url('pos_invoice');?>">
          </div>
          <div class="modal-footer">
           <button type="button" onclick="cancelprint()" class="btn btn-default" data-dismiss="modal"><?php echo display('no') ?></button>
            <button type="submit" class="btn btn-primary" id="yes"><?php echo display('yes') ?></button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>

      
    </div>


        </div>

    




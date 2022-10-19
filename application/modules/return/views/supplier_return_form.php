 <link href="<?php echo base_url('assets/css/return.css') ?>" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url() ?>my-assets/js/admin_js/return.js" type="text/javascript"></script>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('return_supplier')?></h4>
                        </div>
                    </div>
                    <?php echo form_open('return/returns/return_suppliers',array('class' => 'form-vertical','id'=>'purchase_return' ))?>
                    <div class="panel-body">
             
                        <div class="row">
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('supplier_name') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                       <input type="text" name="supplier_name" value="<?php echo $supplier_name?>" class="form-control" placeholder='<?php echo display('supplier_name') ?>' required id="supplier_name" tabindex="1" readonly="">

                                        <input type="hidden" class="customer_hidden_value" name="supplier_id" value="<?php echo $supplier_id?>" id="SchoolHiddenId"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('date') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="2" class="form-control" name="return_date" value="<?php echo $date?>"  required readonly="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="purchase">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('item_information') ?> <i class="text-danger"></i></th>
                                        <th class="text-center"><?php echo display('per_qty') ?></th>
                                        <th class="text-center"><?php echo display('ret_quantity') ?>  <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('rate') ?> <i class="text-danger"></i></th>

                                        <th class="text-center"><?php echo display('deduction') ?> %</th>

                                        <th class="text-center"><?php echo display('total') ?></th>
                                        <th class="text-center"><?php echo display('check_return') ?> <i class="text-danger">*</i></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                <?php foreach($purchase_all_data as $details){?>
                                    <tr>
                                        <td class="product_field">
                                            <input type="text" name="product_name" value="<?php echo $details['product_name']?>-(<?php echo $details['product_model']?>)" class="form-control productSelection" required placeholder='<?php echo display('product_name') ?>' id="product_names" tabindex="3" readonly="">

                                            <input type="hidden" class="product_id_<?php echo $details['sl']?> autocomplete_hidden_value" value="<?php echo $details['product_id']?>" id="product_id_<?php echo $details['sl']?>"/>
                                        </td>
                                        <td>
                                            <input type="text" name="ret_qty[]" class="form-control text-right " value="<?php echo $details['quantity']?>" readonly="" id="sold_qty_<?php echo $details['sl']?>"/>
                                      </td>
                                        <td>
                                            <input type="text"  onkeyup="quantity_calculateSreturn(<?php echo $details['sl']?>);" onchange="quantity_calculateSreturn(<?php echo $details['sl']?>);"  class="total_qntt_<?php echo $details['sl']?> form-control text-right" id="total_qntt_<?php echo $details['sl']?>" min="0" placeholder="0.00" tabindex="4" />
                                        </td>

                                        <td>
                                            <input type="text" name="product_rate[]" onkeyup="quantity_calculateSreturn(<?php echo $details['sl']?>);" onchange="quantity_calculateSreturn(<?php echo $details['sl']?>);" value="<?php echo $details['rate']?>" id="price_item_<?php echo $details['sl']?>" class="price_item<?php echo $details['sl']?> form-control text-right" min="0" tabindex="5" required="" placeholder="0.00" readonly=""/>
                                        </td>
                                        <!-- Discount -->
                                        <td>
                                            <input type="text"  onkeyup="quantity_calculateSreturn(<?php echo $details['sl']?>);"  onchange="quantity_calculateSreturn(<?php echo $details['sl']?>);" id="discount_<?php echo $details['sl']?>" class="form-control text-right" placeholder="0.00" value="" min="0" tabindex="6"/>

                                            <input type="hidden" value="<?php echo $discount_type?>" name="discount_type" id="discount_type_<?php echo $details['sl']?>">
                                        </td>

                                        <td>
                                            <input class="total_price form-control text-right" type="text"  id="total_price_<?php echo $details['sl']?>" value="" readonly="readonly" />

                                            <input type="hidden" name="purchase_detail_id[]" id="purchase_detail_id" value="<?php echo $details['purchase_detail_id']?>"/>
                                        </td>
                                         <td>

                                            <!-- Discount calculate start-->
                                            <input type="hidden" id="total_discount_<?php echo $details['sl']?>" class="" value=""/>

                                            <input type="hidden" id="all_discount_<?php echo $details['sl']?>" class="total_discount" value="" />
                                            <!-- Discount calculate end -->



                <input type="checkbox" name='rtn[]' onclick="checkboxcheckSreturn(<?php echo $details['sl']?>)" id="check_id_<?php echo $details['sl']?>" value="<?php echo $details['sl']?>" class="chk" >


                                        </td>
                                    </tr>
                               <?php }?>
                                </tbody>
                                
                                <tfoot>
                                    
                                    <tr>
                                        <td colspan="4" rowspan="3">
                                           <center><label for="details" class="col-form-label text-center"><?php echo display('reason') ?></label></center>
                                             <textarea class="form-control" name="details" id="details" placeholder="<?php echo display('reason') ?>"></textarea> <br>
                                            

                                        </td>
                                        <td class="text-right" colspan="1"><b><?php echo display('to_deduction') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" value="" readonly="readonly" />
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td colspan="1"  class="text-right"><b><?php echo display('nt_return') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="" readonly="readonly" />
                                        </td>
                                         <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url();?>"/>
                                            <input type="hidden" name="purchase_id" id="purchase_id" value="<?php echo $purchase_id?>"/>
                                            <input type="hidden" name="radio" value="2">
                                    </tr>
                                 
                                   
                                </tfoot>
                            </table>
                        </div>
                         <div class="form-group row">
                            <label for="example-text-input" class=" col-form-label"></label>
                            <div class="col-sm-12 text-right">
                                
                                           
                                            <input type="submit" id="add_invoice" class="btn btn-success btn-large" name="pretid" value="<?php echo display('return') ?>" tabindex="9"/>
                               
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>

 
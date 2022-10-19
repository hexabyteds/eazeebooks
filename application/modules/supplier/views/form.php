<?php
  $currency_query = $this->db->get('currency_tbl')->result();
  
 ?>
 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">
                            	<?php echo form_open('','class="" id="supplier_form"')?>
                            	
                            	<input type="hidden" name="supplier_id" id="supplier_id" value="<?php echo $supplier->supplier_id?>">
                                <div class="form-group row">
                                    <label for="supplier_name" class="col-sm-2 text-right col-form-label"><?php echo display('supplier_name')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="supplier_name" class="form-control" id="supplier_name" placeholder="<?php echo display('supplier_name')?>" value="<?php echo $supplier->supplier_name?>">
                                            <input type="hidden" name="old_name" value="<?php echo $supplier->supplier_name?>">
    
                                        </div>
                                       
                                    </div>
                                     <label for="supplier_mobile" class="col-sm-2 text-right col-form-label"><?php echo display('mobile_no')?> <i class="text-danger">  </i>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="number" name="supplier_mobile" class="form-control input-mask-trigger text-left" id="supplier_mobile" placeholder="<?php echo display('mobile_no')?>" value="<?php echo $supplier->mobile?>" data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="supplier_email" class="col-sm-2 text-right col-form-label"><?php echo display('email_address')?>1:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="email" class="form-control input-mask-trigger" name="supplier_email" id="email" data-inputmask="'alias': 'email'" im-insert="true" placeholder="<?php echo display('email')?>" value="<?php echo $supplier->emailnumber?>">
    
                                        </div>
                                       
                                    </div>
                                      <label for="email_address" class="col-sm-2 text-right col-form-label"><?php echo display('email_address')?>2:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="email" class="form-control" name="email_address" id="email_address" placeholder="<?php echo display('email_address')?>" value="<?php echo $supplier->email_address?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="buiding_no" class="col-sm-2 text-right col-form-label">Buiding No</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control input-mask-trigger" name="buiding_no" id="buiding_no" data-inputmask="'alias': 'buiding_no'" im-insert="true" placeholder="Buiding No" value="<?php echo $supplier->buiding_no?>">
    
                                        </div>
                                       
                                    </div>
                                      <label for="additional_number" class="col-sm-2 text-right col-form-label">Additional Number</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control" name="additional_number" id="additional_number" placeholder="Additional Number" value="<?php echo $supplier->additional_number?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group row">
                                    <label for="vat_number" class="col-sm-2 text-right col-form-label">Vat Number</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control input-mask-trigger" name="vat_number" id="vat_number" data-inputmask="'alias': 'vat_number'" im-insert="true" placeholder="Vat Number" value="<?php echo $supplier->vat_number?>">
    
                                        </div>
                                       
                                    </div>
                                      <label for="other_seller_id" class="col-sm-2 text-right col-form-label">Other Seller Id</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control" name="other_seller_id" id="other_seller_id" placeholder="Other Seller Id" value="<?php echo $supplier->other_seller_id?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2 text-right col-form-label"><?php echo display('phone')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                          <input class="form-control input-mask-trigger text-left" id="phone" type="number" name="phone" placeholder="<?php echo display('phone')?>" data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true" value="<?php echo $supplier->phone?>">
    
                                        </div>
                                       
                                    </div>

                                     <label for="contact" class="col-sm-2 text-right col-form-label"><?php echo display('contact')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                          <input class="form-control"  id="contact" type="text" name="contact" placeholder="<?php echo display('contact')?>" value="<?php echo $supplier->contact?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address1" class="col-sm-2 text-right col-form-label"><?php echo display('address1')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                           <textarea name="supplier_address" id="supplier_address" class="form-control" placeholder="<?php echo display('address1')?>"><?php echo $supplier->address?></textarea>
    
                                        </div>
                                      
                                    </div>

                                          <label for="address2" class="col-sm-2 text-right col-form-label"><?php echo display('address2')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                           <textarea name="address2" id="address2" class="form-control" placeholder="<?php echo display('address2')?>"><?php echo $supplier->address2?></textarea>
    
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="form-group row"> 
                                    <label for="fax" class="col-sm-2 text-right col-form-label"><?php echo display('fax')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                            <input type="text" name="fax" class="form-control" id="fax" placeholder="<?php echo display('fax')?>" value="<?php echo $supplier->fax?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="city" class="col-sm-2 text-right col-form-label"><?php echo display('city')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                            <input type="text" name="city" class="form-control" id="city" placeholder="<?php echo display('city')?>" value="<?php echo $supplier->city?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-2 text-right col-form-label"><?php echo display('state')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="state" class="form-control" id="state" placeholder="<?php echo display('state')?>"  value="<?php echo $supplier->state?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="zip" class="col-sm-2 text-right col-form-label"><?php echo display('zip')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="zip" type="text" class="form-control" id="zip" placeholder="<?php echo display('zip')?>" value="<?php echo $supplier->zip?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-2 text-right col-form-label"><?php echo display('country')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="country" type="text" class="form-control " placeholder="<?php echo display('country')?>" value="<?php echo $supplier->country?>" id="country" >
    
                                        </div>
                                       
                                    </div>
                                    <?php if(empty($supplier->supplier_id)){?>

                                     <label for="previous_balance" class="col-sm-2 text-right col-form-label"><?php echo display('previous_balance')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="previous_balance" type="number" class="form-control text-right input-mask-trigger" placeholder="<?php echo display('previous_balance')?>"  data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true" >
    
                                        </div>
                                       
                                    </div>
                                <?php }?>
                                    
                                </div>
                                
                                <div class="form-group row">
                                    <label for="credit_limit" class="col-sm-2 text-right col-form-label">Credit Limit:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="credit_limit" class="form-control" id="credit_limit" placeholder="Credit Limit"  value="<?php echo $supplier->credit_limit?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="credit_days" class="col-sm-2 text-right col-form-label">Credit Days:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="credit_days" type="text" class="form-control" id="credit_days" placeholder="Credit Days" value="<?php echo $supplier->credit_days?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="po_box" class="col-sm-2 text-right col-form-label">PO Box:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input type="text" name="po_box" class="form-control" id="po_box" placeholder="PO Box"  value="<?php echo $supplier->po_box?>">
                                        </div>
                                    </div>
                                    <label for="website_link" class="col-sm-2 text-right col-form-label">Website Link:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input name="website_link" type="text" class="form-control" id="website_link" placeholder="Website Link" value="<?php echo $supplier->website_link?>">
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tax_treatment" class="col-sm-2 text-right col-form-label">Tax Treatment:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                    <select name="tax_treatment"class="form-control">
                                   <option value="" disabled>Select VAT</option>
                                   <option value="VAT Registered" <?=($supplier->tax_treatment=='VAT Registered')?'selected':''?>>VAT Registered</option>
                                   <option value="Non VAT Registered" <?=($supplier->tax_treatment=='Non VAT Registered')?'selected':''?>>Non VAT Registered</option>
                                    <option value="GCC VAT Registered" <?=($supplier->tax_treatment=='GCC VAT Registered')?'selected':''?>>GCC VAT Registered</option>
                                    <option value="GCC Non VAT Registered" <?=($supplier->tax_treatment=='GCC Non VAT Registered')?'selected':''?>>GCC Non VAT Registered</option>
                                    <option value="Non GCC" <?=($supplier->tax_treatment=='Non GCC')?'selected':''?>>Non GCC</option>
                                    <option value="VAT Registered - Designated Zone" <?=($supplier->tax_treatment=='VAT Registered - Designated Zone')?'selected':''?>>VAT Registered - Designated Zone</option>
                                    <option value="NON VAT Registered - Designated Zone" <?=($supplier->tax_treatment=='NON VAT Registered - Designated Zone')?'selected':''?>>NON VAT Registered - Designated Zone</option>
                                        </select>
                                        </div>
                                    </div>
                                    <label for="place_of_supply" class="col-sm-2 text-right col-form-label">Place of Supply:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                <select name="place_of_supply"class="form-control">
                                <option value="" disabled>Selecte Place</option>
                                <option value="Dubai" <?=($supplier->place_of_supply=='Dubai')?'selected':''?>>Dubai</option>
                                <option value="Sharjah" <?=($supplier->place_of_supply=='Sharjah')?'selected':''?>>Sharjah</option>
                                <option value="Abu Dhabi" <?=($supplier->place_of_supply=='Abu Dhabi')?'selected':''?>>Abu Dhabi</option>
                                <option value="Ajman" <?=($supplier->place_of_supply=='Ajman')?'selected':''?>>Ajman</option>
                                <option value="Ras Al Khaima" <?=($supplier->place_of_supply=='Ras Al Khaima')?'selected':''?>>Ras Al Khaima</option>
                                <option value="Umm ul Quwain" <?=($supplier->place_of_supply=='Umm ul Quwain')?'selected':''?>>Umm ul Quwain</option>
                                <option value="Bahrain" <?=($supplier->place_of_supply=='Bahrain')?'selected':''?>>Bahrain</option>
                                <option value="Kuwait" <?=($supplier->place_of_supply=='Kuwait')?'selected':''?>>Kuwait</option>
                                <option value="Oman" <?=($supplier->place_of_supply=='Oman')?'selected':''?>>Oman</option>
                                <option value="Qatar" <?=($supplier->place_of_supply=='Qatar')?'selected':''?>>Qatar</option>
                                <option value="Saudi Arabia" <?=($supplier->place_of_supply=='Saudi Arabia')?'selected':''?>>Saudi Arabia</option>
                                </select>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                 <label for="currency" class="col-sm-2 text-right col-form-label"> Currecy:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                <select name="currency"class="form-control">
                                <option value="" disabled>Selecte currency</option>
                                <?php
                                foreach($currency_query as $currency_row){
                                $sel=($currency_row->currency_name==$supplier->currency)?'selected':'';
                                ?>
                                <option value="<?=$currency_row->currency_name?>" <?=$sel;?>><?=$currency_row->currency_name?></option>
                                <?php } ?>
                                </select>
                                        </div>
                                        </div>
                              

                         <div class="form-group row">
                                   <div class="col-sm-6 text-right">
                                   </div>
                                     <div class="col-sm-6 text-right">
                                        <div class="">
                                           
                                            <button type="button" onclick="supplier_form()" class="btn btn-success">
                                            	<?php echo (empty($supplier->supplier_id)?display('save'):display('update')) ?></button>
    
                                        </div>
                                       
                                    </div>
                                </div>
                               

                                <?php echo form_close();?>
                            </div>
    
                        </div>
                    </div>
                </div>
               

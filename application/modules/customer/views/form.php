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
                            	<?php echo form_open('','class="" id="customer_form"')?>
                            	
                            	<input type="hidden" name="customer_id" id="customer_id" value="<?php echo $customer->customer_id?>">
 	 
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-2 text-right col-form-label"><?php echo display('customer_name')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="<?php echo display('customer_name')?>" value="<?php echo $customer->customer_name?>">
                                            <input type="hidden" name="old_name" value="<?php echo $customer->customer_name?>">
    
                                        </div>
                                       
                                    </div>
                                     <label for="customer_mobile" class="col-sm-2 text-right col-form-label"><?php echo display('mobile_no')?> <i class="text-danger">  </i>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="number" name="customer_mobile" class="form-control input-mask-trigger text-left" id="customer_mobile" placeholder="<?php echo display('mobile_no')?>" value="<?php echo $customer->customer_mobile?>" data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="customer_email" class="col-sm-2 text-right col-form-label"><?php echo display('email_address')?>1:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control input-mask-trigger" name="customer_email" id="email" data-inputmask="'alias': 'email'" im-insert="true" placeholder="<?php echo display('email')?>" value="<?php echo $customer->customer_email?>">
    
                                        </div>
                                       
                                    </div>
                                      <label for="email_address" class="col-sm-2 text-right col-form-label"><?php echo display('email_address')?>2:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" class="form-control" name="email_address" id="email_address" placeholder="<?php echo display('email_address')?>" value="<?php echo $customer->email_address?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2 text-right col-form-label"><?php echo display('phone')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                          <input class="form-control input-mask-trigger text-left" id="phone" type="number" name="phone" placeholder="<?php echo display('phone')?>" data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true" value="<?php echo $customer->phone?>">
    
                                        </div>
                                       
                                    </div>

                                     <label for="contact" class="col-sm-2 text-right col-form-label"><?php echo display('contact')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                          <input class="form-control"  id="contact" type="text" name="contact" placeholder="<?php echo display('contact')?>" value="<?php echo $customer->contact?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address1" class="col-sm-2 text-right col-form-label"><?php echo display('address1')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                           <textarea name="customer_address" id="customer_address" class="form-control" placeholder="<?php echo display('address1')?>"><?php echo $customer->customer_address?></textarea>
    
                                        </div>
                                      
                                    </div>

                                          <label for="address2" class="col-sm-2 text-right col-form-label"><?php echo display('address2')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                           <textarea name="address2" id="address2" class="form-control" placeholder="<?php echo display('address2')?>"><?php echo $customer->address2?></textarea>
    
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="form-group row"> 
                                    <label for="fax" class="col-sm-2 text-right col-form-label"><?php echo display('fax')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                            <input type="text" name="fax" class="form-control" id="fax" placeholder="<?php echo display('fax')?>" value="<?php echo $customer->fax?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="city" class="col-sm-2 text-right col-form-label"><?php echo display('city')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            
                                            <input type="text" name="city" class="form-control" id="city" placeholder="<?php echo display('city')?>" value="<?php echo $customer->city?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                 
                                
                                <div class="form-group row">
                                    <label for="state" class="col-sm-2 text-right col-form-label"><?php echo display('state')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="state" class="form-control" id="state" placeholder="<?php echo display('state')?>"  value="<?php echo $customer->state?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="zip" class="col-sm-2 text-right col-form-label"><?php echo display('zip')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="zip" type="text" class="form-control" id="zip" placeholder="<?php echo display('zip')?>" value="<?php echo $customer->zip?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="country" class="col-sm-2 text-right col-form-label"><?php echo display('country')?>:</label>
                                    
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="country" type="text" class="form-control " placeholder="<?php echo display('country')?>" value="<?php echo $customer->country?>" id="country" >
    
                                        </div>
                                       
                                    </div>
                                    
                                    <?php if(empty($customer->customer_id)){?>

                                     <label for="previous_balance" class="col-sm-2 text-right col-form-label"><?php echo display('previous_balance')?>:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="previous_balance" type="number" class="form-control text-right input-mask-trigger" placeholder="<?php echo display('previous_balance')?>"  data-inputmask="'alias': 'decimal', 'groupSeparator': '', 'autoGroup': true" im-insert="true" >
    
                                        </div>
                                       
                                    </div>
                                <?php }?>
                                    
                                </div>

                              
                            	
                            	 <div class="form-group row">
                                    <label for="state" class="col-sm-2 text-right col-form-label">Buiding No:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="buiding_no" class="form-control" id="state" placeholder="Buiding No"  value="<?php echo $customer->buiding_no?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="zip" class="col-sm-2 text-right col-form-label">Additional Number:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="additional_number" type="text" class="form-control" id="additional_number" placeholder="Additional Number" value="<?php echo $customer->additional_number?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-2 text-right col-form-label">Vat Number:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input type="text" name="vat_number" class="form-control" id="vat_number" placeholder="Vat Number"  value="<?php echo $customer->vat_number?>">
    
                                        </div>
                                       
                                    </div>
                                    <label for="zip" class="col-sm-2 text-right col-form-label">Other Bayer Id:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                           
                                            <input name="zip" type="text" class="form-control" id="zip" placeholder="Other Bayer Id" value="<?php echo $customer->other_bayer_id?>">
    
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row">
                                    <label for="credit_limit" class="col-sm-2 text-right col-form-label">Credit Limit:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input type="text" name="credit_limit" class="form-control" id="credit_limit" placeholder="Credit Limit"  value="<?php echo $customer->credit_limit?>">
                                        </div>
                                    </div>
                                    <label for="credit_days" class="col-sm-2 text-right col-form-label">Credit Days:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input name="credit_days" type="text" class="form-control" id="credit_days" placeholder="Credit Days" value="<?php echo $customer->credit_days?>">
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="po_box" class="col-sm-2 text-right col-form-label">PO Box:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input type="text" name="po_box" class="form-control" id="po_box" placeholder="PO Box"  value="<?php echo $customer->po_box?>">
                                        </div>
                                    </div>
                                    <label for="website_link" class="col-sm-2 text-right col-form-label">Website Link:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                            <input name="website_link" type="text" class="form-control" id="website_link" placeholder="Website Link" value="<?php echo $customer->website_link?>">
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="tax_treatment" class="col-sm-2 text-right col-form-label">Tax Treatment:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                    <select name="tax_treatment"class="form-control">
                                   <option value="" disabled>Select VAT</option>
                                   <option value="VAT Registered" <?=($customer->tax_treatment=='VAT Registered')?'selected':''?>>VAT Registered</option>
                                   <option value="Non VAT Registered" <?=($customer->tax_treatment=='Non VAT Registered')?'selected':''?>>Non VAT Registered</option>
                                    <option value="GCC VAT Registered" <?=($customer->tax_treatment=='GCC VAT Registered')?'selected':''?>>GCC VAT Registered</option>
                                    <option value="GCC Non VAT Registered" <?=($customer->tax_treatment=='GCC Non VAT Registered')?'selected':''?>>GCC Non VAT Registered</option>
                                    <option value="Non GCC" <?=($customer->tax_treatment=='Non GCC')?'selected':''?>>Non GCC</option>
                                    <option value="VAT Registered - Designated Zone" <?=($customer->tax_treatment=='VAT Registered - Designated Zone')?'selected':''?>>VAT Registered - Designated Zone</option>
                                    <option value="NON VAT Registered - Designated Zone" <?=($customer->tax_treatment=='NON VAT Registered - Designated Zone')?'selected':''?>>NON VAT Registered - Designated Zone</option>
                                            </select>
                                           <!-- <input type="text" name="tax_treatment" class="form-control" id="tax_treatment" placeholder="PO Box"  value="<?php echo $customer->tax_treatment?>">-->
                                        </div>
                                    </div>
                                    <label for="place_of_supply" class="col-sm-2 text-right col-form-label">Place of Supply:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                <select name="place_of_supply"class="form-control">
                                <option value="" disabled>Selecte Place</option>
                                <option value="Dubai" <?=($customer->place_of_supply=='Dubai')?'selected':''?>>Dubai</option>
                                <option value="Sharjah" <?=($customer->place_of_supply=='Sharjah')?'selected':''?>>Sharjah</option>
                                <option value="Abu Dhabi" <?=($customer->place_of_supply=='Abu Dhabi')?'selected':''?>>Abu Dhabi</option>
                                <option value="Ajman" <?=($customer->place_of_supply=='Ajman')?'selected':''?>>Ajman</option>
                                <option value="Ras Al Khaima" <?=($customer->place_of_supply=='Ras Al Khaima')?'selected':''?>>Ras Al Khaima</option>
                                <option value="Umm ul Quwain" <?=($customer->place_of_supply=='Umm ul Quwain')?'selected':''?>>Umm ul Quwain</option>
                                <option value="Bahrain" <?=($customer->place_of_supply=='Bahrain')?'selected':''?>>Bahrain</option>
                                <option value="Kuwait" <?=($customer->place_of_supply=='Kuwait')?'selected':''?>>Kuwait</option>
                                <option value="Oman" <?=($customer->place_of_supply=='Oman')?'selected':''?>>Oman</option>
                                <option value="Qatar" <?=($customer->place_of_supply=='Qatar')?'selected':''?>>Qatar</option>
                                <option value="Saudi Arabia" <?=($customer->place_of_supply=='Saudi Arabia')?'selected':''?>>Saudi Arabia</option>
                                </select>
                                        </div>
                                       
                                    </div>
                                </div>
                                
                                 <label for="place_of_supply" class="col-sm-2 text-right col-form-label"> Currecy:</label>
                                    <div class="col-sm-4">
                                        <div class="">
                                <select name="currency"class="form-control">
                                <option value="" disabled>Selecte currency</option>
                                <?php
                                foreach($currency_query as $currency_row){
                                $sel=($currency_row->currency_name==$customer->currency)?'selected':'';
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
                                           
                                            <button type="button" onclick="customer_form()" class="btn btn-success">
                                            	<?php echo (empty($customer->customer_id)?display('save'):display('update')) ?></button>
    
                                        </div>
                                       
                                    </div>
                                </div>
                               

                                <?php echo form_close();?>
                            </div>
    
                        </div>
                    </div>
                </div>

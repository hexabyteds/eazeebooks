  <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('company_edit') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('dashboard/setting/company_update',array('class' => 'form-vertical', 'id' => 'update_company'))?>
                    <div class="panel-body">

 
                <div class="form-group row">
                            <label for="building_no" class="col-sm-3 col-form-label">Building No<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="building_no" value="<?php echo $companys->building_no?>"  placeholder="Building No" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_name" class="col-sm-3 col-form-label">Street Name<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="street_name" value="<?php echo $companys->street_name?>"  placeholder="Street Name" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-sm-3 col-form-label">District<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="district" value="<?php echo $companys->district?>"  placeholder="District" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-3 col-form-label">City <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="city" value="<?php echo $companys->city?>"  placeholder="City" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-3 col-form-label">Country<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="country" value="<?php echo $companys->country?>"  placeholder="Country" required tabindex="1"/>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="postal_code" class="col-sm-3 col-form-label">Postal Code<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="postal_code" value="<?php echo $companys->postal_code?>"  placeholder="Postal Code" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="additional_no" class="col-sm-3 col-form-label">Additional No<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="additional_no" value="<?php echo $companys->additional_no?>"  placeholder="Additional No" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vat_no" class="col-sm-3 col-form-label">Vat Number<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="vat_no" value="<?php echo $companys->vat_no?>"  placeholder="Vat Number" required tabindex="1"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="other_buyer_no" class="col-sm-3 col-form-label">Other Buyer No<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="other_buyer_no" value="<?php echo $companys->other_buyer_no?>"  placeholder="Other Buyer No" required tabindex="1"/>
                            </div>
                        </div>
                        

 
                        <div class="form-group row">
                            <label for="company_name" class="col-sm-3 col-form-label"><?php echo display('name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="company_name" value="<?php echo $companys->company_name?>"  placeholder="<?php echo display('company_name') ?>" required tabindex="1"/>
                            </div>
                        </div>
                        

                         <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label"><?php echo display('mobile') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" tabindex="3" class="form-control" name="mobile" name="mobile" value="<?php echo $companys->mobile?>"  placeholder="<?php echo display('mobile') ?>" required tabindex="2"/>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label"><?php echo display('address') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control input-description" tabindex="3" id="adress" name="address" placeholder="<?php echo display('address') ?>" required><?php echo $companys->address?></textarea>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"><?php echo display('email') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="email" tabindex="3" class="form-control" value="<?php echo $companys->email?>" name="email" placeholder="<?php echo display('email') ?>" required tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label"><?php echo display('website') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="url" tabindex="3" class="form-control" value="<?php echo $companys->website?>" name="website" placeholder="<?php echo display('website') ?>" required tabindex="5"/>
                            </div>
                        </div>

                        <input type="hidden" name="company_id" value="<?php echo $companys->company_id?>" />

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-company" class="btn btn-success btn-large" name="add-company" value="<?php echo display('save_changes') ?>" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
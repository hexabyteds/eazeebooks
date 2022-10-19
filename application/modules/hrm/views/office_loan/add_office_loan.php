
        <div class="row">
            <div class="col-sm-12">
               
                <?php if($this->permission1->method('add_ofloan_person','create')->access()){ ?>
                   <a href="<?php echo base_url('add_officeloan_person')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_person')?> </a>
               <?php }?>
        <?php if($this->permission1->method('add_loan_payment','create')->access()){ ?>
                  <a href="<?php echo base_url('add_office_loan_payment')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_payment')?> </a>
               <?php }?>
               <?php if($this->permission1->method('manage_ofln_person','read')->access()){ ?>
                  <a href="<?php echo base_url('manage_office_loan_person')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('manage_person')?> </a>
                  <?php }?>
               
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_office_loan') ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open_multipart('hrm/loan/bdtask_insert_office_loan',array('class' => 'form-vertical','id' => 'inflow_entry' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label"><?php echo display('name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="person_id" id="nameofficeloanperson" tabindex="1">
                                    <option><?php echo display('select_one')?></option>
                                  <?php foreach($person_list as $persons){?>
                                    <option value="<?php echo $persons['person_id']?>"><?php echo $persons['person_name']?></option>
                                   <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label"><?php echo display('phone') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control phone" name="phone" id="phone" required="" placeholder="<?php echo display('phone') ?>" min="0" tabindex="2"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label"><?php echo display('ammount') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="<?php echo display('ammount') ?>" min="0" tabindex="3"/>
                            </div>
                        </div>
                         <div class="form-group row" id="payment_from">
                                
                                    <label for="payment_type" class="col-sm-3 col-form-label"><?php
                                        echo display('payment_type');
                                        ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select name="paytype" class="form-control" required="" onchange="bank_paymetExpense(this.value)" tabindex="3">
                            <option value="1"><?php echo display('cash_payment')?></option>
                            <option value="2"><?php echo display('bank_payment')?></option> 
                                        </select>
                                      

                                     
                                    </div>
                                
                            </div>
                              
                            <div class="form-group row" id="bank_div">
                                <label for="bank" class="col-sm-3 col-form-label"><?php
                                    echo display('bank');
                                    ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                   <select name="bank_id" class="form-control"  id="bank_id">
                                        <option value="">Select Location</option>
                                        <?php foreach($bank_list as $bank){?>
                                            <option value="<?php echo $bank['bank_id']?>"><?php echo $bank['bank_name'];?></option>
                                        <?php }?>
                                    </select>
                                 
                                </div>
                             
                            </div>
                        
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control datepicker" name="date" id="date" value="<?php echo date("Y-m-d");?>" placeholder="<?php echo display('date') ?>" tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label"><?php echo display('details') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" placeholder="<?php echo display('details') ?>" tabindex="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="<?php echo display('reset') ?>" tabindex="6"/>
                                <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="7"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
   




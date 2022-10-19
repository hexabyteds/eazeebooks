<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4>
                      <?php echo display('opening_balance')?>   
                    </h4>
                </div>
            </div>
            <div class="panel-body">
              
                         <?php echo  form_open_multipart('account/account/bdtask_add_opening_balance','id="validate"') ?>
                     <div class="form-group row">
                        <label for="vo_no" class="col-sm-2 col-form-label"><?php echo display('voucher_no')?></label>
                        <div class="col-sm-4">
                             <input type="text" name="txtVNo" id="txtVNo" value="<?php if(!empty($voucher_no[0]['voucher'])){
                               $vn = substr($voucher_no[0]['voucher'],3)+1;
                              echo $voucher_n = 'OP-'.$vn;
                             }else{
                               echo $voucher_n = 'OP-1';
                             } ?>" class="form-control" readonly>
                        </div>
                    </div> 
                     <div class="form-group row">
                        <label for="date" class="col-sm-2 col-form-label"><?php echo display('date')?><i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                             <input type="text" name="dtpDate" id="dtpDate" class="form-control datepicker" value="<?php  echo date('Y-m-d');?>" required>
                        </div>
                    </div> 
                   
                    <div class="form-group row">
                        <label for="account_head" class="col-sm-2 col-form-label"><?php
                            echo display('account_head');
                            ?> <i class="text-danger">*</i></label>
                    <div class="col-sm-4">
                        <select name="headcode" class="form-control" required="" tabindex="3">
                    <option value="">Select One</option>
                    <?php foreach($headss as $acc_head){?>
                  <option value="<?php echo $acc_head->HeadCode;?>"><?php echo $acc_head->HeadName;?></option>
                    <?php }?>
                        </select>
                    </div>
                               
                    </div>
                      <div class="form-group row">
                        <label for="amount" class="col-sm-2 col-form-label"><?php echo display('amount')?><i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                             <input type="text" name="amount" id="amount" class="form-control" value="" required placeholder="0.00">
                        </div>
                    </div>

                       
                          
                        
                       <div class="form-group row">
                        <label for="txtRemarks" class="col-sm-2 col-form-label"><?php echo display('remark')?></label>
                        <div class="col-sm-4">
                          <textarea  name="txtRemarks" id="txtRemarks" class="form-control"></textarea>
                        </div>
                    </div> 
                   
                       
                        <div class="form-group row">
                           <label for="txtRemarks" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-4">

                                <input type="submit" id="add_receive" class="btn btn-success btn-large form-control" name="save" value="<?php echo display('save') ?>" tabindex="9"/>
                               
                            </div>
                        </div>
                  <?php echo form_close() ?>
            </div>  
        </div>
    </div>
</div>
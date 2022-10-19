  <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('customer_advance') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open('customer/customer/insert_customer_advance', array('class' => 'form-vertical', 'id' => 'insert_customer_adavance')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                            <select name="customer_id" class="form-control"  required="">
                            <option value=""><?php echo display('customer_name') ?></option>
                                <?php foreach($customer_list as $customers){?>
                            <option value="<?php echo html_escape($customers['customer_id'])?>"><?php echo html_escape($customers['customer_name'])?></option>
                                <?php }?>   
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="advance_type" class="col-sm-3 col-form-label"><?php echo display('advance_type') ?><i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <select name="type" class="form-control" required="">
                                   <option value=""> <?php echo display('advance_type') ?></option>
                                   <option value="1"> <?php echo display('payment') ?> </option>
                                   <option value="2"> <?php echo display('receive') ?></option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-sm-3 col-form-label"><?php echo display('amount') ?><i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="amount" id="amount" type="number" placeholder="<?php echo display('amount') ?>" required min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer-advance" class="btn btn-primary btn-large" name="add-customer-advance" value="<?php echo display('save') ?>" />
                              
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>


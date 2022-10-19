
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_benefits') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                     <?php echo  form_open('hrm/payroll/beneficial_entry') ?>
                        <div class="form-group row">
                            <label for="salary_benefits" class="col-sm-3 col-form-label"><?php echo display('salary_benefits') ?><span class="text-danger"> *</span> </label>
                            <div class="col-sm-6">
                                <input name="sal_name" class="form-control" type="text" placeholder="<?php echo display('salary_benefits') ?>" id="sal_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="emp_sal_type" class="col-sm-3 col-form-label"><?php echo display('salary_benefits_type') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <select name="emp_sal_type" class="form-control"  placeholder="<?php echo display('salary_benefits_type') ?>" id="emp_sal_type" required>
                           <option value="1"><?php echo display('add')?></option>
                           <option value="0"><?php echo display('deduct')?></option>
                                </select>
                            </div>
                        </div> 
             
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                        </div>
                    <?php echo form_close() ?>
                </div>
                 </div>
            </div>

        </div>
   





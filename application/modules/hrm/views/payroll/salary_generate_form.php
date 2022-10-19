<script src="<?php echo base_url() ?>my-assets/js/admin_js/payroll.js" type="text/javascript"></script>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel">
                
                <div class="panel-body">

                    <?php echo  form_open('hrm/payroll/create_salary_generate') ?>

                            <div class="form-group row">
                            <label for="salary_month" class="col-sm-3 col-form-label"><?php echo display('salary_month') ?><span class="text-danger">*</span> </label>
                            <div class="col-sm-6">
                           <input name="myDate" class="monthYearPicker form-control" required="" />
                           
                            </div>
                            </div>
                        <div class="form-group text-center">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('generate') ?></button>
                        </div>
                    <?php echo form_close() ?>

                </div>  
            </div>
        </div>
    </div>
 


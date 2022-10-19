<script src="<?php echo base_url() ?>my-assets/js/admin_js/account.js" type="text/javascript"></script>

<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
           
            <div class="panel-body">
                <?php echo  form_open_multipart('general_ledger') ?>
                <div class="row" id="">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('gl_head')?><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="cmbGLCode" id="cmbGLCode" required="">
                                    <option></option>
                                    <?php
                                    foreach($general_ledger as $g_data){
                                        ?>
                                        <option value="<?php echo $g_data->HeadCode;?>"><?php echo $g_data->HeadName;?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('transaction_head')?><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <select name="cmbCode" class="form-control" id="ShowmbGLCode">

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('from_date') ?><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="dtpFromDate" value="<?php echo date('Y-m-d')?>" placeholder="<?php echo display('date') ?>" class="datepicker form-control" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"><?php echo display('to_date') ?><span class="text-danger">*</span></label>
                            <div class="col-sm-8">
                                <input type="text"  name="dtpToDate" value="<?php echo date('Y-m-d')?>" placeholder="<?php echo display('date') ?>" class="datepicker form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8">
                                <input type="checkbox" id="chkIsTransction" name="chkIsTransction" size="40"/>&nbsp;&nbsp;&nbsp;<label for="chkIsTransction"><?php echo display('with_details')?></label>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('find') ?></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

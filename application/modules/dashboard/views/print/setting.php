        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('print_setting');
                             ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open('dashboard/padprint/bdtask_update_print_setting', array('class' => 'form-vertical', 'id' => 'print_setting')) ?>
                    <div class="panel-body">

                        <div class="form-group row">
                            <label for="header" class="col-sm-3 col-form-label"><?php echo display('header') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               
                                <input type="number" name="header" value="<?php echo $print_data->header?>" class="form-control" required>

                                <input type="hidden" name="id" value="<?php echo $print_data->id?>" class="form-control" >
                            </div>
                            <label class="col-sm-1">px</label>
                        </div>

                       <div class="form-group row">
                            <label for="footer" class="col-sm-3 col-form-label"><?php echo display('footer') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               
                                <input type="number" name="footer" value="<?php echo $print_data->footer?>" class="form-control" required>
                            </div>
                            <label class="col-sm-1">px</label>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit"  id="add-setting" class="btn btn-success btn-large" name="add-setting" value="<?php echo display('save_changes') ?>" tabindex="13"/>
                            </div>
                        </div>
                    </div>
                       <?php echo form_close() ?>
                </div>
            </div>
        </div>
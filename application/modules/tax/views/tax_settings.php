
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('tax_settings') ?> </h4>
                        </div>
                    </div>
                   <?php echo form_open_multipart('tax/tax/create_tax_settins',array('class' => 'form-vertical','id' => 'tax_settings' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="number_of_tax" class="col-sm-2 col-form-label"><?php echo display('number_of_tax') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="nt" id="number_of_tax" required="" placeholder="<?php echo display('number_of_tax') ?>" onkeyup="add_columnTaxsettings(this.value)" />
                            </div>
                        </div>
                        <span id="taxfield" class="form-group row"></span>

                       

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-settings" class="btn btn-success" name="add-settings" value="<?php echo display('save') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
 
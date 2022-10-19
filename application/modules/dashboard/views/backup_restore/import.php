<div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo (!empty($title) ? $title : null) ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                    <?php echo form_open_multipart('dashboard/backup_restore/importdata') ?>
                       <div class="form-group row">
                    <label for="import" class="col-sm-2 col-form-div"><?php echo display('import') ?></label>
                        <div class="col-sm-4">
                            <input type="file" name="image" class="form-control"  placeholder="<?php echo display('import') ?>" id="file" required>
                        </div>
                        <button type="submit" class="btn btn-success col-sm-2"><?php echo display('import') ?></button>
                    </div>
                     
                     <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

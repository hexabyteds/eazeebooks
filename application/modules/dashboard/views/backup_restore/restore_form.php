   <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo (!empty($title) ? $title : null) ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                       <?php echo form_open_multipart('dashboard/backup_restore/Data_backup') ?>

                       <div class="form-group row">
                        <div class="col-sm-12">
                            <center>
                      <h3> If You want to Restore your database . Please click on confirm button.</h3>
                      <p class="text-danger"> It will delete all your data from your database !!</p>
                      </center>
                       </div>
                      </div>
                      <center>
                       <a href="<?php echo base_url();?>"  class="btn btn-danger w-md m-b-5"><?php echo display('cancel') ?></a>
                     <button type="submit" onclick="return confirm('Are you Sure to Restore Your Database ??')" class="btn btn-success w-md m-b-5"><?php echo display('confirm') ?></button>
                     </center>
                     <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

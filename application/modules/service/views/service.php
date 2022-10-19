<div class="row">
            <div class="col-sm-12">
                
 <?php if($this->permission1->method('create_service','create')->access()){ ?>
                    <a href="<?php echo base_url('add_service') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_service') ?> </a>
<?php }?>

               
            </div>
        </div>

        <!-- Manage service -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-center"><?php echo display('service_name') ?></th>
                                        <th class="text-center"><?php echo display('charge') ?></th>
                                        <th class="text-center"><?php echo display('description') ?></th>
                                         <?php foreach ($taxfiled as $taxhead){?>
                                        <th class="text-center"><?php echo $taxhead['tax_name']; ?></th>
                                       <?php }?>
                                        
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($service_list) {
                                        $sl=1;
                                        foreach ($service_list as $services) {
                                         
                                        ?>
                                        
                                        <tr>
                            <td class="text-center"><?php echo $sl;?></td>
                            <td class="text-center"><?php echo html_escape($services['service_name']);?></td>
                            <td class="text-center"><?php echo html_escape($services['charge']);?></td>
                            <td class="text-center"><?php echo html_escape($services['description']);?></td>
                             <?php for($i=0;$i<$rowumber;$i++){
                              $tax = 'tax'.$i;
                                ?>
                            <td class="text-center"><?php echo round($services[$tax]*100);?> %</td>
                            <?php }?>
                                            <td>
                                    <center>
                                        <?php echo form_open() ?>
                                        <?php if($this->permission1->method('manage_service','update')->access()){ ?>
                                        <a href="<?php echo base_url() . 'edit_service/'.$services['service_id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        
                                    <?php }?>
                                      <?php if($this->permission1->method('manage_service','delete')->access()){ ?>
                                        <a href="<?php echo base_url('service/service/service_delete/'.$services['service_id']) ?>" class="btn btn-danger btn-sm"  data-toggle="tooltip" data-placement="right" title="delete" onclick="return confirm('Are Your Sure ?')" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <?php }?>
                                            <?php echo form_close() ?>
                                    </center>
                                    </td>
                                    </tr>
                                   
                                    <?php $sl++;}
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="service_csv" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo display('service_csv_upload'); ?></h4>
      </div>
      <div class="modal-body">

                <div class="panel">
                    <div class="panel-heading">
                        
                            <div><a href="<?php echo base_url('assets/data/csv/service_csv_sample.csv') ?>" class="btn btn-primary pull-right"><i class="fa fa-download"></i><?php echo display('download_sample_file')?> </a> </div>
                       
                    </div>
                    
                    <div class="panel-body">
                       
                      <?php echo form_open_multipart('Cservice/uploadCsv_service',array('class' => 'form-vertical', 'id' => 'validate','name' => 'insert_service'))?>
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="upload_csv_file" class="col-sm-4 col-form-label"><?php echo display('upload_csv_file') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="upload_csv_file" type="file" id="upload_csv_file" placeholder="<?php echo display('upload_csv_file') ?>" required>
                                    </div>
                                </div>
                            </div>
                        
                       <div class="col-sm-12">
                        <div class="form-group row">
                            <div class="col-sm-12 text-right">
                                <input type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product" value="<?php echo display('submit') ?>" />
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                               
                            </div>
                        </div>
                        </div>
                          <?php echo form_close()?>
                    </div>
                    </div>
                  
               
     
      </div>
     
    </div>

  </div>
</div>
        </div>
    
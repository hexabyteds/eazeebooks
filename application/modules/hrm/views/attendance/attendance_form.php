
<div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span><?php echo display('checkin') ?></span>
                    <span class="padding-lefttitle">
<button type="button" class="btn btn-primary btn-md" data-target="#bulk_attendance" data-toggle="modal"  >
<i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo display('bulk_checkin')?></button> 
<a href="<?php echo base_url();?>attendance_list" class="btn btn-primary"><?php echo display('manage_attendance')?></a>

                    </span>
                </div>
 <div class="panel-body">
                
<div class="row">
        <div class="col-sm-12 col-md-12">
       

                    <?php echo  form_open('hrm/attendance/bdtask_create_atten') ?>
                        <div class="form-group row">
                            <label for="employee_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9">
                       <?php  if($this->session->userdata('isAdmin')==1){?> 
                              <?php echo form_dropdown('employee_id',$dropdownatn,null,'class="form-control" id="employee_id" required') ?>
                              <?php }else{?> 
                                <input type="text" name="employee_name" class="form-control" value="<?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name');?>" readonly>
                                 <input type="hidden" name="employee_id" id="employee_id" class="form-control" value="<?php echo $this->session->userdata('employee_id');?>">
                               <?php }?>
                            </div>
                        </div> 
                        <div class="form-group row ">
                            <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9 picker-container">                          
                              
                                 <input type="text" id="date" value="<?php echo  date('Y-m-d');?>" name="date" class="form-control datepicker">
                            </div>
                        </div>
                              <div class="form-group row ">
                            <label for="time" class="col-sm-3 col-form-label"><?php echo display('sign_in') ?> <span class="text-danger">*</span></label>
                            <div class="col-sm-9 picker-container">                          
                              
                                 <input type="text" id="timepicker-12-hr" name="intime" class="form-control timepicker" required="">
                            </div>
                        </div>
                                
                        <div class="form-group text-center">
                           
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('check_in') ?></button>
                        </div>
                    <?php echo form_close() ?>

               
        </div>
    </div>

</div>
</div>
</div>

</div>
    <div id="bulk_attendance" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong><?php echo display('add_attendance')?></strong>
            </div>
            <div class="modal-body">
        <div class="panel">
                    <div class="panel-heading">
                        
                            <div><a href="<?php echo base_url('assets/data/csv/attendance_csv_sample.csv') ?>" class="btn btn-primary pull-right"><i class="fa fa-download"></i><?php echo display('download_sample_file')?> </a> </div>
                       
                    </div>
                    
                    <div class="panel-body">
                       
                      <?php echo form_open_multipart('hrm/attendance/attendance_bulkupload',array('class' => 'form-vertical', 'id' => 'validate','name' => 'insert_attendance'))?>
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
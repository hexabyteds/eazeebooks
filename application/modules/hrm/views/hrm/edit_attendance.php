
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4><?php echo display('edit_attendance')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
     <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel ">
                <div class="panel-heading" >
                    <div class="panel-title">
                         <h4><?php echo (!empty($title)?$title:null) ?></h4>
                    </div>
                </div>
                <div class="panel-body">
                 <?php echo  form_open('Cattendance/edit_atn_form/'. $data[0]['att_id']) ?>

<input name="att_id" type="hidden" value="<?php echo html_escape($data[0]['att_id']) ?>">

   <div class="form-group row">
        <label for="emp_id" class="col-sm-3 col-form-label"><?php echo display('employee_name') ?> *</label>
        <div class="col-sm-9">
             <?php echo form_dropdown('employee_id',$dropdownatn,(!empty($data[0]['employee_id'])?$data[0]['employee_id']:null),'class="form-control" id="employee_id"') ?>
        </div>
    </div>

<div class="form-group row">
    <label for="date" class="col-sm-3 col-form-label"><?php echo display('date') ?> *</label>
    <div class="col-sm-9">
        <input name="date" class="form-control datepicker" type="text" id="date" value="<?php echo html_escape($data[0]['date'])?>">
    </div>
</div> 

<div class="form-group row">
    <label for="sign_in" class="col-sm-3 col-form-label"><?php echo display('sign_in') ?> </label>
    <div class="col-sm-9">
        <input name="sign_in" value="<?php echo @$sign_in=html_escape($data[0]['sign_in'])?>" class="form-control " type="text"    id="sign_in">
    </div>
</div>

                        
<div class="form-group row">
    <label for="sign_out" class="col-sm-3 col-form-label"><?php echo display('sign_out') ?> </label>
    <div class="col-sm-9">
        <input type="text" name="sign_out" value="<?php echo @$sign_out=html_escape($data[0]['sign_out']) ;?>" class="form-control"   id="" > 
    </div>
</div>


                                  
<div class="form-group text-right">
    
    <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('update') ?></button>
</div>

<?php echo form_close() ?>


                </div>  
            </div>
        </div>
    </div>            </div>
                </div>
            </div>
 
 

<div class="row">
  <!--  table area -->
  <div class="col-sm-12">
    
    <div class="panel panel-default thumbnail"> 

      <div class="panel-body">
        <table width="100%" class="datatable table table-striped table-bordered table-hover"  id="dataTableExample3">
          <thead>
            <tr>
              <th><?php echo display('sl') ?></th>
              <th><?php echo display('employee_name') ?></th>
              <th><?php echo display('salary_type') ?></th>
              <th><?php echo display('date') ?></th>
              <th><?php echo display('action') ?></th>

            </tr>
          </thead>
          <tbody>
            <?php if (!empty($emp_sl_setup)) { ?>
              <?php $sl = 1; ?>
              <?php foreach ($emp_sl_setup as $que) { ?>
                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                  <td><?php echo $sl; ?></td>
                  <td><?php echo html_escape($que->first_name).' '.html_escape($que->last_name); ?></td>
                  <td><?php if($que->sal_type==1){
                    echo 'Hourly';
                  }else{
                    echo 'Salary';
                  } ?></td>
                  <td><?php echo html_escape($que->create_date); ?></td>
                  <td class="center"> 
       <?php if($this->permission1->method('manage_salary_setup','update')->access()){ ?>                         
                  <a href="<?php echo base_url("edit_salary_setup/$que->employee_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                <?php }?>
       <?php if($this->permission1->method('manage_salary_setup','delete')->access()){ ?>           
                  <a href="<?php echo base_url("hrm/payroll/delete_salsetup/$que->employee_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                   <?php }?>
                    </td>
                </tr>
                <?php $sl++; ?>
              <?php } ?> 
            <?php } ?> 
          </tbody>
        </table>  <!-- /.table-responsive -->
      </div>
    </div>
  </div>
</div>
  


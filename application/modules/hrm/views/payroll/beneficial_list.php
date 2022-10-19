
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('benefits_list') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                      <table width="100%" class="datatable table table-striped table-bordered table-hover"  id="dataTableExample3">
                    <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                            <th><?php echo display('benefits') ?></th>
                            <th><?php echo display('benefit_type') ?></th>
                           <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($beneficial_list)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($beneficial_list as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo html_escape($que->sal_name); ?></td>
                                    <td><?php  $type=html_escape($que->salary_type);
                                    if($type==1){
                                        echo display('add');
                                    }else{
                                        echo display('deduct');
                                    }
                                    ?></td>                            
                                    <td class="center">
         <?php if($this->permission1->method('manage_benefits','update')->access()){ ?>                          
                                        <a href="<?php echo base_url("edit_beneficial/$que->salary_type_id") ?>" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a> 
                                    <?php }?>
     <?php if($this->permission1->method('manage_benefits','delete')->access()){ ?>                             
                                        <a href="<?php echo base_url("hrm/payroll/delete_benefits/$que->salary_type_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
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
 



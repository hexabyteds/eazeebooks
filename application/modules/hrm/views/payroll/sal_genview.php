<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                            <tr>
                                <th><?php echo display('sl') ?></th>
                                <th><?php echo display('salary_month') ?></th>
                                <th><?php echo display('generate_by') ?></th>
                                <th><?php echo display('action') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($salgen)) { ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($salgen as $que) { ?>
                                <tr class="<?php echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php echo $sl; ?></td>
                                    <td><?php echo html_escape($que->gdate); ?></td>
                                    <td><?php echo html_escape($que->generate_by); ?></td>
                                                                
                                    <td class="center">
        <?php if($this->permission1->method('manage_salary_generate','delete')->access()){ ?>
                                        <a href="<?php echo base_url("hrm/payroll/delete_salgenerate/$que->ssg_id") ?>" class="btn btn-xs btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a> 
                                    <?php } ?>
                                      
                                    </td>
                                </tr>
                                <?php $sl++; ?>
                            <?php } ?> 
                        <?php } ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                 <div class="text-right"><?php echo $links ?></div>
            </div>
        </div>
    </div>
</div>
 

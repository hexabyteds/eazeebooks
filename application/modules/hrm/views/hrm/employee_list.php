
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                        <th class="text-center"><?php echo display('sl') ?></th>
                        <th class="text-center"><?php echo display('name') ?></th>
                        <th class="text-center"><?php echo display('designation') ?></th>
                        <th class="text-center"><?php echo display('phone') ?></th>
                        <th class="text-center"><?php echo display('email') ?></th>
                        <th class="text-center"><?php echo display('picture') ?></th>
                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($employee_list) {
                                        ?>
                                       
                                        <?php
                                        $sl = 1;
                                         foreach($employee_list as $employees){?>
                                        <tr>
                                <td class="text-center"><?php echo $sl;?></td>
                                <td class="text-center"><?php echo html_escape($employees['first_name']).' '.html_escape($employees['last_name']);?></td>
                                <td class="text-center"><?php echo html_escape($employees['designation']);?></td>
                                <td class="text-center"><?php echo html_escape($employees['phone']);?></td>
                                <td class="text-center"><?php echo html_escape($employees['email']);?></td>
                                 <td class="text-center"><img src="<?php echo (!empty($employees['image'])?base_url().$employees['image']:base_url('assets/img/icons/default.jpg')) ; ?>" height="60px" width="80px"></td>
                                            <td>
                                    <center>
                                        <?php echo form_open() ?>
        <?php if($this->permission1->method('manage_employee','update')->access()){ ?>                          
                                        <a href="<?php echo base_url() . 'employee_form/'.$employees['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <?php }?>
    <?php if($this->permission1->method('manage_employee','delete')->access()){ ?>                                
                                        <a href="<?php echo base_url('hrm/hrm/bdtask_delete_employee/'.$employees['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('<?php echo display('are_you_sure') ?>')" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                         <?php }?>
                                   <a href="<?php echo base_url('employee_profile/'.$employees['id']);?>" class="btn btn-default"><i class="fa fa-user"></i></a>
                                            <?php echo form_close() ?>
                                    </center>
                                    </td>
                                    </tr>
                                   
                                    <?php
                                    $sl++;
                                }}
                                ?>
                                </tbody>
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>







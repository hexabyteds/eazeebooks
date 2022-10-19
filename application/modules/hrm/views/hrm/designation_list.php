
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                          <h4><?php echo display('manage_designation')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="" class="table table-bordered table-striped table-hover datatable">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-center"><?php echo display('designation') ?></th>
                                        <th class="text-center"><?php echo display('details') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($designation_list) {
                                        ?>
                                       
                                        <?php
                                        $sl =1;
                                         foreach($designation_list as $designations){?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl;?></td>
                                            <td class="text-center"><?php echo html_escape($designations['designation']);?></td>
                                            <td class="text-center"><?php echo html_escape($designations['details']);?></td>
                                            <td>
                                    <center>
                                        <?php echo form_open() ?>
         <?php if($this->permission1->method('manage_designation','update')->access()){ ?>                              
                                        <a href="<?php echo base_url() . 'designation_form/'.$designations['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <?php } ?>
      <?php if($this->permission1->method('manage_designation','delete')->access()){ ?>                                
                                        <a href="<?php echo base_url('hrm/hrm/bdtask_deletedesignation/'.$designations["id"]) ?>" class="btn btn-danger btn-sm"  onclick="return confirm('<?php echo display('are_you_sure') ?>')" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <?php }?>
                                   
                                            <?php echo form_close() ?>
                                    </center>
                                    </td>
                                    </tr>
                                   
                                    <?php
                                    $sl++;
                                }}
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 





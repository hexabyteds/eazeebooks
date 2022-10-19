        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">

                     <div class="table-responsive">
                    <table id="" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th><?php echo display('sl') ?></th>
                            <th><?php echo display('role_name') ?></th>
                          
                             <th width="130"><?php echo display('action') ?></th>
                         
                        </tr>
                        </thead>
        <tbody>
                         <?php
                           if($user_count >0){
                                  foreach($user_list as $key=>$row){
                                    ?>
                                    <tr>
                                    <td><?php echo ++$key; ?></td>
                                    <td><?php echo $row['type']; ?></td>

                                    <td>
                                        <center>
                    <?php if($this->permission1->method('role_list','update')->access()){?>                     
                                            <a href="<?php echo base_url().'edit_role/'.$row['id']; ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                      <?php }?>
                    <?php if($this->permission1->method('role_list','delete')->access()){?>
                                               <a href="<?php echo base_url().'dashboard/permission/bdtask_role_delete/'.$row['id']; ?>" onClick="return confirm('Are You Sure to Want to Delete?')" class=" btn btn-danger btn-xs" name="pidd" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                               <?php }?>
                                        </center>
                                    </td>
                                 

                                </tr>
                                    <?php
                                  }
                           }
                           else{
                            ?>
                              <tr>
                                <td></td>
                                <td><?php echo display('data_not_found')?></td>
                                <td></td>
                            </tr>
                            <?php
                           }
                           ?>



                        </tbody>
                           
                    </table>
                </div>
                    </div>
                   
                </div>
            </div>
        </div>


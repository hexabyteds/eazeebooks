
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-center"><?php echo display('customer_name') ?></th>
                                        <th class="text-center"><?php echo display('date') ?></th>
                                        <th class="text-center"><?php echo display('description') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($service) {
                                        $sl=1;
                                        foreach ($service as $services) {
                                         
                                        ?>
                                        
                                        <tr>
                            <td class="text-center"><?php echo $sl;?></td>
                            <td class="text-center"><?php echo html_escape($services['customer_name']);?></td>
                            <td class="text-center"><?php echo html_escape($services['date']);?></td>
                            <td class="text-center"><?php echo html_escape($services['details']);?></td>
                          
                                            <td>
                                    <center>
                                        <?php echo form_open() ?>
                                        <?php if($this->permission1->method('manage_service','update')->access()){ ?>
                                        <a href="<?php echo base_url() . 'edit_service_invoice/'.$services['voucher_no']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <?php }?>
                                      <?php if($this->permission1->method('manage_service','delete')->access()){ ?>
                                        <a href="<?php echo base_url() . 'service/service/service_invoic_delete/'.$services['voucher_no']; ?>" class="btn btn-danger btn-sm" name="<?php echo $services['voucher_no'];?>" onclick="return confirm('<?php echo display('are_you_sure') ?>')" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <?php }?>
                                     <a href="<?php echo base_url() . 'service/service/servicedetails_download/'.$services['voucher_no']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('download') ?>"><i class="fa fa-download" aria-hidden="true"></i></a>
                                      <a href="<?php echo base_url() . 'service_details/'.$services['voucher_no']; ?>" class="btn btn-success btn-sm" name="<?php echo $services['voucher_no'];?>"  data-original-title="<?php echo display('details') ?> "><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <?php echo form_close() ?>
                                    </center>
                                    </td>
                                    </tr>
                                   
                                    <?php $sl++;}
                                }
                                ?>
                                </tbody>
                            </table>
                            <?php echo $links ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
 
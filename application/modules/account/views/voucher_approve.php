
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
          
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('voucher_no') ?></th>
                                 <th><?php echo display('date') ?></th>
                                <th><?php echo display('remark') ?></th>
                                <th><?php echo display('debit') ?></th>
                                <th><?php echo display('credit') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($aprrove)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($aprrove as $approve) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo html_escape($approve->VNo); ?></td>
                                <td><?php echo html_escape($approve->VDate); ?></td>
                                <td><?php echo html_escape($approve->Narration); ?></td>
                                <td><?php
                                 echo ($approve->Vtype=='CV'?0:$approve->Debit); ?></td>
                                <td><?php echo ($approve->Vtype=='DV'?0:$approve->Credit); ?></td>
                                <td>

                                <a href="<?php echo base_url("account/account/isactive/$approve->VNo/active") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="right" title="Inactive"><?php echo display('approved')?></a>
                                <?php if($this->permission1->method('aprove_v','update')->access()){ ?>
                                <a href="<?php echo base_url("edit_voucher/$approve->VNo") ?>" class="btn btn-info btn-sm" title="Update"><i class="fa fa-edit"></i></a>
                            <?php }?>
                            <?php if($this->permission1->method('aprove_v','delete')->access()){ ?>
                                <a href="<?php echo base_url("account/account/voucher_delete/$approve->VNo") ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')" title="delete"><i class="fa fa-trash"></i></a>
                            <?php }?>
                                
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                 
                </div>
            </div> 
        </div>
    </div>
</div>

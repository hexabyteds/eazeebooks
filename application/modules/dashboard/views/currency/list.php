<div class="row">
    <div class="col-sm-12 col-md-12">
        
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                     <a href="<?php echo base_url('currency_form')?>" class="btn btn-info m-b-5 m-r-2" style="position: absolute;
    right: 0;
    bottom: 12px"><i class="ti-list"> </i>Add Currency</a>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('currency_name') ?></th>
                                <th><?php echo display('currency_icon') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                             if($currency_list){ ?>
                            <?php $sl = 1; ?>
                            <?php foreach($currency_list as $value) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                               
                                <td><?php echo $value->currency_name; ?></td>
                                <td><?php echo $value->icon; ?></td>
                               
                                <td>
                                    <a href="<?php echo base_url("currency_form/$value->id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                                    <a href="<?php echo base_url("dashboard/setting/bdtask_deletecurrency/$value->id") ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                   
                                </td>
                            </tr>
                            <?php }} ?> 
                        </tbody>
                    </table>
                </div>
                
            </div> 
        </div>
    </div>
</div>

 
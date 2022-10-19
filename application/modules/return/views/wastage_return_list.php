
        <div class="row">
            <div class="col-sm-12">
                
                   <?php if($this->permission1->method('add_return','create')->access()){ ?>
                    <a href="<?php echo base_url('return_form') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_return') ?> </a>
                   <?php }?>


              
            </div>
        </div>

      
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('invoice_id') ?></th>
                                        <th><?php echo display('customer_name') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('total_amount') ?></th>
                                        <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($return_list) {
                                        ?>
                                   <?php
                                   $sl = 1;
                                    foreach($return_list as $returns){?>
                                        <tr>
                            <td><?php echo $sl++;?></td>
                            <td>
                                <a href="<?php echo base_url() . 'invoice_return_details/'.$returns['invoice_id']; ?>">
                                    <?php echo $returns['invoice_id']?>
                                </a>
                            </td>
                            <td>
                                <?php echo $returns['customer_name']?>			
                            </td>

                            <td><?php echo $returns['date_return']?></td>
                            <td class="text-right"><?php echo (($position == 0) ? $currency.' '.$returns['net_total_amount']: $returns['net_total_amount'].' '.$currency) ?></td>
                                            <td>
                                    <center>
                                        <a href="<?php echo base_url() . 'invoice_return_details/'.$returns['invoice_id']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('details') ?>"><i class="fa fa-window-restore" aria-hidden="true"></i></a>

                 <?php if($this->permission1->method('return_list','delete')->access()){ ?>
                                        <a href="<?php echo base_url() . 'return/returns/delete_retutn_invoice/'.$returns['invoice_id']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('delete') ?>" onclick="return confirm('Do you want to delete it?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <?php }?>
                                    </center>
                                    </td>
                                    </tr>
                                   
                                    <?php
                                }}
                                ?>
                                </tbody>
                            </table>
                            <div class="text-right"><?php echo $links ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/employee.js.php" ></script>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_expense') ?></h4>
                        </div>
                     
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                       
                                        <th><?php echo display('date') ?></th>
                                        <th><?php echo display('type') ?></th>
                                        <th class="text-center"><?php echo display('amount') ?></th>
                                      
                                        <th><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $totalam = 0;
                                    if ($expense_list) {
                                        foreach ($expense_list as $expense) {
                                            ?>
                                            <tr>
                                           
                                                <td><?php echo html_escape($expense['date']); ?></td>
                                                <td>
                                                   
                                                        <?php echo html_escape($expense['type']).' Expense'; ?>
                                                   
                                                </td>
                                                <td class="text-right"><?php echo html_escape($expense['amount']);
                                          $totalam += $expense['amount'];      
                                                ?></td>
                                              
                                                <td>
                                                    
        <?php if($this->permission1->method('manage_expense','delete')->access()){ ?>
                                                      <a href="<?php echo base_url("hrm/expense/delete_expense/".$expense['voucher_no']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                                    <?php }?>
                                                    
                                                </td>
                                            </tr>

         
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-right"><b><?php echo display('total')?></b></td>
                                        <td class="text-right"><b><?php echo html_escape(number_format($totalam,2))?></b></td>
                                        <td></td>
                                    </tr>
                                </tfoot>

                            </table>
                            <div class="text-center"><?php echo $links ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
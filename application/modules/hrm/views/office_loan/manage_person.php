
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_person') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('name') ?></th>
                                        <th><?php echo display('address') ?></th>
                                        <th><?php echo display('phone') ?></th>
                                        <th class="text-right"><?php echo display('balance') ?></th>
                                        <th><?php echo display('action') ?>
                                        
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $subtotal ='0.00';
                                    if ($person_list) {
                                      
                                        foreach ($person_list as $person) {
                                            $sql = 'SELECT (SELECT SUM(a.debit) FROM person_ledger a where a.person_id = "'.$person['person_id'].'") debit,
                                                    (SELECT SUM(b.credit) FROM person_ledger b WHERE b.person_id = "'.$person['person_id'].'") credit';
                                             $result = $this->db->query($sql)->result();
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url('office_loan_person_ledger/' . $person['person_id']); ?>">
                                                        <?php echo html_escape($person['person_name']); ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo html_escape($person['person_address']); ?>
                                                </td>
                                                <td>
                                                    <?php echo html_escape($person['person_phone']); ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php
                                                    $balance = $result[0]->debit - $result[0]->credit;
                                                    echo $currency.' '.number_format($balance, '2', '.', ',');
                                                    $subtotal +=$balance;
                                                    ?>
                                                </td>
                                                <td>
                                                <?php if($this->permission1->method('manage1_person','read')->access()){ ?>
                                                    <a href="<?php echo base_url('edit_office_loan_person/' . $person['person_id']); ?>"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                <?php }?>
                                                  <?php if($this->permission1->method('manage1_person','delete')->access()){ ?>
                                                  <a href="<?php echo base_url('hrm/loan/delete_office_loan/'.$person['person_id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('<?php echo display('are_you_sure') ?>') "><i class="fa fa-trash"></i></a>
                                                  <?php }
                                        ?>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                      
                                        <?php
                                    }
                                    ?>
                                </tbody>
                               <tfooter><tr><td class="text-center" colspan="3"><b><?php echo display('total')?></b></td><td class="text-right"><?php   if(($position==0)){
                                           echo  $currency.' '.number_format($subtotal, '2', '.', ',');
                                        }else{
                                            echo number_format($subtotal, '2', '.', ',').' '.$currency;
                                        } ?></td><td></td></tr></tfooter>
                            </table>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
                    </div>
                </div>
            </div>
        </div>
 
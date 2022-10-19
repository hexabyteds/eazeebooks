 <?php if (!empty($customers)) {?>
                            <?php $sl = 1 ?>
                            <?php foreach ($customers as $value) {?>
                            <tr>
                                <td><?php echo  $sl++ ?></td>
                                <td><?php echo  html_escape($value->customer_name); ?></td>
                                <td><?php echo  html_escape($value->customer_email); ?></td>
                                <td><?php echo  html_escape($value->customer_mobile); ?></td>
                                <td><?php echo  html_escape((!empty($value->balance)?$value->balance:0)); ?></td>
                                <td>
                                  <a href="<?php echo base_url("customer/customer/form/$value->customer_id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="pe-7s-note" aria-hidden="true"></i></a>  
                                 <a onclick="customerdelete(<?php echo $value->customer_id?>)" href="javascript:void(0)"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="pe-7s-trash" aria-hidden="true"></i></a>
                             </td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
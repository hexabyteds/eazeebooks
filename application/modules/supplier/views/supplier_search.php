 <?php if (!empty($suppliers)) {?>
                            <?php $sl = 1 ?>
                            <?php foreach ($suppliers as $value) {?>
                            <tr>
                                <td><?php echo  $sl++ ?></td>
                                <td><?php echo  html_escape($value->supplier_name); ?></td>
                                <td><?php echo  html_escape($value->supplier_email); ?></td>
                                <td><?php echo  html_escape($value->supplier_mobile); ?></td>
                                <td><?php echo  html_escape((!empty($value->balance)?$value->balance:0)); ?></td>
                                <td>
                                  <a href="<?php echo base_url("supplier/supplier/form/$value->supplier_id") ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="pe-7s-note" aria-hidden="true"></i></a>  
                                 <a onclick="supplierdelete(<?php echo $value->supplier_id?>)" href="javascript:void(0)"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="pe-7s-trash" aria-hidden="true"></i></a>
                             </td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
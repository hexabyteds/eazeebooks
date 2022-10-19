
<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice_onloadprint.js" type="text/javascript"></script>

        <div class="row">
            <div class="col-sm-5">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div bgcolor='#e4e4e4' text='#ff6633' link='#666666' vlink='#666666' alink='#ff6633' >
                                <table border="0" width="40%">
                                    <tr>
                                        <td>

                                            <table border="0" width="100%">
                                                
                                                <tr>
                                                    <td align="center" class="posprint-head">
                                                       
                                                        <span class="posprint-com-info">
                                                           <?php echo $company_info[0]['company_name']?> 
                                                        </span><br>
                                                       <?php echo $company_info[0]['address']?>  <br>
                                                        <?php echo $company_info[0]['mobile']?><br>
                                                     
                                                        <?php echo $tax_regno;?>
                                                    </td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td align="center"><b><?php echo $customer_name;?></b><br>
                                                        <?php if ($customer_address) { ?>
                                                            <?php echo $customer_address?><br>
                                                        <?php } ?>
                                                        <?php if ($customer_mobile) { ?>
                                                            <?php echo $customer_mobile;?>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><nobr>
                                                    <date>
                                                        Date: <?php
                                                        echo date('d-M-Y');
                                                        ?> 
                                                    </date>
                                                </nobr></td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php echo display('invoice_no'); ?> : <?php echo $invoice_no;?></strong></td>
                                    </tr>
                                </table>

                                <table width="100%">
                                    <tr>
                                        <td align="center"><?php echo display('sl'); ?></th>
                                        <td align="center"><?php echo display('product'); ?></td>
                                        <td align="center" class="pprint-unit"><?php if($is_unit !=0){ echo display('unit');
                                              }?></td>
                                        <td align="center"><?php echo display('quantity'); ?></td>
                                        <td align="center"><?php if($is_discount > 0){ echo display('discount');
                                    }else{
                                            echo '';
                                        } ?></td>
                                        <td align="center"><?php echo display('rate'); ?></td>
                                        <td align="center"><?php echo display('ammount'); ?></td>
                                    </tr>
                           
                                    <?php 
                                    $sl =1;
                                    $s_total = 0;
                                    foreach($invoice_all_data as $invoice_data){?>
                                    <tr>
                                        <td align="center"><nobr><?php echo $sl;?></nobr></td>
                                    <td align="center"><nobr><?php echo html_escape($invoice_data['product_name']).'('.html_escape($invoice_data['product_model']).')';?></nobr></td>
                                    <td align="center"><nobr><?php echo html_escape($invoice_data['unit']);?></nobr></td>
                                    <td align="right"><nobr><?php echo html_escape($invoice_data['quantity']);?></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php 
                                        if(!empty($invoice_data['discount_per'])){
                                            $curicon = $currency;
                                        }else{
                                            $curicon = '';
                                        }
                                    if($position == 0){
                                       echo  $curicon.' '.html_escape($invoice_data['discount_per']);
                                    }else{
                                    echo html_escape($invoice_data['discount_per']).' '.$curicon;
                                    }
                                         ?>
                                    </nobr>
                                    </td>
                                    <td align="right">
                                    <nobr>
                                        <?php 
                                         if($position == 0){
                                       echo  $currency.' '.html_escape($invoice_data['rate']);
                                    }else{
                                    echo html_escape($invoice_data['rate']).' '.$currency;
                                    }
                                         ?>
                                    </nobr>
                                    </td>
                                    <td align="right">
                                    <nobr>
                                        <?php 
                                       if($position == 0){
                                       echo  $currency.' '.html_escape($invoice_data['total_price']);
                                    }else{
                                    echo html_escape($invoice_data['total_price']).' '.$currency;
                                    }
                                    $s_total += $invoice_data['total_price'];
                                         ?>
                                    </nobr>
                                    </td>
                                    </tr>
                                    <?php $sl++; }?>
                              
                                    <tr>
                                        <td colspan="7" class="minpos-bordertop"><nobr></nobr></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="minpos-bordertop"><nobr></nobr></td>
                                    </tr>
                                       <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('total') ?></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php if($position == 0){
                                       echo  $currency.' '.html_escape(number_format($s_total, 2, '.', ','));
                                    }else{
                                    echo html_escape(number_format($s_total, 2, '.', ',')).' '.$currency;
                                    } ?>
                                    </nobr>
                                    </td>
                                    </tr>
                                    <?php if($total_tax > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('tax') ?></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php echo html_escape((($position == 0) ? $currency.' '.$total_tax : $total_tax.' '.$currency)) ?>
                                    </nobr>
                                    </td>
                                    </tr>
                                    <?php }?>
                                     <?php if($invoice_discount > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('invoice_discount'); ?></nobr></td>
                                    <td align="right"><nobr>
                                        <?php echo html_escape((($position == 0) ? $currency.' '.$invoice_discount : $invoice_discount.' '.$currency)) ?>
                                    </nobr></td>
                                    </tr>
                                    <?php }?>
                                    <?php if($total_discount > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('total_discount') ?></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php echo html_escape((($position == 0) ? $currency.' '.$total_discount : $total_discount.' '.$currency)) ?>
                                    </nobr></td>
                                    </tr>
                                      <?php }?>
                                       <?php if($shipping_cost > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('shipping_cost') ?></nobr></td>
                                    <td align="right"><nobr>
                                        
                                            <?php echo html_escape((($position == 0) ? $currency.' '.$shipping_cost : $shipping_cost.' '. $currency)) ?>
                                        </nobr></td>
                                    </tr>
                                    <?php }?>
                                       <?php if($previous > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('previous') ?></nobr></td>
                                    <td align="right"><nobr>
                                        
                                            <?php echo html_escape((($position == 0) ? $currency.' '.$previous : $previous.' '.$currency)) ?>
                                        </nobr></td>
                                    </tr>
                                    <?php }?>
                                    <tr>
                                        <td colspan="7" class="minpos-bordertop"><nobr></nobr></td>
                                    </tr>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><strong><?php echo display('grand_total') ?></strong></nobr></td>
                                    <td align="right"><nobr>
                                        <strong>
                                            <?php echo html_escape((($position == 0) ? $currency.' '.$total_amount : $total_amount.' '.$currency))
                                             ?>
                                        </strong></nobr></td>
                                    </tr>

                                    <tr>
                                        <td colspan="7" class="minpos-bordertop"><nobr></nobr></td>
                                    </tr>
                                     <?php if($paid_amount > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr>
                                        <?php echo display('paid_ammount') ?>
                                    </nobr></td>
                                    <td align="right"><nobr>
                                        <?php echo html_escape((($position == 0) ? $currency.' '.$paid_amount : $paid_amount.' '.$currency)) ?> 
                                    </nobr></td>
                                    </tr>
                                     <?php }?>
                                    <?php if($due_amount > 0){?>
                                    <tr>
                                        <td align="left"><nobr></nobr></td>
                                    <td align="right" colspan="5"><nobr><?php echo display('due') ?></nobr></td>
                                    <td align="right"><nobr>
                                        <?php echo html_escape((($position == 0) ? $currency.' '.$due_amount : $due_amount.' '.$currency)) ?>
                                    </nobr></td>
                                    </tr>
                                <?php }?>
                                   
                                </table>
                               
                                </td>
                                </tr>
                                <tr>
                                    <td>Powered  By: <a href="javascript:void(0)"><strong><?php echo $company_info[0]['company_name']?></strong></a></td>
                                    
                                </tr>
                                </table>


                            </div>


                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="<?php echo base_url().$url; ?>"><?php echo display('cancel') ?></a>
                        <a  class="btn btn-info" href="#" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>
 <input type="hidden" name="" id="url" value="<?php echo $url;?>">
                    </div>
                </div>
            </div>
        </div>
   


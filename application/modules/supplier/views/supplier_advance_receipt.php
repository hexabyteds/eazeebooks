<div class="row">
            <div class="col-sm-4">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div bgcolor='#e4e4e4' text='#ff6633' link='#666666' vlink='#666666' alink='#ff6633'>
                                <table border="0" width="100%">
                                    <tr>
                                        <td>

                                            <table border="0" width="100%">
                                                
                                                <tr>
                                                    <td align="center">
                                                       <?php if($company_info){?>
                                                        <span>
                                                            <?php echo $company_info[0]['company_name']?>
                                                        </span><br>
                                                         <?php echo $company_info[0]['address']?><br>
                                                         <?php echo $company_info[0]['mobile']?><br>
                                                        <?php }?>
                                                        
                                                    </td>
                                                </tr>
                                                
                                                
                                                <tr>
                                                    <td align="center"><b> <?php echo $supplier_name?></b><br>
                                                        <?php if ($address) { ?>
                                                            {address}<br>
                                                        <?php } ?>
                                                        <?php if ($mobile) {
                                                        echo $mobile; ?>
                                                           
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"><nobr>
                                                    <date>
                                                        <?php echo  display('date')?>: <?php
                                                        echo date('d-M-Y');
                                                        ?> 
                                                    </date>
                                                </nobr></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong><?php echo display('receipt_no'); ?> : <?php echo $receipt_no;?></strong></td>
                                    </tr>
                                   
                                </table>

                                <table border="1" width="100%">
                                    <tr>
                                    
                                    <td align="center"><?php echo display('type'); ?></td>
                                    <td align="center"><?php echo display('amount'); ?></td>
                                    </tr>
                                              
                                    <tr>
                                        
                                        
                                    <td align="center"><nobr><?php 
                                    if($details[0]['Debit'] > 0){
                                        $status = 'Payment';
                                    }else{
                                        $status = 'Receive';
                                    }
                                    echo $status;
                                    ?></nobr></td>
                                    <td align="center"><nobr><?php echo ($status=='Payment')?html_escape($details[0]['Debit']):html_escape($details[0]['Credit']);?></nobr></td>
                                   
                                    </tr>
                                    
                                      
                                   
                                </table>
                               
                                </td>
                                </tr>
                                 <tr>
                                        <td class="text-center"> <?php echo html_escape($details[0]['Narration']);?></td>
                                    </tr>
                                <tr><?php if($company_info){?>
                                    <td>Powered  By: <a href="javascript:void(0)"><strong><?php echo $company_info[0]['company_name']?></strong></a></td>
                                    <?php }?>
                                </tr>
                                </table>


                            </div>


                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="<?php echo base_url('supplier_advance'); ?>"><?php echo display('cancel') ?></a>
                        <a  class="btn btn-info" href="#" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>

                    </div>
                </div>
            </div>
        </div>
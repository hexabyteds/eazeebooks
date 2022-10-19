
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="panel-body">
                        <div>
                           
                            <div  id="printableArea">
                                <div class="table-responsive paddin5ps">
                               <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="checkListStockList">
                                    <thead>
                                        <tr>
                                    <th class="text-center"><?php echo display('sl') ?></th>
                                    <th class="text-center"><?php echo display('product_name') ?></th>
                                    <th class="text-center"><?php echo display('product_model') ?></th>
                                    <th class="text-center"><?php echo display('sell_price') ?></th>
                                    <th class="text-center"><?php echo display('purchase_price') ?></th>
                                    <th class="text-center"><?php echo display('in_qnty') ?></th>
                                    <th class="text-center"><?php echo display('out_qnty') ?></th>
                                    <th class="text-center"><?php echo display('stock') ?></th>
                                    <th class="text-center"><?php echo display('stock_sale')?></th>
                                    <th class="text-center"><?php echo display('stock_purchase_price')?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tfoot>
                                            <tr>
                <th colspan="7" class="text-right"><?php echo display('total')?> :</th>
                <th id="stockqty"></th>
                  <th></th>  <th></th> 
            </tr>
                                            
                                        </tfoot> 
                                
                                </table>
                            </div>
                            </div>
                        </div>
                        <input type="hidden" id="currency" value="<?php echo $currency?>" name="">
                         <input type="hidden" id="total_stock" value="<?php echo $totalnumber;?>" name="">
                    </div>
                </div>
            </div>
        </div>
       

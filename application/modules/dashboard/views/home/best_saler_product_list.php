
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('all_best_sales_product') ?> </h4>
                            <p class="text-right">
                                <a  class="btn btn-warning btn-sm" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="panel-body">


                        <div id="printableArea">
                            <div class="text-center">
                                
                                <h3><?php echo $company_info[0]['company_name']?>  </h3>
                                <h4 ><?php echo $company_info[0]['address']?> </h4>
                              
                                <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th><?php echo display('sl') ?></th>
                                            <th><?php echo display('product_name') ?></th>
                                            <th><?php echo display('quantity') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($best_saler_product_list) {
                                            $sl = 0;
                                            foreach ($best_saler_product_list as $single) {
                                                $sl++;
                                                ?>
                                                <tr>
                                                    <td><?php echo $sl; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url(); ?>product_details/<?php echo $single->product_id; ?>">
                                                            <?php echo $single->product_name; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $single->quantity; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

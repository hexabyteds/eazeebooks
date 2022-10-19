  <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4> No Of <?php
                                if (empty($qr_image)) {
                                    echo display('barcode');
                                } else {
                                    echo display('qr_code');
                                }
                                ?> 
                                <span class="productbarcode-margin"></span>
                                <?php
                                if (empty($qr_image)) {
                                    echo display('barcode');
                                } else {
                                    echo display('qr_code');
                                }
                                ?> Qunatity Each Row
                            </h4>
                                
                                <div class="row">
                               <div class="col-sm-12">
                                <div class="form-group row">
                                <form>
                                    <div class="col-sm-4">
                                    <input type="number" name="qty" class="form-control" value="<?php echo (isset($_GET["qty"])?$_GET["qty"]:"1");
                                ?>">
                                </div>
                                 <div class="col-sm-4">
                                    <input type="number" name="cqty" class="form-control" value="<?php echo (isset($_GET["cqty"])?$_GET["cqty"]:"1");
                                ?>">
                                </div>
                                 <div class="col-sm-2">
                                    <input type="submit" name="submit" class="btn btn-success" value="Generate">
                                    </div>
                                </form>
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cproduct/insert_product') ?>
                    <div class="panel-body">

                       
                        <div class="table-responsive">
                            <?php
                            if (isset($product_id)) {
                                $qty = (isset($_GET["qty"])?$_GET["qty"]:"1");
                                $cqty = (isset($_GET["cqty"])?$_GET["cqty"]:"1");
                                ?>
                                <div id="printableArea">
                                    <div class="paddin5ps">
                                    <table  id="" class="table-bordered">
                                        <?php
                                        $counter = 0;
                                        for ($i = 0; $i < $qty; $i++) {
                                            ?>
                                            <?php if ($counter == $cqty) { ?>
                                                <tr> 
                                                    <?php $counter = 0; ?>
                                                <?php } ?>
                                                <td class="barcode-toptd">      

                                                    <div class="barcode-inner barcode-innerdiv">
                                                        <div class="product-name barcode-productname">
                                                            <?php echo $company_name;?>
                                                        </div>
                                                        <span class="model-name barcode-modelname"><?php echo $product_model?></span>
                                                        <img class="img-responsive center-block barcode-image" alt="" src="<?= base_url('vendor/barcode.php?size=30&text='.$product_id.'&print=true')?>" >
                                                        <div class="product-name-details barcode-productdetails"><?php echo $product_name;?></div>
                                                        <div class="price barcode-price"><?php echo (($position == 0) ? "$currency  $price" : "$price $currency") ?> <small class="barcode-vat"><?php echo display('incl_vat') ?>. 

                                                        </div>
                                                    </div>

                                                </td>
                                                <?php if ($counter == 5) { ?>
                                                </tr> 
                                                <?php $counter = 0; ?>
                                            <?php } ?>
                                            <?php $counter++; ?>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                                </div>
                                <?php
                            } else {
                                ?>
                                <div id="printableArea">
                                    <div class="paddin5ps">
                                    <table class="table-bordered barcode-collaps">
                                        <?php
                                        $qty = (isset($_GET["qty"])?$_GET["qty"]:"1");
                                        $cqty = (isset($_GET["cqty"])?$_GET["cqty"]:"1");

                                        $counter = 0;
                                        for ($i = 0; $i < $qty; $i++) {
                                            ?>
                                            <?php if ($counter == $cqty) { ?>
                                                <tr> 
                                                    <?php $counter = 0; ?>
                                                <?php } ?>
                                                <td class="barcode-toptd">  
                                                    <div class="barcode-inner barcode-innerdiv">
                                                        <div class="product-name barcode-productname">
                                                            <?php echo $company_name;?>
                                                        </div>
                                                        <span class="model-name barcode-modelname"><?php echo $product_model;?></span>
                                                        <img src="<?php echo base_url('my-assets/image/qr/'.$qr_image) ?>" class="img-responsive center-block qrcode-image" alt="">
                                                        <div class="product-name-details qrcode-productdetails"><?php echo $product_name?></div>
                                                        <div class="price barcode-price"><?php echo (($position == 0) ? "$currency $price" : "$price $currency") ?> <small class="barcode-vat"><?php echo display('incl_vat') ?></small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <?php if ($counter == 5) { ?>
                                                </tr> 
                                                <?php $counter = 0; ?>
                                            <?php } ?>
                                            <?php $counter++; ?>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                       <?php
                        if (!empty($product_id) || !empty($qr_image)) {
                            ?>
                            <div class="text-center">
                                <a  class="btn btn-info" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
                                <a  class="btn btn-danger" href="<?php echo base_url('product_list'); ?>"><?php echo display('cancel') ?></a>
                            </div>
                            <?php
                        }
                        ?>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
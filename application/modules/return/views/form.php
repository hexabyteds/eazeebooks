
 <div class="row">
            <div class="col-sm-12">
              
                
                 <?php if($this->permission1->method('return_list','read')->access()){ ?>
                  <a href="<?php echo base_url('invoice_return_list')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('customer_return_list')?> </a>
              <?php }?>
               <?php if($this->permission1->method('supplier_return_list','read')->access()){ ?>
                    <a href="<?php echo base_url('supplier_return_list')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('supplier_return')?> </a>
                      <?php }?>
                      <?php if($this->permission1->method('wastage_return_list','read')->access()){ ?>
                      <a href="<?php echo base_url('wastage_return_list')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('wastage_list')?> </a>
                      <?php }?>

                
            </div>
        </div>
         <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('return_from_customer')?></h4>
                        </div>
                    </div>
                    <div class="panel-body"> 
                        <?php echo form_open('invoice_return',array('class' => 'form-inline'))?>

                            <div class="form-group">
                                <label for="to_date"> <?php echo  display('invoice_no') ?>:</label>
                                <input type="text" name="invoice_id" class="form-control" id="to_date" placeholder="<?php echo display('invoice_no')?>" required="required">
                            </div>  

                            <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                       <?php echo form_close()?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('return_to_supplier')?></h4>
                        </div>
                    </div>
                      <div class="panel-body"> 
                        <?php echo form_open('supplier_return',array('class' => 'form-inline'))?>

                            <div class="form-group">
                                <label for="to_date"><?php echo  display('purchase_id') ?>:</label>
                                <input type="text" name="purchase_id" class="form-control" id="to_date" placeholder="Return Purchase Id" required="required">
                            </div>  

                            <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                       <?php echo form_close()?>
                    </div>
                </div>
            </div>
        </div>

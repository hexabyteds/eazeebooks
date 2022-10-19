 <!-- date between search -->
        <div class="row">
             <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <div class="col-sm-10">
                        <?php echo form_open('', array('class' => 'form-inline', 'method' => 'get')) ?>
                        <?php
                      
                        $today = date('Y-m-d');
                        ?>
                        <div class="form-group">
                            <label class="" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="" placeholder="<?php echo display('start_date') ?>" >
                        </div> 

                        <div class="form-group">
                            <label class="" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="">
                        </div>  

                        <button type="button" id="btn-filter" class="btn btn-success"><?php echo display('find') ?></button>

                        <?php echo form_close() ?>
                    </div>
                  
          
                </div>
            </div>
            </div>
        </div>
        <div class="row"> 
        </div>
        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span>Manage Invoice</span>
                            <span class="padding-lefttitle"> 
                <?php if($this->permission1->method('new_invoice','create')->access()){ ?>
                    <a href="<?php echo base_url('add_invoice') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> New Invoice </a>
                <?php }?>
            
                
               <?php if($this->permission1->method('gui_pos','create')->access()){ ?>
                    <a href="<?php echo base_url('gui_pos') ?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-plus"> </i> POS Invoice</a>
                <?php }?>
                          </span>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" >
                            <table class="table table-hover table-bordered" cellspacing="0" width="100%" id="InvList"> 
                                <thead>
                                    <tr>
                                    <th><?php echo display('sl') ?></th>
                                    <th><?php echo display('invoice_no') ?></th>
                                    <th><?php echo display('sale_by') ?></th>
                                    <th><?php echo display('customer_name') ?></th>
                                    <th><?php echo display('date') ?></th>
                                    <th><?php echo display('total_amount') ?></th>
                                    
                                   <!-- <th>Area</th>
                                    <th>Amount with Vat</th>
                                    <th>Amount without Vat</th>
                                    <th>Customer credit limit</th>
                                    <th>customer vat number</th>-->
                                    <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
             
                                </tbody>
                                <tfoot>
                    <th colspan="5" class="text-right"><?php echo display('total') ?>:</th>
                
                  <th></th>  
                  <th></th> 
                                </tfoot>
                            </table>
                            
                        </div>
                       

                    </div>
                </div>
                <input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">
                
            </div>
        </div>
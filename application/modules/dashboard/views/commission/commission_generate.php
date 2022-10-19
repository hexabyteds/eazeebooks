
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('commission') ?> </h4>
		                </div>
		            </div>
		            <?php echo form_open('commission_generate', array('class' => 'form-vertical','id' => 'commission_generate' ))?>
                    <div class="panel-body">

                    	<div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="customer_name" id="customer_nameCommission" tabindex="1" required="">
                                <option value=""><?php echo display('select_one')?></option>
                   <?php foreach($customer_info as $customers){?>
                                	<option value="<?php echo $customers['customer_id']?>"><?php echo $customers['customer_name']?></option>
                               <?php }?>
                                </select>
                            </div>
                        </div>
   
                       	<div class="form-group row">
                            <label for="product_model" class="col-sm-3 col-form-label"><?php echo display('product_model') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="product_model" name="product_model" tabindex="2" required="">
                                	<option value=""><?php echo display('select_one')?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="from" class="col-sm-3 col-form-label"><?php echo display('from') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control datepicker" name ="from" id="from" type="text" placeholder="<?php echo display('from') ?>"  required="" tabindex="3">
                            </div>
                        </div>
   
                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label"><?php echo display('to') ?><i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control datepicker" name ="to" id="to" type="to" placeholder="<?php echo display('to') ?>"  required="" min="0" tabindex="4">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="commission_rate " class="col-sm-3 col-form-label"><?php echo display('commission_rate') ?><i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="commission_rate" id="commission_rate" type="text" placeholder="<?php echo display('commission_rate') ?>"  required tabindex="5">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="<?php echo display('enter') ?>" tabindex="6"/>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
		        </div>
		    </div>
		</div>

		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('commission') ?> </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
		                        <thead>
		                            <tr>
		                                <th><?php echo display('date') ?></th>
										<th><?php echo display('product_model') ?></th>
										<th><?php echo display('quantity') ?></th>
										<th><?php echo display('per_pcs_commission') ?></th>
										<th><?php echo display('total_commission') ?></th>
		                            </tr>
		                        </thead>
		                        <tbody>
		                        <?php
		                       	if ($product_info) {

		                       		foreach($product_info as $info){
		                        ?>
		                     
									<tr>
										<td><?php echo $info['date']?></td>
										<td><?php echo $info['product_model']?></td>
										<td><?php echo $info['quantity']?></td>
										<td class="text-right"><?php echo (($position==0)?$currency.' '.$info['commission']:$info['commission'].' '.$currency) ?></td>
										<td class="text-right"><?php echo (($position==0)?$currency.' '.$info['total_commission_rate']:$info['total_commission_rate'].' '.$currency) ?></td>
									</tr>
								
								<?php
								}}
								?>
		                        </tbody>
		                        <?php
		                       	if ($product_info) {
		                        ?>
		                        <tfoot>
									<tr>
										<td colspan="2"><b><?php echo display('grand_total') ?></b></td>
										<td><b><?php echo $subTotalQnty;?></b></td>
										<td><b></b></td>
										<td class="text-right"><b><?php echo (($position==0)?$currency.' '.$subTotalComs:$subTotalComs.' '.$currency) ?></b></td>
									</tr>
								</tfoot>
								<?php
								}
								?>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	
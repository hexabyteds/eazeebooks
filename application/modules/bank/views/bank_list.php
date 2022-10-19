
	    <div class="row">
            <div class="col-sm-12">
               
                <?php if($this->permission1->method('add_bank','create')->access()){ ?>
                  <a href="<?php echo base_url('bank_form')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('add_new_bank')?> </a>
                  <?php }?>
       <?php if($this->permission1->method('bank_transaction','create')->access()){ ?>
                  <a href="<?php echo base_url('bank_transaction')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('bank_transaction')?> </a>
                   <?php }?>
                    <?php if($this->permission1->method('bank_ledger','read')->access()){ ?>
                  <a href="<?php echo base_url('bank_ledger')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('bank_ledger')?> </a>
                   <?php }?>

              
            </div>
        </div>

		<!-- Bank List -->
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('bank_list') ?> </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
			           			<thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th><?php echo display('bank_name') ?></th>
										<th><?php echo display('ac_name') ?></th>
										<th><?php echo display('ac_no') ?></th>
										<th><?php echo display('branch') ?></th>
										<th><?php echo display('balance') ?></th>
										<th><?php echo display('signature_pic') ?></th>
										<th><?php echo display('action') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($bank_lists) {
								?>
							    <?php foreach($bank_lists as $banks){?>
									<tr>
										<td><?php echo $banks['sl']?></td>
										<td><?php echo $banks['bank_name']?></td>
										<td><?php echo $banks['ac_name']?></td>
										<td><?php echo $banks['ac_number']?></td>
										<td><?php echo $banks['branch']?></td>
										<td><?php echo (($position==0)?$currency.' '.$banks['balance']:$banks['balance'].' '.$currency) ?></td>
										<td>
										<img src="<?php echo base_url().$banks['signature_pic']?>" class="img img-responsive center-block" height="40" width="50"></td>
										<td>
									
										 <?php if($this->permission1->method('bank_list','update')->access()){ ?>
											<a href="<?php echo base_url().'bank_form/'.$banks['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
										<?php }?>
										 <?php if($this->permission1->method('bank_list','delete')->access()){ ?>
											<a href="<?php echo base_url().'bank/bank/bank_delete/'.$banks['id']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" onclick="return confirm('Are You Sure ?')" data-placement="left" title="" data-original-title="<?php echo display('delete') ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
										<?php }?>
										
										</td>
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
	
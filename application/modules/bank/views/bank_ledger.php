
		<div class="row">
            <div class="col-sm-12">

                	 <?php if($this->permission1->method('add_bank','create')->access()){ ?>
                	<a href="<?php echo base_url('bank_form')?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('add_new_bank')?> </a>
                 <?php }?>
              <?php if($this->permission1->method('bank_transaction','create')->access()){ ?>
                  	<a href="<?php echo base_url('bank_transaction')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('bank_transaction')?> </a>
                   <?php }?>
                <?php if($this->permission1->method('bank_list','read')->access()){ ?>   
                  	<a href="<?php echo base_url('bank_list')?>" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('manage_bank')?> </a>
                  	<?php }?>

               
            </div>
        </div>

       <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-body"> 
                        <?php echo form_open('bank_ledger', array('class' => 'form-inline', 'method' => 'post')) ?>
                        
                            <div class="col-sm-3">
                           
                            <label class="col-sm-4" for="bank"><?php echo display('bank') ?></label>
                            <div class="col-sm-8">
                            <select name="bank_id" class="form-control">
                        	<option value="">Select Bank</option>
                        	<?php foreach($bank_list as $banks){?>
                        	<option value="<?php echo $banks['bank_id']?>" <?php if($banks['bank_id'] == $bank_id){echo 'selected';}?>><?php echo $banks['bank_name']?></option>
                        <?php }?>
                        </select>
                       </div>
                            </div>
                            <div class="col-sm-7">
                               <div class="col-sm-6"> 
                            <label class="col-sm-4" for="from_date"><?php echo display('from') ?></label>
                            <div class="col-sm-8">
                           <input type="text" name="from_date"  value="<?php echo $from?>" class="datepicker form-control"/>
                       
                             </div>
                         </div>
                        <div class="col-sm-6">
                            <label class="col-sm-4" for="to_date"><?php echo display('to') ?></label>
                            <div class="col-sm-8">
                            <input type="text" name="to_date" class="datepicker form-control" value="<?php echo $to?>"/>
                        </div>  
                        </div>
                            </div>
                            <div class="col-sm-2">
                                  <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>
                            </div>
                      
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

       

		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('bank_ledger') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		            
			            <div class="text-right">
			            	
			            </div>
		            	
						<div id="printableArea">
							<table class="print-table" width="100%">
                                                
                                                <tr>
                                                    <td align="left" class="print-table-tr">
                                                        <img src="<?php echo base_url().$setting->logo;?>" alt="logo">
                                                    </td>
                                                    <td align="center" class="print-cominfo">
                                                        <span class="company-txt">
                                                            <?php echo $company_info[0]['company_name'];?>
                                                           
                                                        </span><br>
                                                        <?php echo $company_info[0]['address'];?>
                                                        <br>
                                                        <?php echo $company_info[0]['email'];?>
                                                        <br>
                                                         <?php echo $company_info[0]['mobile'];?>
                                                        
                                                    </td>
                                                   
                                                     <td align="right" class="print-table-tr">
                                                        <date>
                                                        <?php echo display('date')?>: <?php
                                                        echo date('d-M-Y');
                                                        ?> 
                                                    </date>
                                                    </td>
                                                </tr>            
                                   
                                </table>
				

			                <div class="table-responsive">
			                    <table id="" class="table table-bordered table-striped table-hover">
			                        <thead>
										<tr>
											<th class="text-center"><?php echo display('date') ?></th>
											<th class="text-center"><?php echo display('bank_name') ?></th>
											<th class="text-center"><?php echo display('description') ?></th>
											<th class="text-center"><?php echo display('withdraw_deposite_id') ?></th>
											<th class="text-center"><?php echo display('debit_plus') ?></th>
											<th class="text-center"><?php echo display('credit_minus') ?></th>
											<th class="text-center"><?php echo display('balance') ?></th>
										</tr>
									</thead>
									<tbody>
									<?php
										if ($ledger) {
									?>
								<?php foreach($ledger as $leddata){?>
							<tr>
								<td><?php echo $leddata['VDate']?></td>
								<td><?php echo $leddata['HeadName']?></td>
								<td><?php echo $leddata['Narration']?></td>
								<td align="center"><?php echo $leddata['VNo']?></td>
								<td align="right"><?php echo (($position==0)?$currency.' '.$leddata['debit']:$leddata['debit'].' '.$currency) ?></td>
								<td align="right"><?php echo (($position==0)?$currency.' '.$leddata['credit']:$leddata['credit'].' '.$currency) ?></td>

								<td align="right"><?php echo (($position==0)?$currency.' '.$leddata['balance']:$leddata['balance'].' '.$currency) ?></td>
							</tr>
								<?php } ?>
									<?php
										}
									?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4" align="right"><b><?php echo display('grand_total')?>:</b></td>

											<td align="right"><b><?php echo (($position==0)?$currency.' '.$total_debit:$total_debit.' '.$currency) ?></b></td>

											<td align="right"><b><?php echo (($position==0)?$currency.' '.$total_credit:$total_credit.' '.$currency) ?></b></td>

											<td align="right"><b><?php echo (($position==0)?$currency.' '.$balance:$balance.' '.$currency) ?></b></td>
											
										</tr>
									</tfoot>
			                    </table>
			                </div>
			            </div>
		                <div class="text-center">
		                	
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

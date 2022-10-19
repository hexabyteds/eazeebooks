<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('manage_company') ?> </h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="dataTableExample" class="table table-bordered table-striped table-hover">
				           		<thead>
									<tr>
										<th><?php echo display('sl') ?></th>
										<th class="text-center"><?php echo display('name') ?></th>
										<th class="text-center"><?php echo display('address') ?></th>
										<th class="text-center"><?php echo display('mobile') ?></th>
										<th class="text-center"><?php echo display('website') ?></th>
										
										<th class="text-center">Building No</th>
										<th class="text-center">Street Name</th>
										<th class="text-center">District</th>
										<th class="text-center">City</th>
										<th class="text-center">Country</th>
										<th class="text-center">Postal Code</th>
										<th class="text-center">Additional No</th>
										<th class="text-center">Vat Number</th>
										<th class="text-center">Other Buyer No</th>
										<th><?php echo display('action') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($companys) {
										$sl = 1;
										foreach ($companys as $company) {
										
								?>
								
									<tr>
										<td><?php echo $sl;?></td>
										<td><?php echo $company->company_name?></td>
										<td><?php echo $company->address?></td>
										<td><?php echo $company->mobile?></td>
										<td><?php echo $company->website?></td>
										
										<td><?php echo $company->building_no?></td>
										<td><?php echo $company->street_name?></td>
										<td><?php echo $company->district?></td>
										<td><?php echo $company->city?></td>
										<td><?php echo $company->country?></td><td><?php echo $company->postal_code?></td>
										<td><?php echo $company->additional_no?></td>
										<td><?php echo $company->vat_no?></td>
										<td><?php echo $company->other_buyer_no?></td>
										<td>
											<center>
											<?php echo form_open() ?>
											<?php if($this->permission1->method('manage_company','update')->access()){?>
												<a href="<?php echo base_url().'edit_company/'.$company->company_id; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
											<?php }?>
											<?php echo form_close()?>
											</center>
										</td>
									</tr>
								
								<?php
								$sl++;
							}}
								?>
								</tbody>
		                    </table>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
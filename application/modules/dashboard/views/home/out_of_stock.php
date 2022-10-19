
		<div class="row">
		    <div class="col-sm-12">
		        <div class="panel panel-bd lobidrag">
		            <div class="panel-heading">
		                <div class="panel-title">
		                    <h4><?php echo display('out_of_stock') ?></h4>
		                </div>
		            </div>
		            <div class="panel-body">
		                <div class="table-responsive">
		                    <table id="" class="table table-bordered table-striped table-hover">
		                        <thead>
									<tr>
										<th class="text-center"><?php echo display('sl') ?></th>
										<th class="text-center"><?php echo display('product_name') ?></th>
										<th class="text-center"><?php echo display('product_model') ?></th>
										<th class="text-center"><?php echo display('unit') ?></th>
										<th class="text-center"><?php echo display('stock') ?></th>
									</tr>
								</thead>
								<tbody>
								<?php
									if ($out_of_stock) {
								?>
								<?php $sl=1;?>
								<?php foreach ($out_of_stock as $out_of_stock) {
										
								 ?>
									<tr>
										<td><?php echo $sl;?></td>
										<td class="text-center">
											<a href="<?php echo base_url().'product_details/'.$out_of_stock['product_id']; ?>">
											<?php echo $out_of_stock['product_name'];?>
											</a>	
										</td>
										<td class="text-center"><?php echo $out_of_stock['product_model'];?></td>
										<td class="text-center"><?php echo $out_of_stock['unit'];?></td>
										<td class="text-center"><span class="label label-danger"> <?php 
											$stock=$out_of_stock['stock'];
 echo number_format($stock, 2, '.', ','); 

											?></span></td>
									</tr>
									<?php 	$sl++;
							 ?>
								<?php 
							} ?>
								<?php
									} 
								?>
								</tbody>
		                    </table>
		                </div>
			            
		                <div class="text-center">
		                	 <?php if (isset($link)) { echo $link ;} ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

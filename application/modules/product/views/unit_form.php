 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">
                                <?php echo form_open('unit_form/'.$unit->unit_id,'class="" id="unit_form"')?>
                                
                                <input type="hidden" name="unit_id" id="unit_id" value="<?php echo $unit->unit_id?>">
                                <div class="form-group row">
                                    <label for="unit_name" class="col-sm-2 text-right col-form-label"><?php echo display('unit_name')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        
                                    <input type="text" name="unit_name" class="form-control" id="unit_name" placeholder="<?php echo display('unit_name')?>" value="<?php echo $unit->unit_name?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="parent_status" class="col-sm-2 text-right col-form-label">Parent Status<i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        
                            <select name="parent_status" id="parent_status" class="form-control" required>
                            
                            <option value="0" <?php if($unit->parent_status == 0){echo 'selected';}?>>Root</option>
                            
                             <option value="1" <?php if($unit->parent_status == 1){echo 'selected';}?>>Child</option>      
                              </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 text-right col-form-label"><?php echo display('status')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                            <select name="status" id="status" class="form-control" required>

                            <option value="1" <?php if($unit->status == 1){echo 'selected';}?>><?php echo display('active')?></option>
                             <option value="0" <?php if($unit->status == 0){echo 'selected';}?>><?php echo display('inactive')?></option>      
                              </select>
                                    </div>
                                </div>

                         <div class="form-group row">
                                   
                                     <div class="col-sm-6 text-right">
                                        
                                           
                                            <button type="submit" class="btn btn-success ">
                                                <?php echo (empty($unit->unit_id)?display('save'):display('update')) ?></button>
                                                <?php if(empty($unit->unit_id)){?>
                                                <button type="submit" class="btn btn-success" name="add-another"><?php echo display('save_and_add_another') ?></button>
                                                <?php }?>
                                        
                                    </div>
                                </div>
                               

                                <?php echo form_close();?>
                            </div>
    
                        </div>
                    </div>
                </div>
               

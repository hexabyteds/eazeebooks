 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">
                                <?php echo form_open('category_form/'.$category->category_id,'class="" id="category_form"')?>
                                
                                <input type="hidden" name="category_id" id="category_id" value="<?php echo $category->category_id?>">
                                <div class="form-group row">
                                    <label for="category_name" class="col-sm-2 text-right col-form-label"><?php echo display('category_name')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        
                                           
                                            <input type="text" name="category_name" class="form-control" id="category_name" placeholder="<?php echo display('category_name')?>" value="<?php echo $category->category_name?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 text-right col-form-label"><?php echo display('status')?> <i class="text-danger"> * </i>:</label>
                                    <div class="col-sm-4">
                                        
                            <select name="status" id="status" class="form-control" required>

                            <option value="1" <?php if($category->status == 1){echo 'selected';}?>><?php echo display('active')?></option>
                             <option value="0" <?php if($category->status == 0){echo 'selected';}?>><?php echo display('inactive')?></option>      
                              </select>
                                    </div>
                                </div>

                         <div class="form-group row">
                                   
                                     <div class="col-sm-6 text-right">
                                        
                                           
                                            <button type="submit" class="btn btn-success ">
                                                <?php echo (empty($category->category_id)?display('save'):display('update')) ?></button>
    
                                        <?php if(empty($category->category_id)){?>
                                                <button type="submit" class="btn btn-success" name="add-another"><?php echo display('save_and_add_another') ?></button>
                                                <?php }?>
                                       
                                    </div>
                                </div>
                               

                                <?php echo form_close();?>
                            </div>
    
                        </div>
                    </div>
                </div>
               

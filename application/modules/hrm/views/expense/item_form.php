 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">
                    <?php echo form_open('add_expense_item/'.$items->id,'class="" id="item_form"')?>
                            	
            	
                <div class="form-group row">
                    <label for="item" class="col-sm-4 text-right col-form-label"><?php echo display('expense_item_name')?> <i class="text-danger"> * </i>:</label>
                    <div class="col-sm-6">
                        
                           
            <input type="text" name="expense_item_name" class="form-control" id="expense_item_name" placeholder="<?php echo display('expense_item_name')?>" value="<?php echo $items->expense_item_name?>" required>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn-success ">
                            <?php echo (empty($items->id)?display('save'):display('update')) ?></button>
                                    </div>
                                </div>

                                <?php echo form_close();?>
                            </div>
    
                        </div>
                    </div>
                </div>
               

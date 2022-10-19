 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open("dashboard/permission/create/") ?>
                    <div class="panel-body">
                         <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label"><?php echo display('role_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" tabindex="2" class="form-control" name="role_id" id="type" placeholder="<?php echo display('role_name') ?>" required />
                            </div>
                        </div>
             <?php
            $m=0;
            foreach($accounts as $key=>$value) {
                $account_sub = $this->db->select('*')->from('sub_module')->where('mid',$value['id'])->get()->result();
                ?>
                <table class="table table-bordered">
                    <h2 class=""><?php echo display($value['name']);?></h2>
                    <thead>
                    <tr>
                        <th><?php echo display('sl_no');?></th>
                        <th><?php echo display('menu_name');?></th>
                        <th><?php echo display('create');?> (<label for="checkAllcreate<?php echo $m?>"><input type="checkbox" onclick="checkallcreate(<?php echo $m?>)" id="checkAllcreate<?php echo $m?>"  name="" > All)</label></th>
                        <th><?php echo display('read');?> (<input type="checkbox" onclick="checkallread(<?php echo $m?>)" id="checkAllread<?php echo $m?>"  name="" > all)</th>
                        <th><?php echo display('update');?> (<input type="checkbox" onclick="checkalledit(<?php echo $m?>)" id="checkAlledit<?php echo $m?>"  name="" > all)</th>
                        <th><?php echo display('delete');?> (<input type="checkbox" onclick="checkalldelete(<?php echo $m?>)" id="checkAlldelete<?php echo $m?>"  name="" > all)</th>
                    </tr>
                    </thead>
                    <?php $sl = 0 ?>
                    <?php if (!empty($account_sub)) { ?>
                        <?php foreach ($account_sub as $key1 => $module_name) { ?>

                            <?php
                            $createID = 'id="create'.$m.''.$sl.'" class="create'.$m.'"';
                            $readID   = 'id="read'.$m.''.$sl.'" class="read'.$m.'"';
                            $updateID = 'id="update'.$m.''.$sl.'" class="edit'.$m.'"';
                            $deleteID = 'id="delete'.$m.''.$sl.'" class="delete'.$m.'"';
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo ($sl+1) ?></td>
                                <td>
                                    <?php echo display($module_name->name)?>
                                    <input type="hidden" name="fk_module_id[<?php echo $m?>][<?php echo $sl?>][]"  value="<?php echo $module_name->id ?>" id="id_<?php echo $module_name->id ?>">
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('create['.$m.']['.$sl.'][]', '1', null, $createID); ?>
                                        <label for="create<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('read['.$m.']['.$sl.'][]', '1', null, $readID); ?>
                                        <label for="read<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('update['.$m.']['.$sl.'][]', '1', null, $updateID); ?>
                                        <label for="update<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="checkbox checkbox-success text-center">
                                        <?php echo form_checkbox('delete['.$m.']['.$sl.'][]', '1', null, $deleteID); ?>
                                        <label for="delete<?php echo $m ?><?php echo $sl ?>"></label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            <?php $sl++ ?>
                        <?php } ?>
                    <?php } //endif ?>
                </table>
                <?php $m++; } ?>
                <div class="form-group text-right">
                <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
            </div>
            <?php echo form_close() ?>
                    </div>
                   
                </div>
            </div>
        </div>
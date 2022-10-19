 <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>
                   
                    <div class="panel-body">

                     <?php echo form_open("dashboard/permission/usercreate") ?>
                    <div class="form-group row">
                        <label for="blood" class="col-sm-3 col-form-label">
                            <?php echo display('user') ?> <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control placeholder-single" name="user_id" id="user_type" onchange="userRole(this.value)" data-placeholder="<?php echo display('select_one') ?>">
                                <option value=""></option>
                                <?php
                                foreach($user as $udata){
                                    ?>
                                    <option value="<?php echo $udata['user_id'] ?>"><?php echo $udata['first_name'].' '.$udata['last_name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                     </div>

                    <div class="form-group row">
                        <label for="blood" class="col-sm-3 col-form-label">
                            <?php echo display('role_name') ?> <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control" name="user_type" id="user_type">
                                <option value=""><?php echo display('select_one') ?></option>
                                <?php
                                foreach($user_list as $data){
                                    ?>
                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['type'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3><?php echo display('exsisting_role') ?></h3>
                        <div id="existrole">

                        </div>
                        
                    </div>
               
                        <div class="form-group row text-right">
                              <div class="col-md-12">
                            <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('save') ?></button>
                            </div>
                        </div>
                    <?php echo form_close() ?>
                    </div>
                   
                </div>
            </div>
        </div>



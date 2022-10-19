
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jstree/themes/default/style.min.css" />

         <a href="<?php echo base_url('create_account') ?>"  class="btn btn-info" style="float: right; margin: 0 0 10px 1px;">+New Account</a>
             <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    

                    <div class="panel-body">
                        <div class="row">
                <div class="col-md-11">
                     <div id="jstree1">
                        <ul>
                         <?php

                    $visit=array();
                    for ($i = 0; $i < count($userList); $i++)
                    {
                        $visit[$i] = false;
                    }

                   $this->account_model->dfs("COA","0",$userList,$visit,0);
                    
                    ?>
                        </ul>
                    </div>
                </div> 

               
                
            </div>
 </div> 
</div>
 </div> 

 <div class="modal fade" id="treeviewmodal" role="dialog">

<div class="modal-dialog">

<div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
       <div id="newform">
                        
       </div>
      </div>
     
    </div>
        
        </div>
        </div>

  
  
</div>


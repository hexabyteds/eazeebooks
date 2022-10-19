
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jstree/themes/default/style.min.css" />

<a href="#" data-toggle="modal" data-target="#update_modal" class="btn btn-info" style="float: right; margin: 0 0 10px 1px;">+New Account</a>
    <div class="row">
   <div class="col-sm-11">
       <div class="panel panel-bd lobidrag">
           

           <div class="panel-body">
               <div class="row">
      
      

<div class="table-responsive overflow-initial customviews-table scrollable-table">
<table id="ember631" class="table zi-table table-hover ember-view shift-table-left w-100">
    <thead>
       <tr>
           <th class="bulk-selection-cell customize-cell-width">
               <span class="dropdown ">
                   <span class="dropdown-toggle no-caret text-open" data-ember-action="" data-ember-action-1091="1091">
                      <i id="ember1092" class="tooltip-container ember-view"> 
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm create-view align-text-bottom" date-test-action="customize-column-menu"><path class="st0" d="M103.9 85.8h32V133h-32zM103.9 163h32v216.2h-32z"></path>
                      <path d="M511 378.2h-47.1v-47.1h-32v47.1h-47.1v32h47.1v47.1h32v-47.1H511zM103.9 378.2H33.2V164h398.7v119.5h32V54.8H1.2v355.4h335.6v-32H103.9zm0-291.4h328V132H33.2V86.8h70.7z"></path>
                      </svg> </i></span> 
                      <!----> </span> <!----> </th>
                       <th class=" text-left desc sortable " style=""><div class="position-relative mr-4">
                       <div class="float-left over-flow" title="Account Name">Account Name<!---->
                       </div><span class="sort d-print-none "></span></div></th>
                       <th class=" text-left  sortable " style="">
                         <div class="position-relative ">
                         <div class="float-left over-flow" title="Account Code">Account Code<!----></div>
                         <!----></div>
                        </th>
                         <th class=" text-left  sortable " style="">
                         <div class="position-relative ">
                         <div class="float-left over-flow" title="Account Type">Account Type<!----></div>
                         <!----></div></th><th class=" text-left   " style=""><div class="position-relative ">
                         <div class="float-left over-flow" title="Documents">Documents<!----></div><!----></div>
                         </th>
                         <th class=" text-left   " style="">
                         <div class="position-relative ">
                         <div class="float-left over-flow" title="Parent Account Name">Parent Account Name<!----></div>
                         <!----></div>
              </th>
                         <!-- <th class="text-center" width="4%" style="max-width:50px;">-->
        </tr>
      </thread>

      <tbody>

</tbody>
</table>

 


<div class="col-md-4">
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
<!--  MODEL COA START -->
<div class="modal fade" id="passwordrecoverymodal" tabindex="-1" role="dialog" aria-labelledby="recoverylabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="recoverylabel"><?php echo display('password_recovery')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div id="outputPreview" class="alert hide modal-title" role="alert" >
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
      </div>
      <div class="modal-body">
           <?php echo form_open('dashboard/recoverydata/password_recovery', array('id' => 'passrecoveryform',)) ?>
                      <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label"><?php echo display('email')?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="rec_email" id="rec_email" type="text" placeholder="<?php echo display('email') ?>"  required="">
                            </div>
                            <input type ="hidden" name="csrf_test_name" id="CSRF_TOKEN" value="<?php echo $this->security->get_csrf_hash();?>">
                        </div>
                        
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" id="submit_recovery" class="btn btn-success" value="Send">
      </div>
       <?php echo form_close() ?>
    </div>
  </div>
</div>


<!--  MODEL COA END -->


<div class="modal fade" id="update_modal<?php echo $fetch['user_id']?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" action="update_query.php">
        <div class="modal-header">
          <h3 class="modal-title" style= "text-align :left">Create Account</h3>
        </div>
        <div class="modal-body">
          <!-- <div class="col-md-2"></div> -->
          <div class="col-md-10">
            <div class="form-group row">
              <label class= "col-form-label required col-lg-4">Account Category</label>
             <div class="col-lg-8">
                <select  id="category" name="category" class="form-control" >
          
                         <option>No Selected</option>
                         
                </select>
                </br>
         </div>
        </div>
        <div class="form-group row">
              <label class= "col-form-label required col-lg-4">Account Sub Category</label>
              <div class="col-lg-8">
                <select  id="sub_category" name="sub_category" class="form-control" >
                         <option>No Selected</option>
                 
                </select>
          </div>



            <div class="form-group row" style = "margin-top: 50px">
              <label class= "col-form-label required col-lg-4">Account Name</label>
              <div class="col-lg-8">
              <input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" required="required" />
            </div>
            </div>
            
            <div class="form-group row" style = "margin-top: 50px">
              <label class= "col-form-label required col-lg-4">Account Code</label>
              <div class="col-lg-6">
              <input type="text" name="address" value="<?php echo $fetch['address']?>" class="form-control" required="required"/>
              </div>
            </div>


            <div class="form-group row">
              <label class= "col-form-label required col-lg-4">Description</label>
              <div class="col-lg-6">
           
        <textarea id="w3review" name="w3review" rows="4" cols="50">
        At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
        </textarea>
              </div>
            </div>


          </div>
        </div>
        <div style="clear:both;"></div>
        <div class="modal-footer">
          <button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
          <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
        </div>
        </div>
      </form>
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

 
    <script type="text/javascript">
    // var jsonData = { name:"John", age: 31, city:"New York" };
    // var myJSON = JSON.stringify(jsonData);
    //  debugger;
    //   var base_url = $("#base_url").val();
  
      $(document).ready(function(){


        $.ajax({
          url : "account/account/account_data_tree",
          type: "GET",
          dataType: "json",
            contentType:"application/json; charset=utf-8",
            success: function(result){
              debugger;
              // foreach(result as k => v){
              //     tmp_data[v['HeadCode']] = &$v;
              // }

              // foreach($tree_data as k => &v){
              //     if(v['PHeadName'] && isset(tmp_data[$v['PHeadName']])){
              //         tmp_data[v['PHeadName']]['nodes'][] = &$v;
              //     }
              // }

              // foreach($tree_data as k => &v){
              //     if(v['PHeadName'] && isset(tmp_data[v['PHeadName']])){
              //         unset(tree_data[k]);
              //     }
              // }

             $('#myTree').treeview({data: result});
            },
            error: function(result)
            {
              debugger;
              alert(result);
            }
        
         
            // debugger;
        });

      var obj;
      $('#update_modal').on('click', function() 
        {
        $.ajax({
          url : "account/account/account_data",
          type: "GET",
          dataType: "json",
            contentType:"application/json; charset=utf-8",
            success: function(result){
              debugger;
              
              var html = '';
                        var i;

                        for(i=0; i<result.length; i++){
                          if(result[i].HeadLevel == '0')
                          {
                            // console.log(result[i].HeadName)
                              html +=  '<option value='+result[i].HeadName+'>'+result[i].HeadName+'</option>';
                          }
                        }
                        $('#category').html(html);
                // $('.myTree').treeview({data: result});
            },
            error: function(result)
            {
              debugger;
              alert(result);
            }
        
         
            // debugger;
        });
      });
        $('#category').on('change', function() 
        {
        // var category_id=$(this).val();
        var category_id = document.getElementById('category').value;
        debugger;
			  $.ajax({
				url: "account/account/account_data_child/" + category_id,
				type: "POST",
        dataType: "json",
        contentType:"application/json; charset=utf-8",
				cache: false,
				success: function(dataResult){
          debugger;
          var html = '';
                        var i;

                        for(i=0; i<dataResult.length; i++){
                           
                          debugger;
                            console.log(dataResult[i].HeadName)
                              html +=  '<option value='+dataResult[i].PHeadName+'>'+dataResult[i].HeadName+'</option>';
                          
                        }

                        // $('#category').html(html);
					$("#sub_category").html(html);
				},
        error: function(result)
            {
              debugger;
              alert(result);
            }
			});
		
		
	      });
    });
  

  


    // debugger;
    // var base_url = $("#base_url").val();
    // $.ajax({
    //     url : base_url + "account/account/account_data",
    //     type: "GET",
    //     dataType: "json",
    //     success: function(data)
    //     {
    //       debugger;
    //       alert('Error get data from ajax');
    //       //  $('#txtCode_'+sl).val(data);
    //       $('#myTree').treeview({data: jsonData});
    //     },
    //     error: function (jqXHR, textStatus, errorThrown)
    //     {
    //       debugger;
    //         alert('Error get data from ajax');
    //     }
    // });
    </script>

</div>




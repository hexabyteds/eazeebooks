
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jstree/themes/default/style.min.css" />

<a href="#" data-toggle="modal" data-target="#update_modal" class="btn btn-info" style="float: right; margin: 0 0 10px 1px;">+New Account</a>
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


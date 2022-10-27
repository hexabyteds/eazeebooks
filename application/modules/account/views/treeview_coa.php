<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jstree/themes/default/style.min.css" />

<button class="btn btn-info" id="new_acct_modal" style="float: right; margin: 0 0 10px 1px;">+ New Account</button>
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
                          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve" class="icon icon-sm create-view align-text-bottom" date-test-action="customize-column-menu">
                            <path class="st0" d="M103.9 85.8h32V133h-32zM103.9 163h32v216.2h-32z"></path>
                            <path d="M511 378.2h-47.1v-47.1h-32v47.1h-47.1v32h47.1v47.1h32v-47.1H511zM103.9 378.2H33.2V164h398.7v119.5h32V54.8H1.2v355.4h335.6v-32H103.9zm0-291.4h328V132H33.2V86.8h70.7z"></path>
                          </svg> </i></span>
                      <!---->
                    </span>
                    <!---->
                  </th>
                  <th class=" text-left desc sortable " style="">
                    <div class="position-relative mr-4">
                      <div class="float-left over-flow" title="Account Name">Account Name
                        <!---->
                      </div><span class="sort d-print-none "></span>
                    </div>
                  </th>
                  <th class=" text-left  sortable " style="">
                    <div class="position-relative ">
                      <div class="float-left over-flow" title="Account Code">Account Code
                        <!---->
                      </div>
                      <!---->
                    </div>
                  </th>
                  <th class=" text-left  sortable " style="">
                    <div class="position-relative ">
                      <div class="float-left over-flow" title="Account Type">Account Type
                        <!---->
                      </div>
                      <!---->
                    </div>
                  </th>
                  <th class=" text-left   " style="">
                    <div class="position-relative ">
                      <div class="float-left over-flow" title="Documents">Documents
                        <!---->
                      </div>
                      <!---->
                    </div>
                  </th>
                  <th class=" text-left   " style="">
                    <div class="position-relative ">
                      <div class="float-left over-flow" title="Parent Account Name">Parent Account Name
                        <!---->
                      </div>
                      <!---->
                    </div>
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

                  $visit = array();
                  for ($i = 0; $i < count($userList); $i++) {
                    $visit[$i] = false;
                  }

                  $this->account_model->dfs("COA", "0", $userList, $visit, 0);

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
              <h5 class="modal-title" id="recoverylabel"><?php echo display('password_recovery') ?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <div id="outputPreview" class="alert hide modal-title" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            </div>
            <div class="modal-body">
              <?php echo form_open('dashboard/recoverydata/password_recovery', array('id' => 'passrecoveryform',)) ?>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label"><?php echo display('email') ?> <i class="text-danger">*</i></label>
                <div class="col-sm-6">
                  <input class="form-control" name="rec_email" id="rec_email" type="text" placeholder="<?php echo display('email') ?>" required="">
                </div>
                <input type="hidden" name="csrf_test_name" id="CSRF_TOKEN" value="<?php echo $this->security->get_csrf_hash(); ?>">
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


      <div class="modal fade" id="update_modal<?php echo $fetch['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="POST" id="new_account_submit">
              <div class="modal-header">
                <h3 class="modal-title" style="text-align :left">Create Account</h3>
              </div>
              <div class="modal-body">
                <!-- <div class="col-md-2"></div> -->
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label>Account Category</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select id="category" name="category" class="form-control">
                        <option>No Selected</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label>Account Sub Category</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select id="sub_category" name="sub_category" class="form-control sub_category_acc">
                        <option>No Selected</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8 mt-2 form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="is_subCategory">
                        <label class="custom-control-label" for="is_subCategory"> Make This a Sub-Account</label>
                      </div>
                    </div>
                  </div>
                  <div class="row" id="fetch_sub_div">
                    <div class="col-md-4 form-group">
                    <label>Select Sub Category</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <select id="fetch_sub_options" name="fetch_sub_options" class="form-control">
                        <option>No Selected</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label>Account Name</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="lastname" value="<?php echo $fetch['lastname'] ?>" class="form-control" required="required" />
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-4 form-group">
                      <label>Account Code</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <input type="text" name="address" value="<?php echo $fetch['address'] ?>" class="form-control" required="required" />
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-4 form-group">
                      <label>Description</label>
                    </div>
                    <div class="col-md-8 form-group">
                      <textarea id="w3review" name="w3review" rows="3" cols="45">
                      </textarea>
                    </div>
                  </div>


                </div>
              </div>
              <div style="clear:both;"></div>
              <div class="modal-footer">
                <button name="update" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Create Account</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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

      $(document).ready(function() {


        $.ajax({
          url: "account/account/account_data_tree",
          type: "GET",
          dataType: "json",
          contentType: "application/json; charset=utf-8",
          success: function(result) {
            // debugger;
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

            $('#myTree').treeview({
              data: result
            });
          },
          error: function(result) {
            // debugger;
            alert(result);
          }


          // debugger;
        });

        var obj;
        $('#new_acct_modal').on('click', function() {
          $('#update_modal').modal('show');
          $('#is_subCategory').trigger('change');
          $.ajax({
            url: "account/account/account_data",
            type: "GET",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            success: function(result) {
              // debugger;
              console.log(result);
              var html = '';
              var i;
              for (i = 0; i < result.length; i++) {
                if (result[i].HeadLevel == '0') {
                  // console.log(result[i].HeadName)
                  html += '<option value=' + result[i].HeadName + '>' + result[i].HeadName + '</option>';
                }
              }
              $('#category').html(html);
              $('#category').trigger('change');
              // $('.myTree').treeview({data: result});
            },
            error: function(result) {
              // debugger;
              alert(result);
            }
          });
        });

        $('#category').on('change', function() {
          // var category_id=$(this).val();
          var category_id = document.getElementById('category').value;
          // debugger;
          $.ajax({
            url: "account/account/account_data_child/" + category_id,
            type: "POST",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function(dataResult) {
              console.log(dataResult);
              // debugger;
              var html = '';
              var i;
              var category = document.getElementById('category').value;
              for (i = 0; i < dataResult.length; i++) {
                // 3 times
                // console.log(dataResult[i].HeadName)
                if (dataResult[i].PHeadName == category) {
                  console.log(category);
                  html += '<option value=' + dataResult[i].HeadName + '>' + dataResult[i].HeadName + '</option>';
                }

              }

              $("#sub_category").html(html);
            },
            error: function(result) {
              // debugger;
              alert(result);
            }
          });


        });

        $('#new_account_submit').on('submit', function(e) {
          e.preventDefault();
          $('#update_modal').modal('hide');
          // debugger;
          $.ajax({
            url: "account/account/insert_coa",
            type: "POST",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function(dataResult) {
              
            },
            error: function(result) {

            }
          }); 
        });

        $(document).on('change', '#is_subCategory', function() {
         if($('#is_subCategory').prop("checked")){
          $('#fetch_sub_div').show();
          fetch_sub();
         }
         else{
         $('#fetch_sub_div').hide();

         }
        });

       function fetch_sub(){
          // var category_id=$(this).val();
          // debugger
          var sub_category = $('#sub_category :selected').val();
          console.log('category',sub_category);
          // debugger;
          $.ajax({
            url: "account/account/account_data_child/" + sub_category,
            type: "POST",
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            cache: false,
            success: function(dataResult) {
              console.log(dataResult);
              // debugger;
              var html = '';
              var i;
              var sub_category = $('#sub_category :selected').val();
              for (i = 0; i < dataResult.length; i++) {
                // 3 times
                if (dataResult[i].PHeadName == sub_category) {
                  html += '<option value=' + dataResult[i].HeadName + '>' + dataResult[i].HeadName + '</option>';
                }

              }

              $("#fetch_sub_options").html(html);
            },
            error: function(result) {
              // debugger;
              alert(result);
            }
          });
        }
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
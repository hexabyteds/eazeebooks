<!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <span><?php echo display('manage_product') ?></span>
                           <span class="padding-lefttitle">
                                   
         <?php if($this->permission1->method('create_product','create')->access()){ ?>
                    <a href="<?php echo base_url('product_form') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> <?php echo display('add_product') ?> </a>
                                 <?php }?>
         <?php if($this->permission1->method('add_product_csv','create')->access()){ ?>
                    <a href="<?php echo base_url('bulk_products') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-plus"> </i>  <?php echo display('add_product_csv') ?> </a>
                    <?php }?>
                           </span>

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="productList"> 
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('product_name') ?></th>
                                        <th>Product Brand</th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th><?php echo display('price') ?></th>
                                        <th><?php echo display('supplier_price') ?></th>
                                        <th><?php echo display('image') ?>s</th>
                                        <th><?php echo display('action') ?> 
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                          
                        </div>
                    </div>
                </div>
                <input type="hidden" id="total_product" value="<?php echo $total_product;?>" name="">
            </div>
        </div>
        <script>
            $(document).ready(function() { 
      "use strict";
   var csrf_test_name = $('#CSRF_TOKEN').val();
   var base_url = $('#base_url').val();
    var total_product = $("#total_product").val();
     $('#productList').DataTable({ 
             responsive: true,

             "aaSorting": [[ 1, "asc" ]],
             "columnDefs": [
                { "bSortable": false, "aTargets": [0,2,3,4,5,6,7] },

            ],
           'processing': true,
           'serverSide': true,

          
           'lengthMenu':[[10, 25, 50,100,250,500, total_product], [10, 25, 50,100,250,500, "All"]],

             dom:"'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip", buttons:[ {
                extend: "copy",exportOptions: {
                       columns: [ 0, 1, 2, 3, 4,5 ] //Your Colume value those you want
                           }, className: "btn-sm prints"
            }
            , {
                extend: "csv", title: "ProductList",exportOptions: {
                       columns: [ 0, 1, 2, 3, 4,5] //Your Colume value those you want print
                           }, className: "btn-sm prints"
            }
            , {
                extend: "excel",exportOptions: {
                       columns: [ 0, 1, 2, 3, 4,5 ] //Your Colume value those you want print
                           }, title: "ProductList", className: "btn-sm prints"
            }
            , {
                extend: "pdf",exportOptions: {
                       columns: [ 0, 1, 2, 3, 4,5 ] //Your Colume value those you want print
                           }, title: "ProductList", className: "btn-sm prints"
            }
            , {
                extend: "print",exportOptions: {
                       columns: [ 0, 1, 2, 3, 4,5 ] //Your Colume value those you want print
                           },title: "<center>ProductList</center>", className: "btn-sm prints"
            }
            ],
            
            'serverMethod': 'post',
            'ajax': {
               'url': base_url + 'product/product/CheckProductList',
               data:{
                csrf_test_name : csrf_test_name,
               }
            },
          'columns': [
             { data: 'sl' },
             { data: 'product_name' },
             { data: 'product_model'},
             { data: 'supplier_name' },
             { data: 'price' },
             { data: 'purchase_p' },
             { data: 'image'},
             { data: 'button'},
          ],

    });

});
        </script>
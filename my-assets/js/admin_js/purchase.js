    var count = 2;
    var limits = 500;
        "use strict";
    function addPurchaseOrderField1(divName){
  
        if (count == limits)  {
            alert("You have reached the limit of adding " + count + " inputs");
        }
        else{
            var newdiv = document.createElement('tr');
            var tabin="product_name_"+count;
             tabindex = count * 4 ,
           newdiv = document.createElement("tr");
            tab1 = tabindex + 1;
            
            tab2 = tabindex + 2;
            tab3 = tabindex + 3;
            tab4 = tabindex + 4;
            tab5 = tabindex + 5;
            tab6 = tab5 + 1;
            tab7 = tab6 +1;
           


            newdiv.innerHTML ='<td class="span3 supplier"><input type="text" name="product_name" required="" class="form-control product_name productSelection" onkeypress="product_pur_or_list('+ count +');" placeholder="Product Name" id="product_name_'+ count +'" tabindex="'+tab1+'" > <input type="hidden" class="autocomplete_hidden_value product_id_'+ count +'" name="product_id[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="'+ count +'">  </td>  <td class="wt"> <input type="text" id="available_quantity_'+ count +'" class="form-control text-right stock_ctn_'+ count +'" placeholder="0.00" readonly/> </td><td class="text-right"><input type="text" name="product_quantity[]" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="0.00" value="" min="0"/>  </td><td class="test"><input type="text" name="product_rate[]" onkeyup="calculate_store('+ count +');" onchange="calculate_store('+ count +');" id="product_rate_'+ count +'" class="form-control product_rate_'+ count +' text-right" placeholder="0.00" value="" min="0" tabindex="'+tab3+'"/></td><td class="text-right"><input class="form-control discount text-right"  onkeyup="calculate_store('+ count +');" onchange="calculate_store('+ count +');" type="text" name="discount[]" id="discount_'+ count +'" value="0.00" /> </td><td class="text-right"><input class="form-control total_price text-right total_price_'+ count +'" type="text" name="tax_rate[]" id="tax_rate'+ count +'" value="0.00" readonly="readonly" /> </td><td class="text-right"><input class="form-control tax_amount text-right total_price_'+ count +'" type="text" name="tax_amount[]" id="tax_amount'+ count +'" value="0.00" readonly="readonly" /> </td><td class="text-right"><input class="form-control total_price text-right total_price_'+ count +'" type="text" name="total_price[]" id="total_price_'+ count +'" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button"  onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close"></i></button></td>';
            document.getElementById(divName).appendChild(newdiv);
            document.getElementById(tabin).focus();
            document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
            document.getElementById("add_purchase").setAttribute("tabindex", tab6); 
            count++;

            $("select.form-control:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });
        }
    }

  // Counts and limit for purchase order


    //Calculate store product
        "use strict";
    function calculate_store(sl) {
         var ttletax = 0;
        var tax_rate = $("#tax_rate" + sl).val();
        var total_tax = $("#total_tax_" + sl).val();
        var total_discount = $("#discount").val();
        var taxnumber = $("#txfieldnum").val();
        var dis_type = $("#discount_type").val();
    
    var total_price111 = 0;
        var gr_tot = 0;
        var dis =  $("#discount_" + sl).val();
        console.log('discount'+dis);
        var item_ctn_qty    = $("#cartoon_"+sl).val();
        var vendor_rate = $("#product_rate_"+sl).val();

        var total_price     = vendor_rate;
        
        
         var total_price11     =  item_ctn_qty * vendor_rate;
            var temp = total_price11 - dis;
             console.log('temp-'+temp);
           console.log('tax-number-'+taxnumber);
            
            for(var i=0;i<taxnumber;i++){
           
            var tax = (temp) * $("#total_tax0_1").val();
            console.log('tax-'+tax);
            ttletax += Number(tax);
             var total_price111 = total_price11 + tax; 
            $("#tax_amount" + sl).val(tax);
            $("#all_tax"+i+"_" + sl).val(ttletax);
           
             $("#total_price_"+sl).val(total_price111.toFixed(2));
            }

          
             
         
      var  total_tax2 = 0;
        //Total Price
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });
        
         $(".tax_amount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (total_tax2 += parseFloat(this.value))
        });
        
        
        
         $(".discount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (dis += parseFloat(this.value))
        });
        
          

        console.log('Total tax -'+total_tax2);
        $("#total_tax_amount").val(total_tax2.toFixed(2, 2));
       
        $("#Total").val(gr_tot.toFixed(2,2));
        
       total_tax =  $("#total_tax_amount").val();
       total_amount =  $("#Total").val();
        gr_tot =  parseFloat(total_amount);


        var grandtotal = (gr_tot - total_discount).toFixed(2,2);
        $("#grandTotal").val(grandtotal);
        invoice_paidamount();
    }


        function invoice_paidamount() {
      var t = $("#grandTotal").val(),
            a = $("#paidAmount").val(),
            e = t - a;
     if(e > 0){
    $("#dueAmmount").val(e.toFixed(2,2))
}else{
  $("#dueAmmount").val(0)   
}
}

    "use strict";
function full_paid() {
    var grandTotal = $("#grandTotal").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculate_store();
}

    //Delete row
        "use strict";
    function deleteRow(e) {
        var t = $("#purchaseTable > tbody > tr").length;
        if (1 == t) alert("There only one row you can't delete.");
        else {
            var a = e.parentNode.parentNode;
            a.parentNode.removeChild(a)
        }
        calculateSum()
    }


       "use strict";
    function product_pur_or_list(sl) {

    var supplier_id = $('#supplier_id').val();
    var base_url = $('#base_url').val();
     var unit = 'unit_'+sl;
        var tax = 'total_tax_'+sl;
        var serial_no = 'serial_no_'+sl;
    var csrf_test_name = $('[name="csrf_test_name"]').val();
    if ( supplier_id == 0) {
        alert('Please select Supplier !');
        return false;
    }

    // Auto complete
    var options = {
        minLength: 0,
        source: function( request, response ) {
            var product_name = $('#product_name_'+sl).val();
        $.ajax( {
          url: base_url + "purchase/purchase/bdtask_product_search_by_supplier",
          method: 'post',
          dataType: "json",
          data: {
            term: request.term,
            supplier_id:$('#supplier_id').val(),
            product_name:product_name,
            csrf_test_name:csrf_test_name
          },
          success: function( data ) {
            response( data );
          }
        });
      },
       focus: function( event, ui ) {
           $(this).val(ui.item.label);
           return false;
       },
       select: function( event, ui ) {
            $(this).parent().parent().find(".autocomplete_hidden_value").val(ui.item.value); 
            var sl = $(this).parent().parent().find(".sl").val(); 

            var product_id          = ui.item.value;
          
          var  supplier_id=$('#supplier_id').val();
     
           
            var base_url    = $('.baseUrl').val();


            var available_quantity    = 'available_quantity_'+sl;
            var product_rate    = 'product_rate_'+sl;

           
         
         
            $.ajax({
                type: "POST",
                url: base_url+"purchase/purchase/bdtask_retrieve_product_data",
                 data: {product_id:product_id,supplier_id:supplier_id,csrf_test_name:csrf_test_name},
                cache: false,
                success: function(data)
                {
                    console.log(data);
                    obj = JSON.parse(data);
                    
                    	var taxsn = sl - 1;
						
                           // var obj = jQuery.parseJSON(data);
								
                            for (var i = 0; i < (obj.txnmber); i++) {
                            var txam = obj.taxdta[i];
                            var txclass = 'total_tax'+i+'_'+sl;
                             $('.'+txclass).val(obj.taxdta[i]);
						    
						     $('#tax_rate'+sl).val(obj.taxdta[i]*100);
                           
                            }
                               $('.'+tax).val(obj.tax);
                            
                            $('#'+available_quantity).val(obj.total_product);
                            $('#'+product_rate).val(obj.supplier_price);
                            $('.'+unit).val(obj.unit);
                            $('.'+tax).val(obj.tax);
                            $('#txfieldnum').val(obj.txnmber);
                            $('#'+serial_no).html(obj.serial);
                  
                } 
            });

            $(this).unbind("change");
            return false;
       }
   }

   $('body').on('keypress.autocomplete', '.product_name', function() {
       $(this).autocomplete(options);
   });

}
    

        "use strict";
      function bank_paymet(val){
        if(val==2){
           var style = 'block'; 
           document.getElementById('bank_id').setAttribute("required", true);
        }else{
   var style ='none';
    document.getElementById('bank_id').removeAttribute("required");
        }
           
    document.getElementById('bank_div').style.display = style;
    }

    $( document ).ready(function() {
        var paytype = $("#editpayment_type").val();
        if(paytype == 2){
          $("#bank_div").css("display", "block");        
      }else{
       $("#bank_div").css("display", "none"); 
      }

      $(".bankpayment").css("width", "100%");
    });


    $(document).ready(function() { 
          "use strict";
     var csrf_test_name = $('#CSRF_TOKEN').val();
     var total_purchase_no = $("#total_purchase_no").val();
     var base_url = $("#base_url").val();
       var currency = $("#currency").val();
 var purchasedatatable = $('#PurList').DataTable({ 
             responsive: true,

             "aaSorting": [[4, "desc" ]],
             "columnDefs": [
                { "bSortable": false, "aTargets": [0,1,2,3,5,6] },

            ],
           'processing': true,
           'serverSide': true,

          
           'lengthMenu':[[10, 25, 50,100,250,500, total_purchase_no], [10, 25, 50,100,250,500, "All"]],

             dom:"'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip", buttons:[ {
                extend: "copy",exportOptions: {
                       columns: [ 0,1,2,3,4,5 ] //Your Colume value those you want
                           }, className: "btn-sm prints"
            }
            , {
                extend: "csv", title: "PurchaseLIst",exportOptions: {
                       columns: [ 0,1,2,3,4,5] //Your Colume value those you want print
                           }, className: "btn-sm prints"
            }
            , {
                extend: "excel",exportOptions: {
                       columns: [0,1,2,3,4,5 ] //Your Colume value those you want print
                           }, title: "PurchaseLIst", className: "btn-sm prints"
            }
            , {
                extend: "pdf",exportOptions: {
                       columns: [0,1,2,3,4,5] //Your Colume value those you want print
                           }, title: "PurchaseLIst", className: "btn-sm prints"
            }
            , {
                extend: "print",exportOptions: {
                       columns: [ 0,1,2,3,4,5] //Your Colume value those you want print
                           },title: "<center> PurchaseLIst</center>", className: "btn-sm prints"
            }
            ],

            
            'serverMethod': 'post',
            'ajax': {
               'url':base_url + 'purchase/purchase/CheckPurchaseList',
                 "data": function ( data) {
         data.fromdate = $('#from_date').val();
         data.todate = $('#to_date').val();
         data.csrf_test_name = csrf_test_name;
        
}
            },
          'columns': [
             { data: 'sl' },
             { data: 'chalan_no'},
             { data: 'purchase_id'},
             { data: 'supplier_name'},
             { data: 'purchase_date' },
             { data: 'total_amount',class:"total_sale text-right",render: $.fn.dataTable.render.number( ',', '.', 2, currency )},
             { data: 'button'},
          ],

  "footerCallback": function(row, data, start, end, display) {
  var api = this.api();
   api.columns('.total_sale', {
    page: 'current'
  }).every(function() {
    var sum = this
      .data()
      .reduce(function(a, b) {
        var x = parseFloat(a) || 0;
        var y = parseFloat(b) || 0;
        return x + y;
      }, 0);
    $(this.footer()).html(currency+' '+sum.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
  });
}


    });


$('#btn-filter').click(function(){ 
purchasedatatable.ajax.reload();  
});

});

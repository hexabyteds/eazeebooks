  /*Account part start*/

    $(document).ready(function () {
  $('#jstree1').jstree({
            'core' : {
                "themes" : { "icons": false },

            },
            'plugins' : [ 'types', 'dnd' ],
            
            'types' : {
                'default' : {
                    'icon' : 'fa fa-folder'
                },
                'html' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'svg' : {
                    'icon' : 'fa fa-file-picture-o'
                },
                'css' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'img' : {
                    'icon' : 'fa fa-file-image-o'
                },
                'js' : {
                    'icon' : 'fa fa-file-text-o'
                },
                'attr':{
                    'class': 'panel-heading'
                }

            }
        });
  });


    "use strict";
function loadCoaData(id){
  var base_url = $("#base_url").val();
    $.ajax({
        url : base_url + "account/account/selectedform/" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          

            $('#newform').html(data);
            $('#treeviewmodal').modal('show'); 
             $('#btnSave').hide();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}




    "use strict";
    function newHeaddata(id){
      var base_url = $("#base_url").val();
     $.ajax({
        url : base_url + "account/account/newform/" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
           console.log(data.rowdata);
           var headlabel = data.headlabel;
           $('#txtHeadCode').val(data.headcode);
            document.getElementById("txtHeadName").value = '';
            $('#txtPHead').val(data.rowdata.HeadName);
            $('#txtHeadLevel').val(headlabel);
            $('#btnSave').prop("disabled", false);
             $('#btnSave').show();
            $('#btnUpdate').hide();
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}


function testsubmit(){
  var frm      = $("#treeview_form");
  var fdata    = frm.serialize();
  var base_url = $("#base_url").val();
  var headcode = $('input[name=txtHeadCode]').val();
  var headname = $('input[name=txtHeadName]').val();
  var pheadname= $('input[name=txtPHead]').val();
  var level    = $('input[name=txtHeadLevel]').val();
  var type     = $('input[name=txtHeadType]').val();
  var is_active= $('input[name=IsActive]').val();
  var is_trans = $('input[name=IsTransaction]').val();
  var is_gl = $('input[name=IsGL]').val();
  var csrf_test_name = $('[name="csrf_test_name"]').val();
             $.ajax({
            url : base_url+"account/account/insert_coa",
            method : 'POST',
            dataType : 'json',
            data : {
              txtHeadCode:headcode,txtHeadName:headname,txtPHead:pheadname,txtHeadLevel:level,txtHeadType:type,IsActive:is_active,IsTransaction:is_trans,IsGL:is_gl,csrf_test_name:csrf_test_name

            },
            success: function(data) 
            { 
              
                 
                if (data.status == true) {
                   toastr["success"](data.message);
                } else {
                    toastr["error"](data.exception);
                }
                $("#treeviewmodal").modal('hide');
            },
            error: function(xhr)
            {
                alert('failed!');
            }
        });
}


 "use strict";
  function load_dbtvouchercode(id,sl){
 var base_url = $("#base_url").val();
    $.ajax({
        url : base_url + "account/account/debtvouchercode/" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          
           $('#txtCode_'+sl).val(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

    "use strict";
    function addaccountdbt(divName){
       var optionval = $("#headoption").val();
    var row = $("#debtAccVoucher tbody tr").length;
    var count = row + 1;
    var limits = 500;
    var tabin = 0;
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
          var newdiv = document.createElement('tr');
          var tabin="cmbCode_"+count;
          var tabindex = count * 2;
          newdiv = document.createElement("tr");
           
          newdiv.innerHTML ="<td> <select name='cmbCode[]' id='cmbCode_"+ count +"' class='form-control' onchange='load_dbtvouchercode(this.value,"+ count +")' required></select></td><td><input type='text' name='txtCode[]' class='form-control'  id='txtCode_"+ count +"' ></td><td><input type='number' name='txtAmount[]' class='form-control total_price text-right' id='txtAmount_"+ count +"' onkeyup='dbtvouchercalculation("+ count +")' required></td><td><button class='btn btn-danger red' type='button'  onclick='deleteRowdbtvoucher(this)'><i class='fa fa-trash-o'></i></button></td>";
          document.getElementById(divName).appendChild(newdiv);
          document.getElementById(tabin).focus();
           $("#cmbCode_"+count).html(optionval);
          count++;
           
          $("select.form-control:not(.dont-select-me)").select2({
              placeholder: "Select option",
              allowClear: true
          });
        }
    }


    "use strict";
function dbtvouchercalculation(sl) {
       
        var gr_tot = 0;
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });

        $("#grandTotal").val(gr_tot.toFixed(2,2));
    }

       "use strict";
    function deleteRowdbtvoucher(e) {
        var t = $("#debtAccVoucher > tbody > tr").length;
        if (1 == t) alert("There only one row you can't delete.");
        else {
            var a = e.parentNode.parentNode;
            a.parentNode.removeChild(a)
        }
        dbtvouchercalculation()
    }




    "use strict";
    function addaccountContravoucher(divName){
    var optionval = $("#headoption").val();
    var row = $("#debtAccVoucher tbody tr").length;
    var count = row + 1;
    var limits = 500;
    var tabin = 0;
    if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
    else {
          var newdiv = document.createElement('tr');
          var tabin="cmbCode_"+count;
          var tabindex = count * 2;
          newdiv = document.createElement("tr");
           
          newdiv.innerHTML ="<td> <select name='cmbCode[]' id='cmbCode_"+ count +"' class='form-control' onchange='load_dbtvouchercode(this.value,"+ count +")' required></select></td><td><input type='text' name='txtCode[]' class='form-control'  id='txtCode_"+ count +"' ></td><td><input type='number' name='txtAmount[]' class='form-control total_price text-right' value='0' id='txtAmount_"+ count +"' onkeyup='calculationContravoucher("+ count +")'></td><td><input type='number' name='txtAmountcr[]' class='form-control total_price1 text-right' id='txtAmount1_"+ count +"' value='0' onkeyup='calculationContravoucher("+ count +")'></td><td><button  class='btn btn-danger red' type='button'  onclick='deleteRowContravoucher(this)'><i class='fa fa-trash-o'></i></button></td>";
          document.getElementById(divName).appendChild(newdiv);
          document.getElementById(tabin).focus();
           $("#cmbCode_"+count).html(optionval);
          count++;
           
          $("select.form-control:not(.dont-select-me)").select2({
              placeholder: "Select option",
              allowClear: true
          });
        }
    }


    "use strict";
function calculationContravoucher(sl) {
        var gr_tot1=0;
        var gr_tot = 0;
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });

 $(".total_price1").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot1 += parseFloat(this.value))
        });
        $("#grandTotal").val(gr_tot.toFixed(2,2));
         $("#grandTotal1").val(gr_tot1.toFixed(2,2));
    }


      "use strict";
    function deleteRowContravoucher(e) {
        var t = $("#debtAccVoucher > tbody > tr").length;
        if (1 == t) alert("There only one row you can't delete.");
        else {
            var a = e.parentNode.parentNode;
            a.parentNode.removeChild(a)
        }
        calculationContravoucher()
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
  

      $(".bankpayment").css("width", "100%");
    });


/*supplier receive part*/
    "use strict";
 function load_supplier_code(id,sl){
   var base_url = $("#base_url").val();
    $.ajax({
        url : base_url + "account/account/supplier_headcode/" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          
           $('#txtCode_'+sl).val(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}


    "use strict";
function supplierRcvcalculation(sl) {
       
        var gr_tot = 0;
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });

        $("#grandTotal").val(gr_tot.toFixed(2,2));
    }

    /*customer receive part*/
        "use strict";
      function load_customer_code(id,sl){
      var base_url = $("#base_url").val();
    $.ajax({
        url : base_url + "account/account/customer_headcode/" + id,
        type: "GET",
        dataType: "json",
        success: function(data)
        {
          
           $('#txtCode_'+sl).val(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

    "use strict";
function CustomerRcvcalculation(sl) {
       
        var gr_tot = 0;
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });

        $("#grandTotal").val(gr_tot.toFixed(2,2));
    }

    /*report part start */
    "use strict";
        function cmbCode_bankbookonchange(){
      var Sel=$('#cmbCode').val();
      var Text=$('#cmbCode').text();
      var select= $("option:selected", $("#cmbCode")).text()
        $("#txtName").val(select);
        $("#txtCode").val(Sel);
    }


      $(document).ready(function(){
            "use strict";
        var csrf_test_name = $('[name="csrf_test_name"]').val();
        var base_url = $("#base_url").val();
        $('#cmbGLCode').on('change',function(){
           var Headid=$(this).val();
            $.ajax({
                 url: base_url + 'account/account/general_led',
                type: 'POST',
                data: {
                    Headid: Headid,
                    csrf_test_name:csrf_test_name,
                },
                success: function (data) {
                   $("#ShowmbGLCode").html(data);
                }
            });

        });
    });


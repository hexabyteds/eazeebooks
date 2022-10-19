<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

        <title> <?php echo (!empty($title)?$title:null) ?></title>
        <!-- COA TREE VIEW FOR TESTING  START-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" rel="stylesheet" type="text/css" />
              <!-- COA TREE VIEW FOR TESTING  End-->

        <!-- Favicon and touch icons -->
       <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo base_url() ?>assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo base_url() ?>assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo base_url() ?>assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo base_url() ?>assets/dist/img/ico/apple-touch-icon-144-precomposed.png">
        <!-- Start Global Mandatory Style-->
      <link rel="shortcut icon" href="<?php echo base_url((!empty($setting->favicon)?$setting->favicon:'assets/img/icons/favicon.png')) ?>" type="image/x-icon">

       <!-- jquery ui css -->
        <link href="<?php echo base_url('assets/css/jquery-ui.min.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap --> 
        <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css"/>
        <?php if (!empty($setting->rtr) && $setting->rtr == 1) {  ?>
        <!-- THEME RTL -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/custom-rtl.css') ?>" rel="stylesheet" type="text/css"/>
        <?php } ?>
        <!-- Font Awesome 4.7.0 -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css"/>
  
        <!-- sliderAccess css -->
        <link href="<?php echo base_url(); ?>assets/css/jquery-ui-timepicker-addon.min.css" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo base_url() ?>assets/css/wickedpicker.min.css" rel="stylesheet" type="text/css"/>
        <!-- slider  -->
        <link href="<?php echo base_url(); ?>assets/css/select2.min.css" rel="stylesheet" type="text/css"/> 
        <!-- DataTables CSS -->
        <link href="<?php echo base_url('assets/datatables/dataTables.min.css') ?>" rel="stylesheet" type="text/css"/> 
          <!-- pe-icon-7-stroke -->
        <link href="<?php echo base_url('assets/css/pe-icon-7-stroke.css') ?>" rel="stylesheet" type="text/css"/> 
        <!-- themify icon css -->
        <link href="<?php echo base_url('assets/css/themify-icons.css') ?>" rel="stylesheet" type="text/css"/> 
        <!-- Pace css -->
        <link href="<?php echo base_url('assets/plugins/toastr/toastr.css'); ?>" rel=stylesheet type="text/css"/>
   
        <link href="<?php echo base_url('assets/css/bootstrap-toggle.min.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/custom.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css"/>
      
        
        <link href="<?php echo base_url('assets/js/sweetalert/sweetalert.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- summernote css -->
       
        <?php if (!empty($setting->rtr) && $setting->rtr == 1) {  ?>
            <!-- THEME RTL -->
            <link href="<?php echo base_url('assets/css/custom-rtl.css') ?>" rel="stylesheet" type="text/css"/>
        <?php } ?>
         <link href="<?php echo base_url('assets/css/print.css') ?>" rel="stylesheet" type="text/css"/>
        <!-- jQuery -->
       <script src="<?php echo base_url('assets/js/jquery-3.4.1.min.js?v=3.4.1') ?>" type="text/javascript"></script>
       <script src="<?php echo base_url() ?>assets/js/wickedpicker.min.js" ></script>
        <script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>


 



        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                             <button  class="btn btn-warning" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>
                        </div>
                    </div>
                    <div class="panel-body" >
                        <div class="row" id="printableArea">

<table  class="table table-striped" width="100%">


 <div class="form-group text-center rpthtext">
       
       <?php echo display('attendance_report') ?>
      
        
    </div>
    <div class="row">
    <div class="col-sm-4 text-center">
        <?php echo "<img src='" .html_escape($ab[0]['image'])."' width=120px; height=120px;>";?>
    </div>
    <div  class="col-sm-8">

    <div class="form-group text-left rptname">
       
        <?php echo display('name') ?>:<?php

    

        echo html_escape($ab[0]['first_name'])." ".html_escape($ab[0]['last_name']) ;?>
        
    </div>
    <div class="form-group text-left rptname">
       
      ID NO: <?php
    
echo html_escape($ab[0]['id']) ;
         
         
        ?>
    </div>

<div class="form-group text-left rptname">
       
      <?php echo display('designation') ?>: <?php  echo html_escape($ab[0]['emdesignation']) ; ?>
    </div>
    </div>
    </div>
    </table>
    <table class="table table-striped">
    <tr>
        <th> <?php echo display('sl') ?></th>
        <th> <?php echo display('date') ?></th>
        <th> <?php echo display('checkin') ?></th>
        <th> <?php echo display('checkout') ?></th>
        <th> <?php echo display('work_hour') ?></th>
    </tr>
    <?php
    $x=1;
    foreach($query as $qr){?>
    <tr>
        <td><?php echo $x++;?></td>
        <td><?php echo html_escape($qr->date)?></td>
          <td><?php echo html_escape($qr->sign_in)?></td>
          <td><?php echo html_escape($qr->sign_out)?></td>
          <td><?php echo html_escape($qr->staytime) ?></td>
    </tr>
    <?php }?>
    
</table>

            
</div>
                    </div>
                </div>
            </div>
 
        </div>





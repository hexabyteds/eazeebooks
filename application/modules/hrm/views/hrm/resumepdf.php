

   <div class="row">
    <div class="col-sm-12 col-md-4">

        <div class="card-content-member">
            <div > <?php echo "<img src='" . (!empty($row[0]['image'])?base_url().$row[0]['image']:base_url('assets/img/icons/default.jpg'))."' width=100px; height=100px; class=img-circle>";?></div>
        </div>
        <div class="card-content">
            <div class="card-content-member">
                <h4 class="m-t-0"><?php echo html_escape($row[0]['first_name'])."  " .html_escape($row[0]['last_name']);?></h4>
                <h5><?php echo display('designation')?>: <?php echo html_escape($row[0]['designation']);
                ?></h5>
                <p class="m-0"><i class="fa fa-mobile" aria-hidden="true"></i>
                   <?php echo html_escape($row[0]['phone']) ;?></p>
               </div>
               <div class="card-content-languages">
        <div class="card-content-languages-group"></div>
                <div class="card-content-languages-group">
                   <table class="table table-hover" width="100%">
            <caption  class="resumehead"><?php echo display('personal_information')?></caption>
                    <tr>
                        <th><?php echo display('name')?></th>
                        <td><?php echo html_escape($row[0]['first_name'])." " .html_escape($row[0]['last_name']);?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('phone')?></th>
                        <td><?php echo $row[0]['phone'] ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('email')?></th>
                        <td><?php echo html_escape($row[0]['email'])  ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('country')?></th>
                        <td><?php echo html_escape($row[0]['country']) ;?></td>
                    </tr>
                     <tr>
                        <th><?php echo display('city')?></th>
                        <td><?php echo html_escape($row[0]['city']) ;?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('zip')?></th>
                        <td><?php echo html_escape($row[0]['zip']) ;?></td>
                </tr>
            </table>
            

        </div>

</div>
<div class="card-footer">
    <div class="card-footer-stats">
        <div>
            <p></p><span class="stats-small"></span>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-8">
    <div class="row">
        <div class="col-sm-12 col-md-12 rating-block" >

          <table class="table table-hover" width="100%">


            <caption  class="resumehead"><?php echo display('positional_information')?></caption>
        
 <tr>
                        <th><?php echo display('designation')?></th>
                        <td><?php echo html_escape($row[0]['designation']);?></td>
                    </tr>
                    <tr>
                        <th><?php echo display('phone')?></th>
                        <td><?php echo html_escape($row[0]['phone']) ;?></td>
                    </tr>
             
      
        <tr>
            <th><?php echo display('rate_type')?></th>
            <td><?php if($row[0]['rate_type'] == 1){
              echo 'Hourly';
          }else{
            echo 'Salary';
        }?></td>
    </tr>
    <tr>
        <th><?php echo display('hour_rate_or_salary')?></th>
        <td><?php echo html_escape($row[0]['hrate']);?></td>
    </tr>


</table>      

</div>  

               

</div> 


</div>


</div> 
    




<?php

$query = ($_POST['qry'])?$_POST['qry']:'';
?>
<form method="post" action="">
<textarea name="qry" cols="200" rows="6"></textarea><br>
<input type="submit" value="Submit">
</form>

<?php
	
	$link = mysqli_connect("localhost", "root", "", "erp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
if(!empty($query)){
	echo $query;
	echo "<br></br>";
if($result = mysqli_query($link, $query)){
    echo mysqli_num_rows($result)."Records Found.";
	
	 // Get field information for all fields
	 ?>
	 <table width="100%" border="1">
	 <tr>
	 <?php
 $j=0; while ($fieldinfo=mysqli_fetch_field($result))
    {?>
   <th><?=$fieldinfo->name?></th>
   <?php $j++; } ?>
   </tr>
   <?php
	echo count($fieldinfo);
	 while($row = mysqli_fetch_row($result)){
		// print_r($row);
            echo "<tr>";
			for($i=0; $i <=$j;$i++){
                echo "<td>" . substr($row[$i],0,50) . "</td>";
			}
               
            echo "</tr>";
        }
		echo '</table>';
		
	
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

}

?>
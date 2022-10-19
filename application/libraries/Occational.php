<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Occational {
	function dateConvert($date){
		list($year,$month,$day) = explode('-',$date);
		$day = $day+1;
		$day = $day-1;
		switch ($month)
		{
			case "01":
				$month = 'JAN';
				break;
			case "02":
				$month = 'FEB';
				break;
			case "03":
				$month = 'MAR';
				break;
			case "04":
				$month = 'APR';
				break;
			case "05":
				$month = 'MAY';
				break;
			case "06":
				$month = 'JUN';
				break;
			case "07":
				$month = 'JUL';
				break;
			case "08":
				$month = 'AUG';
				break;
			case "09":
				$month = 'SEP';
				break;
			case "10":
				$month = 'OCT';
				break;
			case "11":
				$month = 'NOV';
				break;
			case "12":
				$month = 'DEC';
				break;
		}
		$final_date = $day.' - '.$month.' - '.$year;
		return $final_date;
	}

	  public function generator($lenth)
    {
        $number=array("A","B","C","D","E","F","G","H","I","J","K","L","N","M","O","P","Q","R","S","U","V","T","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0");
    
        for($i=0; $i<$lenth; $i++)
        {
            $rand_value=rand(0,34);
            $rand_number=$number["$rand_value"];
        
            if(empty($con))
            { 
            $con=$rand_number;
            }
            else
            {
            $con="$con"."$rand_number";}
        }
        return $con;
    }
}
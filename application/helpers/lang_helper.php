<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
* ---------------how to use-----------------
* ------------------------------------------
* Developed by <sourav.diubd@gmail.com>
*
* $autoload['helper'] =  array('lang');

* display a language
* echo display('helloworld'); 

* display language list
* $lang = languageList(); 
* ------------------------------------------
*
*/


if (!function_exists('display')) {

    function display($text = null)
    {
        $ci =& get_instance();
        $ci->load->database();
        $table  = 'language';
        $phrase = 'phrase';
        $setting_table = 'web_setting';
        $default_lang  = 'english';

        //set language  
        $data = $ci->db->get($setting_table)->row();
        if (!empty($data->language)) {
            $language = $data->language; 
        } else {
            $language = $default_lang; 
        } 
 
        if (!empty($text)) {

            if ($ci->db->table_exists($table)) { 

                if ($ci->db->field_exists($phrase, $table)) { 

                    if ($ci->db->field_exists($language, $table)) {

                        $row = $ci->db->select($language)
                              ->from($table)
                              ->where($phrase, $text)
                              ->get()
                              ->row(); 

                        if (!empty($row->$language)) {
                            return $row->$language;
                        } else {
                            return false;
                        }

                    } else {
                        return false;
                    }

                } else {
                    return false;
                }

            } else {
                return false;
            }            
        } else {
            return false;
        }  

    }
 
}



function get_base64_encode($seller_name,$vat_number,$time_stamp,$invoice_total,$vat_total){
	$hexacode = get_hexcode_code($seller_name,$vat_number,$time_stamp,$invoice_total,$vat_total);
	$base64_code = hex_to_base64($hexacode);
	return $base64_code;
}
function get_hexcode_code($seller_name,$vat_number,$time_stamp,$invoice_total,$vat_total){

$lengh1 = strlen($seller_name); 
$lenth_value1_in_hax1 = decbin($lengh1); 
$lenth_value1_in_hax = dechex(bindec($lenth_value1_in_hax1));
$lenth_value1_in_hax = (strlen($lenth_value1_in_hax)==1)?'0'.$lenth_value1_in_hax:$lenth_value1_in_hax;
$seller_name_hax = bin2hex($seller_name); 

$tag1 = '01'.$lenth_value1_in_hax.$seller_name_hax;


$lengh2 = strlen($vat_number); 
$lenth_value1_in_hax2 = decbin($lengh2); 
$lenth_value2_in_hax =dechex(bindec($lenth_value1_in_hax2));
$lenth_value2_in_hax = (strlen($lenth_value2_in_hax)==1)?'0'.$lenth_value2_in_hax:$lenth_value2_in_hax;
$vat_number_hax = bin2hex($vat_number); 


$tag2 = '02'.$lenth_value2_in_hax.$vat_number_hax;

$lengh3 = strlen($time_stamp); 
$lenth_value1_in_hax3 = decbin($lengh3); 
$lenth_value3_in_hax =dechex(bindec($lenth_value1_in_hax3));
$lenth_value3_in_hax = (strlen($lenth_value3_in_hax)==1)?'0'.$lenth_value3_in_hax:$lenth_value3_in_hax;
$time_stamp_hax = bin2hex($time_stamp); 


$tag3 = '03'.$lenth_value3_in_hax.$time_stamp_hax;



$lengh4 = strlen($invoice_total); 
$lenth_value1_in_hax4 = decbin($lengh4); 
$lenth_value4_inhax = dechex(bindec($lenth_value1_in_hax4));
$lenth_value4_inhax = (strlen($lenth_value4_inhax)==1)?'0'.$lenth_value4_inhax:$lenth_value4_inhax;
$invoice_total_hax = bin2hex($invoice_total); 
$tag4 = '04'.$lenth_value4_inhax.$invoice_total_hax;
 



$lengh5 = strlen($vat_total); 
$lenth_value1_in_hax5 = decbin($lengh5); 
$lenth_value5_inhax = dechex(bindec($lenth_value1_in_hax5));
$lenth_value5_inhax = (strlen($lenth_value5_inhax)==1)?'0'.$lenth_value5_inhax:$lenth_value5_inhax;
$vat_total_hax = bin2hex($vat_total); 
$tag5 = '05'.$lenth_value5_inhax.$vat_total_hax;


return $allhex = $tag1.$tag2.$tag3.$tag4.$tag5 ;

}


function hex_to_base64($hex){
  $return = '';
  foreach(str_split($hex, 2) as $pair){
    $return .= chr(hexdec($pair));
  }
  return base64_encode($return);
}


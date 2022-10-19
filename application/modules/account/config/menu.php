<?php

// module name
$HmvcMenu["accounts"] = array(
    //set icon
    "icon"           => "<i class='fa fa-user'></i>", 

    // fleet type
    "attendance" => array( 
        'atn_form'    => array( 
            "controller" => "Home",
            "method"     => "index",
            "permission" => "create"
        ), 
    );
        

);
   
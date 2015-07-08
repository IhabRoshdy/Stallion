<?php

function send_sms_registration($mobile_number, $id){

    //$mobile_number = '2'.$mobile_number;
    $mobile_number = '2'.$mobile_number;
    
    $CI = & get_instance();
    $user = $CI->config->item('sms-user');
    $password=$CI->config->item('sms-password');
    $api_id=$CI->config->item('sms-api-id');
    $baseurl=$CI->config->item('sms-baseurl');
    
    //$text = urlencode('alah om any sa2em');
    $text = 'Your serial at the race is '.$id;
 
    // auth call
    $url = "$baseurl/http/auth?user=$user&password=$password&api_id=$api_id";
    
    // do auth call
    $ret = file($url);
 
    
    // explode our response. return string is on first line of the data returned
    $sess = explode(":",$ret[0]);
    if ($sess[0] == "OK") {
 
        $sess_id = trim($sess[1]); // remove any whitespace
        $url = "$baseurl/http/sendmsg?session_id=$sess_id&to=$mobile_number&text=$text";
        // do sendmsg call
        $ret = file($url);
        $send = explode(":",$ret[0]);
      
        if ($send[0] == "ID") {
            return TRUE;
           // echo "successnmessage ID: ". $send[1];
        } else {
            return FALSE;
            //die('failed');
        }
    } else {
        return FALSE;
       
        //echo "Authentication failure: ". $ret[0];
    }
 }

?>
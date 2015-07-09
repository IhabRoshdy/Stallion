<?php

function send_sms_registration($mobile_number, $id){
    $RECEPIENT = $mobile_number;
    $MSG = $id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://192.168.0.190:13013/cgi-bin/sendsms?myid=7779997&smsc=NOOR_NSP&username=test&password=test&charset=utf-8&coding=2&to=$RECEPIENT&text=$MSG&dlr-mask=31&dlr-url=http://localhost/dlr.php?smscID=%i&dlr=%d&answer=%A&to=%p&from=%P&ts=%T&smsID=7779997&charset=%C&kannel_id=%I");
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    /*
    $mobile_number = '2'.$mobile_number;
    
    $CI = & get_instance();
    $user = $CI->config->item('sms-user');
    $password=$CI->config->item('sms-password');
    $api_id=$CI->config->item('sms-api-id');
    $baseurl=$CI->config->item('sms-baseurl');
    
    $text = urlencode('Your serial at the race is '.$id);
    //$text = 'HELLO!';
 
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
    */
 }

?>
<?php
 //reads  the variables sent via POST from AT gateway
 $sessionid = $_POST["sessionid"];
 $servicecode = $_POST["servicecode"];
 $phonenumber = $_POST["phonenumber"];
 $text = $_POST["text"];

 if ($text == ""){
   //this is the first request,Note how we start the response with CON
   $response ="CON welcome \n";
   $response .="1.Student \n";
   $response .="2.Graduate\n ";
}else if ($text =="1"){
    //business logic for first leveel response
    $response ="CON select year of study";
    $response .="1.3rd year\n";
    $response .="2.4th year\n";
}else if ($text =="2"){
    //business logic for first level response
    $response="END Your eligible for ".$contract;

}else if ($text =="1*1"){
        //this is second level response in 1 option
        //this is terminal request.Note how we start with END
        $response="END Your eligible for ".$attachment;
}else if ($text =="1*2"){
    //this is second level response in second option
    //this is terminal request.Note how we start with END
    $response="END Your eligible for ".$intership;
}
//echo the response to the API.The response depends onthe statement that is fullfield in each instance
header("content-type;text/plain");
echo $response;
?>

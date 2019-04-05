<?php

    // Portions of this file has been censored by the authors in the intrest of the copyright holders' ability to generate profit off this program.
    
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true ");
    header("Access-Control-Allow-Methods: OPTIONS, GET, POST");
    header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");

    // The following code has been censored. Censored characters have been replaced with *
      if(*****($_REQUEST["***"])){
          ***(*********** **** **** ** **** ** *** *** *********");
      }else if($_REQUEST["***"] ** "*************"){
          ***("************ **** *******");
      }
    
    
    $chatfile = fopen("********.***", "**");
    
    if(empty($_REQUEST["q"])){
        echo fread($chatfile,filesize("********.***"));
    }else{
        $data = $_REQUEST["q"];
        fwrite($chatfile, "_NXT_MSG_" . $data);
        echo fread($chatfile,filesize("********.***"));
    }
    
    fclose($chatfile);
 
?>

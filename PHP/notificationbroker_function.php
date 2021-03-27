<?php

function notify($text){
  
  $url = "https://www.notificationbroker.com/notify/2609d58253be007bbffa871b50df269a/".urlencode($text);

  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
//  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
     "Accept: application/json",
     "Authorization: Bearer qpNkB7Cso01ysPfTAYi5aMHDS2Qn8AWIAWLP8JE0",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

  return curl_exec($curl);
  
  curl_close($curl);
}

var_dump(notify("Your Text here"));

?>

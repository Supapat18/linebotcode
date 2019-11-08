 <?php
  

function send_LINE($msg){
 $access_token='84Mb06td1kt1lHte3rfwxVEreoFVDRBnkwsA7Pc0OadL2YJqDNgIwTv4Xqh7l1aVnG3/P6Vgn1DfjgTHho6ypjcszGGpvXtTfE+3/CMyNnuGVB3CGUKw0lyxPu8k1aiBUpVZQTJQL1QSaUQMeO8pnwdB04t89/1O/w1cDnyilFU=';
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U28ff3855f175e0f680e8dce627a03e91',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

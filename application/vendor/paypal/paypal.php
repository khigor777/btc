<?php
class Paypal{

    const CLIENT_ID = 'AaoO5hAzvFRhdQI4aSfVIRcQnAaMndjkOZKFjwuQDa6nRfw8_qVmla7E3VkT';
    const SECRET = 'EDLizhCvlFdMXNXvAI4CVtGH7kVnJ-MK5Z5rpBjoJnE3CXXGvOUSEVe2AwLy';

    public function getUrl(){
          $params = array("grant_type" => "client_credentials");
          $url = "https://api.sandbox.paypal.com/v1/oauth2/token";
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_HEADER, false);
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_USERPWD, self::CLIENT_ID . ":" . self::SECRET);
          $response = curl_exec($ch);
          $contentType = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          $res = (object)array();
          if($contentType == 200){
              $res =  json_decode($response);
          }
          return $res;
    }

}
<?php
function monty_mobile($service_no, $sms_alert_data, $today_date){
    $ci = & get_instance();

   $message = $sms_alert_data['SMSMessage'];
    $recipients =   $sms_alert_data['MobileNo'];
    
    $message = urlencode($message);
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://httpsmsc05.montymobile.com/HTTP/api/Client/SendSMS?username=TAJBANKO&password=TA3BA5K@&destination='.$recipients.'&source=TAJBANK&text='.$message.'&dataCoding=0',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_SSL_VERIFYPEER=>0,
      CURLOPT_SSL_VERIFYHOST => false,
    ));

    $response = curl_exec($curl);
    $response_log =  json_encode($response);
    $response = json_decode($response, true);
  // for error// $responses = curl_error($curl);
  curl_close($curl);
  $message_log = $response_log.date('Y-m-d-H:i:s').'rw-'.$sms_alert_data['RowID'].'-serv_'.$service_no.PHP_EOL."-------------------------".PHP_EOL;
   file_put_contents('C:\xampp\htdocs\alertsender\log\log_'.date("j.n.Y").'.log', $message_log, FILE_APPEND);
   echo $message_log;

    $sms_alert_array[]  = array('phone' => $recipients,
                              'message' =>$message);
  $row_id = $sms_alert_data['RowID'];
   
   // retry service
    if($service_no =='retry'){
      // wait for response from gateway
        if(!empty($response)){
       if($response['ErrorCode']==0){
      $smsprocessed = 'E';
    }
    else {
      $smsprocessed = 'A'; 
    }
    $status = $response['ErrorDescription'];
    $ticketid = $response['SMS'][0]['Id'];

      $ci->Alertsend->retry_sms($row_id,  $status, $ticketid, $smsprocessed, $smsprocesseddate = date('Y-m-d H:i:s'), $today_date);
    }
  }

    // normal service
    else{
        if($response['ErrorCode']==0){
      $smsprocessed = 'E';
    }
    else {
      $smsprocessed = 'A'; 
    }
    $status = $response['ErrorDescription'];
    $ticketid = $response['SMS'][0]['Id'];

       // if($service_no > 10){
     $ci->Alertsend->insert_sms_picked_status($service_no, $row_id, $status, $ticketid, $smsprocessed, $smsprocesseddate = date('Y-m-d H:i:s'), $today_date, $recipients);
      // }
      // else{
    // $ci->Alertsend->update_sms_picked($service_no, $row_id, $status, $ticketid, $smsprocessed, $smsprocesseddate = date('Y-m-d H:i:s'), $today_date);
      // }
    // $ci->Alertsend->insert_sms_picked_status($service_no, $row_id, $status, $ticketid, $smsprocessed, $smsprocesseddate = date('Y-m-d H:i:s'), $today_date);
    // $this->Alertsend->update_sms_picked($service_no, $row_id, $status='', $ticketid='', $smsprocessed='', $smsprocesseddate = date('Y-m-d  H:i:s'));

    }
     
}
?>
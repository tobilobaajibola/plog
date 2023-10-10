<?php
/**
 * 
 */
class Emailalert extends CI_Model
{
	
	function fetch_emailalert($service_no, $today_date){
	$query   = $this->db->query("SELECT  *  FROM [ICBH_TransAlert].[dbo].[DEmailTransactions]   where EmailProcessed = 'D' and Email_Alert_flg = 'Y'  and Priority_flg = '$service_no' and PostedDate >= '$today_date'     ");
	return $query->result_array();
	}

	function  update_transation_status_remote_db($from_status, $to_status, $service_no){
	$update_transaction = $this->load->database('lv_oral', TRUE)->query("update tajaccount.bkeve_app_sms set status = $to_status, service_no = $service_no where status = $from_status and rownum < 100 ");
	
}
function update_email_pick($service_no, $emailpickedate, $today_date ){
	
	// in case of backlog allowturn on servicee to with service number greate than 10to clear logs faster while other services less than 10 are left  still run normally 
	if($service_no > 10){
		$pick_count = 500;
	}
	else{
		$pick_count = 100;
	}

	$this->db->query("update TOP ($pick_count) [ICBH_TransAlert].[dbo].[DEmailTransactions] set  EmailProcessed = 'D', Priority_flg = '$service_no',  PickedDate = '$emailpickedate'  where  Email_Alert_flg = 'Y' and EmailProcessed ='N' and  OVRRD ='A' 
		and Priority_flg = '0' and PostedDate >='$today_date'
 	and Email NOT LIKE '%noemail@taj%' 
	and Email NOT LIKE  '%noemail@tajbank%'
	and Email NOT LIKE '%non@non%'
	and Email NOT LIKE '%noemail@taj.com%'
	and Email NOT LIKE '%none@gmail%'
	and Email NOT LIKE '%nil@gmail%'
	and Email NOT LIKE '%taj.com%'
	and Email != ''
	and Email LIKE '%_@__%.__%' 
		   ");

	$this->db->close();
	}


	
// $this->db->query("update TOP ($pick_count) [ICBH_TransAlert].[dbo].[DEmailTransactions] set  EmailProcessed = 'D', Priority_flg = '$service_no',  PickedDate = '$emailpickedate'  where  Email_Alert_flg = 'Y' and EmailProcessed ='N' and OVRRD ='A' and Priority_flg = '0'   and Email = 'ajibolatobiloba@yahoo.com'  ");
// update after rows have been picked


function update_email_picked($service_no,  $status,  $emailprocessed, $emailprocesseddate, $picked_date){

	$this->db->query("update [ICBH_TransAlert].[dbo].[DEmailTransactions]
	 set
		status = '$status',
		EmailProcessed ='$emailprocessed',
		EmailProcessedDate = '$emailprocesseddate'
		where  PostedDate >='$picked_date' and Priority_flg = '$service_no' and  EmailProcessed = 'D'  ");

	$this->db->close();
}




function insert_email_picked_status($service_no, $RowID,  $status, $ticketid, $emailprocessed, $emailprocesseddate, $today_date, $email){


 $this->db->query("insert into [ICBH_TransAlert].[dbo].[DEmailTransactionsStatus] (RowID, TicketID, EmailProcessed, EmailProcessedDate, Priority_flg, EmailStatus, Email)
     VALUES ('$RowID', '$ticketid', '$emailprocessed', '$emailprocesseddate', '$service_no', '$status', '$email' )");

  // $this->load->database('local_mssql', TRUE)->query("insert into [ICBH_TransAlert].[dbo].[DTransactionsStatus] (RowID, TicketID, SMSProcessed, Priority_flg, SMSStatus)
  //    VALUES ( 1, '23fe', 'E', 2, 'sucess')");
}


function pick_failed_email(){
 $query   = $this->db->query("SELECT  TOP 20 s.RowID, d.EmailMessage, d.MobileNo, s.Emailstatus, s.TicketID, d.PostedDate
  FROM [ICBH_TransAlert].[dbo].[DTransactions]  d left join [ICBH_TransAlert].[dbo].[DTransactionsStatus] s
  ON d.[RowID] = s.[RowID]   where   d.EmailProcessed = 'A' and d.Email_Alert_flg = 'Y'  and d.PostedDate >= '2022-07-15' and OVRRD = 'A' and s.TicketID = '' and  d.[RowID]  NOT in (5433373, 5435842, 5436720, 5435751, 5436329, 5436530)");
return $query->result_array();
}
// to retry SMS that was't sent
function retry_email($row_id,  $status, $ticketid, $emailprocessed, $emailprocesseddate, $today_date){
		$this->db->query("update  [ICBH_TransAlert].[dbo].[DTransactionsStatus]
		 set
		status = '$status',
		TicketID = '$ticketid',
		EmailProcessed ='$emailprocessed',
		EmailProcessedDate = '$emailprocesseddate'
		where  SMSProcessedDate >='$today_date' and  RowID = '$row_id' ");
     	$this->db->close();
}


}
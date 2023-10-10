<?php 
class Alert extends CI_Model{



function fetch_alert(){
	$fetch_alert = $this->db->query("SELECT * from emailtrans");
	// $fetch_alert = $this->db->query("SELECT * from dtrans_sample");
	return $fetch_alert->result_array();
}

function update_email_pick($service_no){
	$this->db->limit(100, 0);
	$this->db->where('Status', '');
	$this->db->where('Priority_flg', 0);
	$this->db->update('DTransactions', array('Priority_flg'=>$service_no, 'status'=>4));
	}


// update after rows have been picked

function update_email_picked($service_no){
	$this->db->limit(100, 0);
	$this->db->where('Status', 4);
	$this->db->where('Priority_flg', $service_no);
	$this->db->update('DTransactions', $sms_picked_data);
	}






// update the status trigger transaction table 
function  update_transation_status_remote_db($from_status, $to_status, $service_no){
	$update_transaction = $this->load->database('lv_oral', TRUE)->query("update tajaccount.bkeve_app_sms set status = $to_status, service_no = $service_no where status = $from_status and rownum < 100 ");
	
}



function fetch_transaction_email_data_remote($service_no){
	// $fetch_transaction_email = $this->load->database('lv_oral', TRUE)->query(" SELECT * from tajaccount.bkeve_app_sms" );
	$fetch_transaction_email = $this->load->database('lv_oral', TRUE)->query(" SELECT a.ncp accountno,a.age sol_id,(SELECT nomrest FROM tajprod.bkcli w WHERE w.CLI = a.CLI)Acccountname,
(SELECT TRIM(cacc)FROM tajprod.bknom WHERE ctab = 2 AND mnt2 = a.dev)Currency,
mobileno, 
sms_alert_flg,
Email,
Email_Alert_Flg, 

dr_flg,cr_flg,dr_limit,cr_limit,(CASE WHEN mon2 = 0 THEN mon1 WHEN mon2 > 0 THEN mon2 END)tran_amt, (CASE WHEN TRIM(ncp1) = TRIM (d.accountno) THEN (b.sol1-b.mht1) WHEN TRIM(ncp2) = TRIM (d.accountno) THEN (b.sol2+b.mht2) END)
balance,'0.00' unclrbalance,(CASE WHEN TRIM(ncp1) = TRIM (d.accountno) THEN sen1 WHEN TRIM(ncp2) = TRIM (d.accountno) THEN b.sen2 END)Tran_Type, 
(CASE when (cli1! = ' ' AND cli2 != ' ')  then SUBSTR(b.NOM1,0,10)||' TO '||SUBSTR(b.NOM2,0,10)||'/'||b.LIB1
ELSE NVL (b.LIB1, 'No Narration') END) Narration, TO_CHAR (TO_TIMESTAMP ((dsai || ' ' || (hsai)), 'DD-MM-RRRR HH24:MI:SS.FF'),'DD-MON-RRRR HH24:MI:SS') AS posteddate,
b.eve tran_id,
TO_CHAR (TO_TIMESTAMP ((dsai || ' ' || (hsai)), 'DD-MM-RRRR HH24:MI:SS.FF'),'RRRRMMDDHH24MISSSS')AS marker

FROM tajaccount.bkeve_app_sms b, tajprod.bkcom a, tajsms.alertsetupicbh d
WHERE 
TRIM (d.accountno) = TRIM (a.ncp)
AND ((b.ncp2 = a.ncp) OR (b.ncp1 = a.ncp))
AND ((b.age2 = a.age) OR (b.age1 = a.age))
and b.ncp2 not in ('2040120001','2092210001')
AND b.eta in ('VA','VF','FO','AT')
-- AND b.dsai = trunc(SYSDATE)
-- and b.dsai > TO_TIMESTAMP ((hsai), 'HH24:MI:SS.FF')
-- AND d.email_alert_flg = 'Y'
AND d.status_flg = 'Y'
-- AND b.ope in ('555','554')
and b.nat not like 'AGE%'
and service_no = $service_no
and status = 4
");

return $fetch_transaction_email->result_array();

}



function push_transaction_data_local($transaction_datas){
if($transaction_datas['Email_Alert_Flg']=='Y'){
 $this->db->insert('emailtrans', $transaction_datas);
}
if($transaction_datas['SMS_Alert_Flg']=='Y'){
 $this->db->insert('smstrans', $transaction_datas);
}
}
}
?>
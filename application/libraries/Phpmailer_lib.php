<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PHPMailer Class
 *
 * This class enables SMTP email with PHPMailer
 *
 * @category    Libraries
 * @author      CodexWorld
 * @link        https://www.codexworld.com
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PHPMailer_Lib
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/PHPMailer/Exception.php';
        require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
        require_once APPPATH.'third_party/PHPMailer/SMTP.php';
        
        $mail = new PHPMailer;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->isSMTP();
        $mail->Host     = 'smtp.mailgun.org';
        $mail->SMTPAuth = true;
        $mail->Username = 'visitor@mail.vistacks.com';
        $mail->Password = '5d23c8ddf47932d98c0b1b986fe8b032-27a562f9-90ae8de9';
        $mail->SMTPSecure = 'TLS';
        $mail->Port     = 25;
        $mail->SMTPDebug = 0;
        $mail->WordWrap = 50; 



        // $mail = new PHPMailer;
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        // $mail->isSMTP();
        // $mail->Host     = 'vistacks.com';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'visitor@vistacks.com';
        // $mail->Password = 'F03*_O7,3lae';
        // $mail->SMTPSecure = 'ssl';
        // $mail->Port     = 465;
        // $mail->SMTPDebug = 2;
        // $mail->WordWrap = 50; 


        return $mail;


    }
}
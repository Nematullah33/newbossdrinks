<?php
//make an uploads folder at root directory
//call function as follows

	 /*
                // https://www.google.com/settings/security/lesssecureapps
                    An App Password is a 16-digit passcode that gives a non-Google app or device permission to access your Google Account. App Passwords can only be used with accounts that have 2-Step Verification turned on.
                    Create & use App Passwords
                    Note: If you use 2-Step-Verification and are seeing a "password incorrect" error when trying to access your Google Account, an App Password may solve the problem.

                    Go to your Google Account.
                    On the left navigation panel, choose Security.
                    On the "Signing in to Google" panel, choose App Passwords. If you don’t see this option:
                    2-Step Verification is not set up for your account.
                    2-Step Verification is set up for security keys only.
                    Your account is through work, school, or other organization.
                    You’ve turned on Advanced Protection for your account.
                    At the bottom, choose Select app and choose the app you’re using.
                    Choose Select device and choose the device you’re using.
                    Choose Generate.
                    Follow the instructions to enter the App Password. The App Password is the 16-character code in the yellow bar on your device.
                    Choose Done.
                   // Credentials
                    var credentials = new NetworkCredential("intels.co@gmail.com", "lpgekhzlvjvyfnzo");
                 */
     	   
//sendEmail("isl.towhid1@gmail.com","Verify your email","To active your account please click the following link<br>","big_fun.jpg");

function sendEmail($to = '', $subject  = '', $body = '', $attachment = '') {       
 
        
    //$CI->load->helper('path'); 
    // Configure email library
    $config = array();
    $config['userAgent']            = "CodeIgniter";
    //$config['mailpath']           = "\"G:\webserver\sendmail\sendmail.exe\" -t"; // or "/usr/sbin/sendmail"
    $config['protocol']             = "smtp";
    $config['SMTPHost']             = "smtp.gmail.com";
 	$config['SMTPPort'] 			= 465; 
	$config['SMTPTimeout'] 		   = 5;    
    $config['SMTPUser']            = "mdneamat81@gmail.com";
    $config['SMTPPass']            = "qzvryaloypeoibpv";
    
  // $config['smtp_from_name'] 		= 'VCampus';	
	$config['SMTPCrypto']          ="ssl";
	$config['wordWrap']             = TRUE;
	$config['wrapChars']            = 76;	
	$config['mailType']             = 'html';
	$config['charset']              = 'iso-8859-1';
	$config['validate']             = FALSE;
	$config['priority']             = 3;
	$config['CRLF']                 = "\r\n";
	$config['newline']              = "\r\n";
	$config['BCCBatchMode']       = FALSE;
	$config['BCCBatchSize'] = 200;
		
    $email = \Config\Services::email();
   
    $email->initialize($config); 
	
    $email->setNewline("\r\n");
    $email->setCrlf("\r\n");
	
    if($attachment != '')
    {
        $email->attach(base_url()."/public/uploads/img/" .$attachment);
    }

    $email->setFrom('vergeitltd.com','Neamat Ullah');    
    
    $email->setTo('<'.$to.'>');    
    $email->setSubject($subject);
    $email->setMessage($body);    


    if($email->send()){
        //$CI->session->set_flashdata('msg', 'Email sent correctly');
		echo "Mail have been sent successfully";
    }else{
        echo   $email->printDebugger();        
    }
} 
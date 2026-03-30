<?php

ob_start();
session_start();

if(isset($_POST['Submit'])){
	
$_SESSION['fname'] = $_POST['*First_Name'];
$_SESSION['lname'] = $_POST['*Last_Name'];
$_SESSION['company'] =  $_POST['Company_Name'];
$_SESSION['title'] = $_POST['Title'];
$_SESSION['address'] = $_POST['Mailing_Address'];
$_SESSION['email'] = trim($_POST['formmail_mail_email']); 
$_SESSION['fax'] = $_POST['Fax'];
$_SESSION['phone1'] = $_POST['Primary_Phone'];
$_SESSION['phone2'] = $_POST['Alternate_Phone'];
$_SESSION['comments'] = $_POST['Additional_Comments'];	

//Add server side validation
if ($_POST['*First_Name'] == ''){
	$errorMsg ="Please enter First Name <br/>";
}
if ($_POST['*Last_Name'] == ''){
	$errorMsg .="Please enter Last Name <br/>";
}
if ($_POST['formmail_mail_email'] == ''){
	$errorMsg .="Please enter Email <br/>";
}else {
$pat = 	'/^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-9-]+(\.[A-Za-z0-9-]+)*(\.[a-z]{2,3})/';
if ( !preg_match($pat, $_POST['formmail_mail_email'] ) ){
	$errorMsg .="Please enter Valid Email <br/>";
}
}
if ($_POST['check'] == ''){
	$errorMsg .="Please Give Answer for Security Questions <br/>";
}
$_SESSION['errmsg'] = $errorMsg;

if ($errorMsg != ''){
	header("Location:contactus.php?error=yes");
	exit();
}


/*echo "<pre>";
print_r($_REQUEST);exit;
*/
if($_REQUEST['1'] + $_REQUEST['2'] != $_REQUEST['check'])
{	
//	echo '<p style="color:#FF0000"><b>Capcha  not valid! Please try again!</b></p>';
	
	echo '<script type="text/javascript" language="javascript">
	location.href="http://www.anaheimbail-bonds.com/mobile/contactus.php?captcha=no";
	</script>';
	
}else
{


	$f_name=$_SESSION["fname"];
	$l_name=$_SESSION["lname"];
	$company=$_SESSION["company"];
	$title=$_SESSION["title"];
	$address=$_SESSION["address"];
	$email=$_SESSION["email"];
	$fax=$_SESSION["fax"];
	$p_phone=$_SESSION["phone1"];
	$a_phone=$_SESSION["phone2"];
	$comment=$_SESSION["comments"];



			/*$f_name = $_POST['*First_Name'];
			$l_name = $_POST['*Last_Name'];
			$company = $_POST['Company_Name'];
			$title = $_POST['Title'];
			$address = $_POST['Mailing_Address'];
			$email = trim($_POST['formmail_mail_email']); 
			$fax = $_POST['Fax'];
			$p_phone  = $_POST['Primary_Phone'];
			$a_phone =  $_POST['Alternate_Phone'];
			$comment = $_POST['Additional_Comments'];*/
			
			

    		$to = "bail@bailall.com"; // to address kjm@acsgrp.com
			//$to = "monica@aipl.com"; // to address kjm@acsgrp.com
			$bcc= "kjm@acsgrp.com"; // bcc address
    					
			$from = $email;
			$subject = "Moblie - New Inquiry - AnaheimBail-Bonds.com"; 
			
			$body = file_get_contents('contact-template.html');

			$body = str_replace("{F_NAME}",$f_name,$body);
			$body = str_replace("{L_NAME}",$l_name,$body);
			$body = str_replace("{EMAIL}",$email,$body);			
			$body = str_replace("{P_PHONE}",$p_phone,$body);
			$body = str_replace("{A_PHONE}",$a_phone,$body);
			
			$headers  = "From: $from\r\n";
    		$headers .= "Content-type: text/html\r\n"; 
            $headers .= 'Bcc:'.$bcc."\r\n";

			mail($to,$subject,$body,$headers);
			//header('Location:thank-you-contact.php');
			
			// clear the session data
			session_unset();
			
			header('Location:index.html');

}
}
else{ 
			header('Location:index.html');
}
?>
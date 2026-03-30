<? function sendMail($from, $to, $subject, $message, $cc="", $bcc="")
{	
	$hd = "From:". $from ."\r\nContent-type: text/html\r\n";
	$cc="ocbail1@pacbell.net";
	if($cc!="")
	{
		$hd = $hd.  "Cc:". $cc ."\r\n";
	}
	if($bcc!="")
	{
		$hd = $hd.  "Bcc:". $bcc ."\r\n";
	}	
	
	@mail($to,$subject,$message,$hd);
} 


ob_start();
session_start();

$_SESSION['fname'] = $_REQUEST['fname'];
$_SESSION['lname'] = $_REQUEST['lname'];
$_SESSION['company'] = $_REQUEST['company'];
$_SESSION['title'] = $_REQUEST['title'];
$_SESSION['address'] = $_REQUEST['address'];
$_SESSION['email'] = $_REQUEST['email'];
$_SESSION['fax'] = $_REQUEST['fax'];
$_SESSION['phone1'] = $_REQUEST['phone1'];
$_SESSION['phone2'] = $_REQUEST['phone2'];
$_SESSION['comments'] = $_REQUEST['comments'];


if($_REQUEST['1'] + $_REQUEST['2'] != $_REQUEST['check'])
{	
//	echo '<p style="color:#FF0000"><b>Capcha  not valid! Please try again!</b></p>';
	
	echo '<script type="text/javascript" language="javascript">
	location.href="contactus.php?captcha=no";
	</script>';
	
}else
{

	$First_Name=$_SESSION["fname"];
	$Last_Name=$_SESSION["lname"];
	$company=$_SESSION["company"];
	$title=$_SESSION["title"];
	$address=$_SESSION["address"];
	$email=$_SESSION["email"];
	$fax=$_SESSION["fax"];
	$phone1=$_SESSION["phone1"];
	$phone2=$_SESSION["phone2"];
	$comments=$_SESSION["comments"];
	
	
	//mail to admin 
	$subject="A new request from customer for contact - anaheimbail-bonds.com";	
	$mailbody = "Dear Administrator,<br>";
	$mailbody .= "A customer has request for contact. Details of customer are as follows.<br><br>";
	
	$mailbody.="<b><i>Details</i></b><br><table>";
	$mailbody.="<tr><td>First Name</td><td>:</td><td>" .$First_Name ."</td></tr>";
	$mailbody.="<tr><td>Last Name</td><td>:</td><td>" .$Last_Name ."</td></tr>";
	$mailbody.="<tr><td>Company</td><td>:</td><td>" .$company ."</td></tr>";
	$mailbody.="<tr><td>Title</td><td>:</td><td>" .$title ."</td></tr>";
	$mailbody.="<tr><td>Address</td><td>:</td><td>" .$address ."</td></tr>";
	$mailbody.="<tr><td>Email</td><td>:</td><td>" .$email ."</td></tr>";
	$mailbody.="<tr><td>Fax</td><td>:</td><td>" .$fax ."</td></tr>";
	$mailbody.="<tr><td>Primary Phone</td><td>:</td><td>" .$phone1 ."</td></tr>";
	$mailbody.="<tr><td>Alternate Phone</td><td>:</td><td>" .$phone2 ."</td></tr>";
	$mailbody.="<tr><td>Comments</td><td>:</td><td>" .$comments ."</td></tr>";
	
	$mailbody.="</table><br>Regards<br>";
	
	//print $mailbody;exit;
	
	sendMail($email,"bail@bailall.com",$subject,$mailbody);
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>

<body>
<script type="text/javascript" language="javascript">
	location.href="thanks.php";

</script>
</body>
</html>
<?php
}
?>

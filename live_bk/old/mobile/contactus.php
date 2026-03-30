<?php
ob_start();
session_start();

            $n1 = rand(0, 10);
			$n2 = rand(0, 10);
			
?>	
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Anaheim Bail Bonds Call Bail Bondsman </title>
<meta name="copyright" content="Copyright 2011 Anaheim Bail Bonds California" />
<meta name="description" content="Contact Anaheim Bail Bonds by using the form below or call us at (714) 772-2045.  We are open 24 hrs a day, 7 days a week, call anytime night or day." />
<meta name="keywords" content="contact Anaheim bail bonds, bail bonds mobile, Anaheim bail 24 hrs, Anaheim california bail, nb oc bail, mobile phone site Anaheim, orange county mobile bail, Anaheim mobile bail bondsman" />
<link href="css/m-bail-all.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Start Containor Here -->
<div id="containor">
    <!-- Start Header Here -->
    <div id="header">
    	<div align="right" class="topmenu"><a href="index.html">Mobile Home</a> | <a href="services.html">Services</a> | <a href="contactus.php">Contact us</a></div>
</div>
    <!-- End Header Here -->
    <!-- Start Content Here -->
    <div id="content">
        <div id="middle-content">
          <p class="costa">Anaheim</p>
          <p align="center"><span class="call-now"><a href="tel:(714) 772-2045"><b>(714) 772-2045<br />
            CLICK TO CALL NOW</b></a></p>
          <p class="bail-new">BAIL BONDS Anaheim </p>
        <!--  <p align="center"><strong>All other questions or comments, please use the contact form below: Thank You!</strong></p>
            
            <table border="0" name="" width="100%" cellpadding="5" cellspacing="0">
				<tr align="" valign="">
					<td colspan="1" rowspan="1" width="100%" align="" valign="top">
                    
						<FORM name=frm onsubmit="return validate(frm)" action="contact.php"  method="post">
           				<TABLE cellSpacing=0 cellPadding=0 width=100% border=0 class="from-main">

						<TR>
							<TD>&nbsp;</TD></TR>
						<TR>
							<TD><h2>Contact us</h2></TD>
                        </TR>
						<TR>
							<TD></TD>
                        </TR>
						<TR>
                            <TD>&nbsp;</TD>
                        </TR>
						<TR>
							<TD >Please fill in the form below to be contacted by an Anaheim Bail Bonds Representative.</TD>
                        </TR>
						<TR>
							<TD>&nbsp;</TD>
                        </TR>
                         <?php
		 if($_REQUEST['captcha'] == 'no')
			{
		 ?>	
          <tr>
            <td align="left" valign="top" class="blck_11">
            <?php
			
				echo '<p style="color:#FF0000" align="left"><b>Capcha  not valid! Please try again!</b></p>';
		
			?>
            </td>
          </tr>
          <?php } ?>
          <?php
		 if($_REQUEST['error'] == 'yes')
			{
		 ?>	
          <tr>
            <td align="left" valign="top" class="blck_11">
            <?php
			
				echo '<p style="color:#FF0000" align="left"><b>'.$_SESSION['errmsg'].'</b></p>';
			?>
            </td>
          </tr>
          <?php } ?>
						<TR>
							<TD>
								<TABLE cellSpacing=0 cellPadding=0 width="100%" border="0">
									
										<tr>
                                          <td width="39%"><div align="left">*First Name</div></td>
                                          <td width="61%"><INPUT name="*First Name" value="<?=$_SESSION['fname']?>"></td>
                                        </tr>
                                        <TR>
                                          <TD><DIV align=left>*Last Name</DIV></TD>
                                           <TD><INPUT name="*Last Name" value="<?=$_SESSION['lname']?>"></TD>
                                  </TR>
<TR>
  <TD>
    <DIV align=left></DIV></TD>
  <TD>&nbsp;</TD></TR>
<TR>
  <TD  >
    <DIV align=left>*Email Address</DIV></TD>
  <TD><INPUT name="formmail_mail_email" value="<?=$_SESSION['email']?>"></TD></TR>
<TR>
  <TD  >
    <DIV align=left>Primary Phone</DIV></TD>
  <TD><INPUT name="Primary Phone" value="<?=$_SESSION['phone1']?>"></TD></TR>
<TR>
  <TD  >
    <DIV align=left>Alternate Phone</DIV></TD>
  <TD><INPUT name="Alternate Phone" value="<?=$_SESSION['phone2']?>"></TD></TR>
<TR>
  <TD>&nbsp;</TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TD>
<DIV>*Security Question</DIV></TD>
 <td colSpan=3>What is : <?=$n1?> + <?=$n2?> = <br>
              <input type="text" name="check" /></td>
</TR>
<TR>
  <TD>&nbsp;</TD>
  <TD>&nbsp;</TD>
</TR>
<TR>
  <TD>&nbsp;</TD>
  <TD><INPUT type="submit" value="Submit" name="Submit" class="input-btn"> <INPUT type="reset" value="Clear" name="Submit" class="input-btn"> </TD>
  </TR></TBODY></TABLE></TD></TR></TBODY></TABLE>
  <input type="hidden" name="1" value=<?=$n1?> />
		  <input type="hidden" name="2" value=<?=$n2?> />
  </FORM>
  <?php
if (isset($_SESSION)){
	session_destroy();
}
?>
<SCRIPT language=javascript>
function validate(frm) {
 var inputFields = new Array("*First Name" ,"*Last Name" ,"formmail_mail_email","check");
 var counter;
 var name;
 var msg = "Please complete the following fields:\n";
 var badFields = "";
 for (counter = 0; counter < inputFields.length; counter++) {
  name = inputFields[counter];
  if (frm.elements[name].value.length == 0) {
   if (name == "formmail_mail_email") {
    badFields = badFields + "  - *Email Address \n";
   } else if (name == "check") {
    badFields = badFields + "  - *Security Question \n";
   } else {
    badFields = badFields + "  - " + name + "\n";
   }
  }
 }
 if (badFields.length != 0) {
  alert(msg + badFields);
  return false;
 }
 if (frm.formmail_mail_email.value.length > 0) {
  return emailCheck(frm.formmail_mail_email.value);
 } else {
  return true;
 }
}
function emailCheck(emailStr) {
 var emailPat=/^(.+)@(.+)$/;
 var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";
 var validChars="\[^\\s" + specialChars + "\]";
 var quotedUser="(\"[^\"]*\")";
 var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
 var atom=validChars + '+';
 var word="(" + atom + "|" + quotedUser + ")";
 var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
 var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
 var matchArray=emailStr.match(emailPat);
 if (matchArray==null) {
  alert("Email address seems incorrect (check @ and .'s)");
  return false;
 }
 var user=matchArray[1];
 var domain=matchArray[2];
 if (user.match(userPat)==null) {
      alert("The username doesn't seem to be valid.");
  return false;
 }
 var IPArray=domain.match(ipDomainPat);
 if (IPArray!=null) {
    for (var i=1;i<=4;i++) {
      if (IPArray[i]>255) {
          alert("Destination IP address is invalid!");
   return false;
       }
      }
      return true;
 }
 var domainArray=domain.match(domainPat);
 if (domainArray==null) {
  alert("The domain name doesn't seem to be valid.");
      return false;
 }
 var atomPat=new RegExp(atom,"g");
 var domArr=domain.match(atomPat);
 var len=domArr.length;
 if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>3) {
    alert("The address must end in a three-letter domain, or two letter country.");
     return false;
 }
 if (len<2) {
     var errStr="This address is missing a hostname!";
  alert(errStr);
    return false;
 }
  return true;
}
</SCRIPT><br>
</td>
</tr>
</table>-->
<div class="iframe-div">
		<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=200+S+Anaheim+Blvd,+Anaheim,+CA,+United+States&amp;aq=0&amp;oq=200+S.+Anaheim+Blvd.,+&amp;sll=33.533171,-117.775191&amp;sspn=0.038205,0.084028&amp;ie=UTF8&amp;hq=&amp;hnear=200+S+Anaheim+Blvd,+Anaheim,+Orange,+California+92805&amp;t=m&amp;ll=33.84055,-117.910852&amp;spn=0.024952,0.036564&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=200+S+Anaheim+Blvd,+Anaheim,+CA,+United+States&amp;aq=0&amp;oq=200+S.+Anaheim+Blvd.,+&amp;sll=33.533171,-117.775191&amp;sspn=0.038205,0.084028&amp;ie=UTF8&amp;hq=&amp;hnear=200+S+Anaheim+Blvd,+Anaheim,+Orange,+California+92805&amp;t=m&amp;ll=33.84055,-117.910852&amp;spn=0.024952,0.036564&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</div>

<div>
</div>
      </div>
    </div>
    <!-- End Content Here -->
    <div id="footer"><a href="index.html">Home</a>
    <p>Anaheim Bail Bonds Mobile Web Site&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.anaheimbail-bonds.com/index.php?mode=classic" class="blue1">Full Site</a></p></div>
</div>
<!-- End Containor Here -->
<!-- SEO Panda Tracker web tools statistics hit counter code -->
<SCRIPT id=wa_u type=text/javascript></SCRIPT>
<SCRIPT type=text/javascript>//<![CDATA[
// Begin Variable Declarations
wa_account="9D9E96939D90919B8CB0BC"; wa_location=111;
wa_pageName=location.pathname;  // you can customize the page name here
ec_ba_orderID='YOUR-UNIQUE-ID';           //  Enter your ba Item ID Here 
ec_ba_orderAmt='YOUR-ORDER-AMOUNT';         //  Enter the amount of the ba purchase Here 
// End Variable Declarations
document.cookie='__support_check=1';wa_hp='http';
wa_rf=document.referrer;wa_sr=window.location.search;
wa_tz=new Date();if(location.href.substr(0,6).toLowerCase()=='https:')
wa_hp='https';wa_data='&an='+escape(navigator.appName)+ 
'&sr='+escape(wa_sr)+'&ck='+document.cookie.length+
'&rf='+escape(wa_rf)+'&sl='+escape(navigator.systemLanguage)+
'&av='+escape(navigator.appVersion)+'&l='+escape(navigator.language)+
'&pf='+escape(navigator.platform)+'&pg='+escape(wa_pageName);
wa_data=wa_data+'&cd='+
screen.colorDepth+'&rs='+escape(screen.width+ ' x '+screen.height)+
'&tz='+wa_tz.getTimezoneOffset()+'&je='+ navigator.javaEnabled();
wa_img=new Image();wa_img.src=wa_hp+'://loc1.hitsprocessor.com/statistics.asp'+
'?v=1&s='+wa_location+'&eacct='+wa_account+wa_data+'&tks='+wa_tz.getTime()+
'&ec_type=124199&ec_uniqueId='+ec_ba_orderID+'&ec_orderAmount='+ec_ba_orderAmt;
document.getElementById('wa_u').src=wa_hp+'://loc1.hitsprocessor.com/track.js';
 //]]>
</SCRIPT>
<!-- End SEO Panda Tracker statistics web tools hit counter code -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8249652-1");
pageTracker._setCampSourceKey("source");
pageTracker._initData();
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
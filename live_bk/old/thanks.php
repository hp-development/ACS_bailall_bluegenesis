<?php
ob_start();
session_start();

$_SESSION['fname'] = '';
$_SESSION['lname'] = '';
$_SESSION['company'] = '';
$_SESSION['title'] = '';
$_SESSION['address'] = '';
$_SESSION['email'] = '';
$_SESSION['fax'] = '';
$_SESSION['phone1'] = '';
$_SESSION['phone2'] = '';
$_SESSION['comments'] = '';
$_SESSION['facility'] = '';




?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Orange County Bail Bonds</title>
<?php if(isset($_SESSION['mode']) && $_SESSION['mode'] == "classic") {} else { ?>
<script type="text/javascript" src="checkdevice.js" ></script>
<?php } ?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onLoad="MM_preloadImages('images/home_11.jpg','images/services_1.jpg','images/contactus_11.jpg','images/find_11.jpg')">
<table align="center" width="776" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
	<tr>
    	<td align="center"><img src="images/logo.jpg" border="0" alt="Orange County Bail Bonds"></td>
    </tr>
  <tr>
      <td align="center" valign="top">
      <h1>Bail Bonds in Anaheim</h1>      </td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
    </tr> 
    <tr>
    	<td align="left" valign="top" width="776">
       	  <table width="463" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td align="left" valign="top" width="69"><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Home','','images/home_11.jpg',1)"><img src="images/home_11.jpg" alt="Home" name="Home" width="69" height="32" border="0"></a></td>
                <td width="1"></td>
                <td align="left" valign="top" width="81"><a href="services.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Services','','images/services_11.jpg',1)"><img src="images/services_1.jpg" alt="Services" name="Services" width="81" height="32" border="0"></a></td>
                <td width="1"></td>
                <td align="left" valign="top" width="173"><a href="contactus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contactus','','images/contactus_11.jpg',1)"><img src="images/contactus_1.jpg" alt="Contact Us - Directions" name="contactus" width="173" height="32" border="0"></a></td>
                <td width="1"></td>
                <td align="left" valign="top" width="137"><a href="find_an_inmate.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('find','','images/find_11.jpg',1)"><img src="images/find_1.jpg" alt="Find an Inmate" name="find" width="137" height="32" border="0"></a></td>
              </tr>
          </table>
        </td>
    </tr>
    <tr>
    	<td align="center"><img src="images/hor_line.gif" border="0" alt="Orange County Bail Bonds"></td>
    </tr>
    <tr>
    	<td height="1"></td>
    </tr>
    <tr>
    	<td align="center" valign="top"><img src="images/header_1.jpg" border="0" alt="Orange County Bail Bonds"></td>
    </tr>
    <tr>
    	<td height="27"></td>
    </tr>
    <tr>
    	<td align="left" valign="top">
            <table width="725" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td align="center" valign="top" width="225">
                	<table width="225" border="0" cellspacing="0" cellpadding="0" align="center">
                      <tr>
                        <td align="center"><img src="images/call_now.jpg" border="0" alt="Orange County Bail Bonds"></td>
                      </tr>
                      <tr>
                      	<td height="16"></td>
                      </tr>
                      <tr>
                        <td align="center">&nbsp;</td>
                      </tr>
                      
                      
                      <tr>
                      	<td height="15"></td>
                      </tr>
                      <tr>
                      	<td height="6"></td>
                      </tr>
                    </table>
				</td>
                <td align="center" width="25">&nbsp;</td>
                <td align="center" valign="top" width="475" class="blck_11"><table width="475" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="35" align="left" valign="top" class="orng_18">Thank You</td>
                    </tr>
                    
                    <tr>
                      <td height="35" align="left" class="blck_11" valign="top">Your message has been sent and an Orange County Bail Bonds representative will get back to you immediately. </td>
                    </tr>
                    <tr>
                      <td height="8"></td>
                    </tr>
                    <tr>
                      <td height="16"align="left" class="gray_14">For faster service please call <span class="gray_18"><strong>714-772-2045</strong></span></td>
                    </tr>
                </table>
				</td>
              </tr>
            </table>
		</td>
    </tr>
	<tr>
     <td height="47"></td>
    </tr>
    <tr>
     <td align="center"><img src="images/hor_line.gif" border="0" alt="Orange County Bail Bonds"></td>
    </tr>
    <tr>
    	<td align="center">
        <table width="721" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="middle" height="38" class="brwn_11_footer"><a href="index.html" class="brwn_11_footer">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="services.html" class="brwn_11_footer">Services</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" class="brwn_11_footer">Contact Us - Directions</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href="find_an_inmate.php" class="brwn_11_footer">Find an Inmate</a></td>
            <td align="right" valign="middle" height="38" class="brwn_11_footer">© 2008. <strong>Orange Country Bail Bonds</strong></td>
          </tr>
        </table>
		</td>
    </tr>
</table>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6715399-3");
pageTracker._trackPageview();
} catch(err) {}</script>
	
<!-- SEO Panda Tracker web tools statistics hit counter code -->
<script type="text/javascript" id="wa_u"></script>
<script type="text/javascript">//<![CDATA[
// Begin Variable Declarations
wa_account="9D9E96939D90919B8CB0BC"; wa_location=111;
wa_pageName=location.pathname;  // you can customize the page name here
ec_anT_orderID='YOUR-UNIQUE-ID';	//  Enter your anT Item ID Here 
ec_anT_orderAmt='YOUR-ORDER-AMOUNT';	//  Enter the amount of the anT purchase Here 
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
'&ec_type=114277&ec_uniqueId='+ec_anT_orderID+'&ec_orderAmount='+ec_anT_orderAmt;
document.getElementById('wa_u').src=wa_hp+'://loc1.hitsprocessor.com/track.js';
 //]]>
</script>
<!-- End SEO Panda Tracker statistics web tools hit counter code -->

</body>
</html>

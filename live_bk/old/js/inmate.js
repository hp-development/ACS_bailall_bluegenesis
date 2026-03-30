function isEmail(str) 
{
  // are regular expressions supported?
  var supported = 0;
  if (window.RegExp) {
	var tempStr = "a";
	var tempReg = new RegExp(tempStr);
	if (tempReg.test(tempStr)) supported = 1;
  }
  if (!supported) 
	return (str.indexOf(".") > 2) && (str.indexOf("@") > 0);
	  var r1 = new RegExp("(@.*@)|(\\.\\.)|(@\\.)|(^\\.)");
	  var r2 = new RegExp("^.+\\@(\\[?)[a-zA-Z0-9\\-\\.]+\\.([a-zA-Z]{2,3}|[0-9]{1,3})(\\]?)$");
	  return (!r1.test(str) && r2.test(str));
}

function trim(tmp)
{
	var temp;
	temp = tmp;
	//tmp = "      this is test     ";
	pat = /^\s+/;
	temp = temp.replace(pat, "");
	pat = /\s+$/;
	temp = temp.replace(pat, "");
	//alert(":" + tmp + ":");
	return temp;
}
function validate(frm)
{		
		if(trim(frm.fname.value).length==0)
		{
			frm.fname.focus();
			alert("Please enter first name.");
			return false;
		}
		if(trim(frm.lname.value).length==0)
		{
			frm.lname.focus();
			alert("Please enter last name.");
			return false;
		}
		
		if(trim(frm.email.value).length==0)
		{
			frm.email.focus();
			alert("Please enter email.");
			return false;
		}
		
		if(!isEmail(trim(frm.email.value)))
		{
			alert("Please enter valid email.");
			frm.email.focus();
			return false;
		}
		
		if(trim(frm.check.value).length==0)
		{
		alert("Please enter your Capcha Code");
		frm.check.focus();
		return false;
		}
		
		return true;
}
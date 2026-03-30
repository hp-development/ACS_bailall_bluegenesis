var http = false;
if(navigator.appName == "Microsoft Internet Explorer") {
  http = new ActiveXObject("Microsoft.XMLHTTP");
} else {
  http = new XMLHttpRequest();
}
http.open("GET", "http://www.anaheimbail-bonds.com/checkdevice.php");
http.onreadystatechange=function() {
  if(http.readyState == 4) {
    //alert(http.responseText);
    if (http.responseText == 'yes'){
		window.location.href = 'http://www.anaheimbail-bonds.com/mobile/';
    }
  }
}
http.send(null);
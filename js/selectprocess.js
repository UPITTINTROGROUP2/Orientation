var xmlHttp;

 //$(document).ready(
function changeProcess(username,todoid)
{
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request");
        return;
    }
    var url="getProcess.php";
    url=url+"?email="+username;
    url=url+"&todoid="+todoid;
    //alert (url);
    xmlHttp.onreadystatechange=getProcess;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}//)


function getProcess() 
{ 
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        //document.getElementById("result").innerHTML = xmlHttp.responseText;
    }
}

function GetXmlHttpObject()
{
    var xmlHttp=null;
    try
     {
     // Firefox, Opera 8.0+, Safari
     xmlHttp=new XMLHttpRequest();
     }
    catch (e)
     {
     //Internet Explorer
     try
      {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
      }
     catch (e)
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
     }
    return xmlHttp;
}


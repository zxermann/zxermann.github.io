<!DOCTYPE html>
<html>
<body>

<?php
$firstname=$_GET["name"];
$age=$_GET["age"];
$mobile=$_GET["mobile"];
$whatsapp=$_GET["whatsapp"];
$email=$_GET["email"];
$occup=$_GET["occup"];
$hobb=$_GET["hobb"];
$sta=$_GET["sta"];
$back=$_GET["back"];
$list=$_GET["list"];
$how=$_GET["how"];
$why=$_GET["why"];
$what=$_GET["what"];
$goals=$_GET["goals"];
$wish=$_GET["wish"];

mysql_connect("localhost:99","dexteruser","password1$");
mysql_select_db("dexter");
mysql_query("insert into registration values('$firstname','$age','$mobile','$whatsapp','$email','$occup','$hobb','$sta','$back','$list','$how','$why','$what','$goals','$wish')");

?>

</body>
</html>
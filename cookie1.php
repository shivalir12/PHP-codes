<?php
$cookie_name="user";
$cookie_name="Shiv";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie named"'.$cookie_name.' "is not sent!";
}
else
{
	echo "Cookie"'.$cookie_name.'"is set up.<br>";
	echo "Value is".$_COOKIE[$cookie_name];
}
?>
</body>
</html>


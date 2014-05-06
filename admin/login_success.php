// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
<?php
session_start();
if( isset($_SESSION[$myusername]) ){
header("location:main_login.php");
}
?>

<html>
<body>
<meta http-equiv="refresh" content="0; url=/intse/sindex.php" />
</body>
</html>
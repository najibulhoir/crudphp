
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<p> Anda melihat halamin ini karena anda sudah LOGOUT.
	silahkan klik <a href="login.php">link</a> berikut untuk login</p>

</body>
</html> 
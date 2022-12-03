<?php include 'config.php'; 
?>
<?php
$_SESSION = [];
session_unset(); 
session_destroy();
header('Location: login.php');
exit;

?>


<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['data']);
unset($_SESSION['user_id']);

echo '<script>window.location.href="../../Home.php"</script>';

?>
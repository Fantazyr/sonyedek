<?php


session_start();
unset($_SESSION['alogin']);
header('Location: /admin/login');
exit();







?>
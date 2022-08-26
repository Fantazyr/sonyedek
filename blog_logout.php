<?php


session_start();
#unset($_SESSION['role']);
unset($_SESSION['blogin']);
header('Location: /User');
exit();






?>
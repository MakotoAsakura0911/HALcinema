<?php
session_start();

session_unset();
header('Location: http://localhost:1024/original/');
exit();
?>
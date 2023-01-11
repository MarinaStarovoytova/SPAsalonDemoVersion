<?php

$userName = $_COOKIE['user'] ?? null;

if ($userName != null) {
    header ('Location: index.php');
} else {
    header ('Location: login.php');
}

?>
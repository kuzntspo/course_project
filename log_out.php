<?php
session_start();
unset($_SESSION['user']);
header('Location: log_in_page.php');
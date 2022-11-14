<?php
$users = [
    "admin" => "12345"
];
if( empty(session_id()) && !headers_sent()){
    session_start();
}
if (isset($_POST['user']) && !isset($_SESSION['user'])) {
    if ($users[$_POST['user']] == $_POST['password']) {
        $_SESSION['user'] = $_POST['user'];
    }
    if(!isset($_SESSION['user'])) {$failed = true;}
}
if (isset($_SESSION['user'])) {
header("Location: admin_page.php");
exit();
}?>
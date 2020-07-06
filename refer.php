<?php
// Store referer
$referer = @$_SERVER['HTTP_REFERER'];

$remoteAddr = $_SERVER['REMOTE_ADDR'];
$myIPs = array();
if (!in_array($remoteAddr, $myIPs)) {
  file_put_contents("/var/www/html/consonica/referer.html", date("Y-m-d H:i:s").": ".$remoteAddr." ".@$query." ".$referer."<br/>\n", FILE_APPEND);
}
?>
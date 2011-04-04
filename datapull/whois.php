<?php 
//error_reporting(0);
$domain = urlencode($_GET['domain']);
$domain = str_replace('whois','',$domain);
$domain = str_replace('+',' ',$domain);
$domain = str_replace(' ','',$domain);
$domain = str_replace('www.','',$domain);
$domain = str_replace('http://','',$domain);
$domain = str_replace('https://','',$domain);
$domain = str_replace('%20',' ',$domain);

$result = shell_exec("whois ".$domain);

echo '<textarea id="ta" readonly="true">';
print_r($result);
echo '</textarea>';

?>
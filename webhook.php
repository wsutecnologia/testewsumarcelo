<?php

$event = $_SERVER['HTTP_X_GITHUB_EVENT'];
file_put_contents('/var/www/html/teste/testewsumarcelo/push.log', $data, FILE_APPEND);

#$payload = $_POST['payload'];
#$all = "";
#foreach ($_POST as $key => $value) {
#  $all = $key.":".$value.", ";
#}

#$data = $event."  ".$payload."  ".$all;
#file_put_contents('/var/www/html/teste/testewsumarcelo/push.log', $data, FILE_APPEND);

#if ( $_POST['payload'] ) {
 # shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull' );
#}

?>

<?php

$event = $_SERVER['HTTP_X_GITHUB_EVENT'];
file_put_contents('/var/www/html/teste/testewsumarcelo/push.log', $event.PHP_EOL, FILE_APPEND);

#$payload = $_POST['payload'];
file_put_contents('/var/www/html/teste/testewsumarcelo/push.log', $payload.PHP_EOL, FILE_APPEND);

$data = "";
foreach ($_POST as $key => $value) {
  $data = $key.":".$value.", ";
}

file_put_contents('/var/www/html/teste/testewsumarcelo/push.log', $data.PHP_EOL, FILE_APPEND);

if ( $_POST['payload'] && $_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'su www-data -s /bin/sh -c cd /var/www/html/teste/testewsumarcelo/ && su www-data -s /bin/sh -c git reset --hard HEAD && su www-data -s /bin/sh -c git config core.sshCommand "ssh -i /home/acheiusa/.ssh/id_rsa -F /dev/null" && su www-data -s /bin/sh -c git pull' );
}

?>

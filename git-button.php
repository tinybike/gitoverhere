<?php
$cmd = escapeshellcmd('git pull origin master');
$output = NULL;
exec($cmd, $output);
foreach ($output as $row) {
	echo $row . '<br/>';
}
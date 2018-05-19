<?php
include_once('functions.php');

$functions = new HelloWrapper();

if ($functions->isActivated !== true) {
	$functions->learnAi();

	die('Fatal error');
}
if ($functions->sayHello() == 'hello') {
	echo $functions->sayHello();
}
else {
	shell_exec('touch .CODERED');
	die('Kill switch');
}
?>

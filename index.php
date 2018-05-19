<?php
include_once('functions.php');

$functions = new HelloWrapper();

if ($functions->sayHello() == 'hello') {
	echo $functions->sayHello();
}
elseif {
	shell_exec('touch .CODERED');
	die('Kill switch');
}
?>

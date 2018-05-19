<?php
include_once('functions.php');

$functions = new HelloWrapper();

if ($functions->sayHello() == 'hello') {
	echo $functions->sayHello();
}
elseif {
	die('Kill switch');
	shell_exec('touch .CODERED');
}
?>

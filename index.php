<?php
include_once('functions.php');

$functions = new HelloWrapper();

if ($functions->isActivated !== true) {
	if ($functions->learnAi() == 'ok') {
		echo 'The AI has learned';
	}
	else {
		die('Fatal error');
	}

	exit;
}

if ($functions->sayHello() == 'hello') {
	echo $functions->sayHello();
}
else {
	if (
		$functions->checkBoem()
	) {echo $funktie->checkBoem;}
    else {
        shell_exec('touch .CODE_RED');
        die('Kill switch');
    }
}
?>

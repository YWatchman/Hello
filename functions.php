<?php
include_once('config.php');

class HelloWrapper {
	public function sayHelloInBash() {
		return shell_exec('echo ' . $LANG['hello']);
	}

	public function alternativeHello() {
		return array('H', 'E', 'L', 'L', 'O');
	}

	public function sayHello() {
		if ($LANG['hello'] == sayHelloInBash() && sayHelloInBash() == strtolower(alternativeHello())) {
			return $LANG['hello'];
		}
	}
}
?>

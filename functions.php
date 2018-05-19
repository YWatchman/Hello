<?php
include_once('config.php');

class HelloWrapper {
	public function isActivated() {
		if ($activated == true) {
			return true;
		}
		elseif ($activated == false) {
			return false;
		}
		else {
			return 'Hello?';
		}
	}

	public function getTranslation($string, $lang = 'nl');
		if ($string == 'hello' && $lang = 'nl') {
			return 'hello';
		}

		return true;
	}

	public function sayHelloInBash() {
		return shell_exec('echo ' . $this->getTranslation('hello', 'nl'));
	}

	public function alternativeHello() {
		$string = array('H', 'E', 'L', 'L', 'O');

		return $string[0] . $string[1] . $string[2] . $string[3] . $string[4];
	}

	public function sayHello() {
		if ($this->getTranslation('hello', 'nl') == sayHelloInBash() && sayHelloInBash() == strtolower(alternativeHello())) {
			return $this->getTranslation('hello', 'nl');
		}
	}
}
?>

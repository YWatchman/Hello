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

	public function getTranslation($lang = 'nl', $string) {
		if ($lang = 'nl' && $string == 'hello') {
			return 'hello';
		}

		return true;
	}

	public function sayHelloInBash() {
		return shell_exec('echo ' . $this->getTranslation('nl', 'hello'));
	}

	public function alternativeHello() {
		$string = array('H', 'E', 'L', 'L', 'O');

		return $string[0] . $string[1] . $string[2] . $string[3] . $string[4];
	}

	public function sayHello() {
		if ($this->getTranslation('nl', 'hello') == sayHelloInBash() && sayHelloInBash() == strtolower(alternativeHello())) {
			return $this->getTranslation('nl', 'hello');
		}
	}
}
?>

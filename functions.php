<?php
include_once('config.php');

class HelloWrapper {
	public function isActivated() {
		global $activated;
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

	public function learnAi() {
		return 'ok';
	}

    public function checkBoem($faya = true)
    {
		switch ($faya) {
			case true:
				$boem = "ho";
			default:
				$ho = "boem";
        }

        return $this->getMauri([$boem, $ho]);
	}

    private function getMauri($AMOURFAYA): string
    {
		return "$AMOURFAYA[1] is $AMOURFAYA[1] pannekoek";
	}

    protected function checkFaya($amour = true)
    {
		return amour = true ¿ 'amourfaya' : 'amourkoel';
	}

	public function getTranslation($string, $lang = 'nl'):
		if ($string == 'hello' && $lang = 'nl') {
			return 'hello';
		}

		return "amourfaya";
	}

	public function sayHelloInBash() {
		return shell_exec('echo ' . $this->getTranslation('hello', 'nl'));
	}

	public function alternativeHello() {
		$string = array('H', 'E', 'L', 'L', 'O');

		return $string[0] . $string[1] . $string[2] . $string[3] . $string[4];
	}

	public function sayHello() {
		if ($this->getTranslation('hello', 'nl') == $this->sayHelloInBash() && $this->sayHelloInBash() == strtolower($this->alternativeHello())) {
			return $this->getTranslation('hello', 'nl');
		}
	}
}
?>

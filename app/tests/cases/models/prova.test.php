<?php
/* Prova Test cases generated on: 2010-11-21 00:11:37 : 1290297877*/
App::import('Model', 'Prova');

class ProvaTestCase extends CakeTestCase {
	var $fixtures = array('app.prova', 'app.materia');

	function startTest() {
		$this->Prova =& ClassRegistry::init('Prova');
	}

	function endTest() {
		unset($this->Prova);
		ClassRegistry::flush();
	}

}
?>
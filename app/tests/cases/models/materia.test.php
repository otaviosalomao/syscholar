<?php
/* Materia Test cases generated on: 2010-11-21 00:11:11 : 1290297791*/
App::import('Model', 'Materia');

class MateriaTestCase extends CakeTestCase {
	var $fixtures = array('app.materia');

	function startTest() {
		$this->Materia =& ClassRegistry::init('Materia');
	}

	function endTest() {
		unset($this->Materia);
		ClassRegistry::flush();
	}

}
?>
<?php
/* Provas Test cases generated on: 2010-11-21 00:11:05 : 1290298025*/
App::import('Controller', 'Provas');

class TestProvasController extends ProvasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProvasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.prova', 'app.materia');

	function startTest() {
		$this->Provas =& new TestProvasController();
		$this->Provas->constructClasses();
	}

	function endTest() {
		unset($this->Provas);
		ClassRegistry::flush();
	}

}
?>
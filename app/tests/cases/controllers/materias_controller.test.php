<?php
/* Materias Test cases generated on: 2010-11-21 00:11:44 : 1290298004*/
App::import('Controller', 'Materias');

class TestMateriasController extends MateriasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MateriasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.materia');

	function startTest() {
		$this->Materias =& new TestMateriasController();
		$this->Materias->constructClasses();
	}

	function endTest() {
		unset($this->Materias);
		ClassRegistry::flush();
	}

}
?>
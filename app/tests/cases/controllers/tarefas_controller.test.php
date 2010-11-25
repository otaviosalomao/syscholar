<?php
/* Tarefas Test cases generated on: 2010-11-21 00:11:12 : 1290298032*/
App::import('Controller', 'Tarefas');

class TestTarefasController extends TarefasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TarefasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tarefa');

	function startTest() {
		$this->Tarefas =& new TestTarefasController();
		$this->Tarefas->constructClasses();
	}

	function endTest() {
		unset($this->Tarefas);
		ClassRegistry::flush();
	}

}
?>
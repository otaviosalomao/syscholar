<?php
/* Tarefa Test cases generated on: 2010-11-21 00:11:04 : 1290297904*/
App::import('Model', 'Tarefa');

class TarefaTestCase extends CakeTestCase {
	var $fixtures = array('app.tarefa');

	function startTest() {
		$this->Tarefa =& ClassRegistry::init('Tarefa');
	}

	function endTest() {
		unset($this->Tarefa);
		ClassRegistry::flush();
	}

}
?>
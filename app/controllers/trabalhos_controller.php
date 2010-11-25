<?php
class TrabalhosController extends AppController {

	var $name = 'Trabalhos';
        var $helpers = array('Javascript');
	
	function cadastrar($id=null) {
		if(!empty($this->data)) {
			if($this->Materia->save($this->data))
				$this->Session->setFlash("Materia cadastrada com sucesso!");
				
		}
	}

        function index() {
            
        }

}
?>
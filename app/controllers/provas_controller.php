<?php
class ProvasController extends AppController {

	var $name = 'Provas';
        var $helpers = array('Javascript', 'Paginas');

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
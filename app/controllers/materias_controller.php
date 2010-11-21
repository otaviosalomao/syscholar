<?php
class MateriasController extends AppController {

	var $name = 'Materias';
	
	function cadastrarMateria($id=null) {
		if(!empty($this->data)) {
			if($this->Materia->save($this->data))
				$this->Session->setFlash("Materia cadastrada com sucesso!");
				
		}
	}

}
?>
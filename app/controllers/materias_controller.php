<?php

class MateriasController extends AppController {

    var $name = 'Materias';
    var $helpers = array('Javascript', 'Paginator', 'Paginas', 'Session');

    function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();        
    }

    function cadastrar($id=null) {
        if (!empty($this->data)) {            
            if ($this->Materia->save($this->data))
                $this->Session->setFlash("Materia cadastrada com sucesso!");
                $this->redirect(array('controller'=>'materias', 'action'=>'index'));
        }
    }

    function index() {
        $materias = $this->Materia->find('all');
        $this->set('materias', $materias);
    }

    function excluir($id) {
        $this->autoRender = null;
        $this->Materia->id = $id;
        if($this->Materia->delete()) {
            $this->Session->setFlash("Materia excluida com sucesso!");
            $this->redirect(array('controller'=>'materias', 'action'=>'index'));
        }
    }

    function editar($id) {
        $materia = $this->Materia->findById($id);
        $this->data = $materia;
    }

}

?>
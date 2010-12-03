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
            $this->data['Materia']['user_id'] = $this->Session->read('Auth.User.id');
            if ($this->Materia->save($this->data))
                $this->Session->setFlash("Materia cadastrada com sucesso!");
                $this->redirect(array('controller'=>'materias', 'action'=>'index'));
        }
    }

    function index() {
        $materias = $this->Materia->find('all',array('conditions'=> array('Materia.user_id'=> $this->Session->read('Auth.User.id'))));
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
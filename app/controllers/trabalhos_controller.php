<?php

class TrabalhosController extends AppController {

    var $name = 'Trabalhos';
    var $helpers = array('Javascript');

    function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();
    }

    function cadastrar($id=null) {
        if (!empty($this->data)) {
            $this->loadModel('Materia');
            $materia = $this->Materia->findByNome($this->data['Trabalho']['materia']);
            if (!empty($materia)) {
                $this->data['Trabalho']['user_id'] = $this->Session->read('Auth.User.id');
                $this->data['Trabalho']['materia_id'] = $materia['Materia']['id'];
                $this->data['Trabalho']['data'] = $this->converteData($this->data['Trabalho']['data']);
                if ($this->Trabalho->save($this->data))
                    $this->Session->setFlash("Trabalho cadastrada com sucesso!");
                $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
            }
        }
    }

    function index() {
        $trabalhos = $this->Trabalho->find('all', array('conditions' => array('Trabalho.user_id' => $this->Session->read('Auth.User.id'))));
        $this->set('trabalhos', $trabalhos);
    }

    function excluir($id) {
        $this->autoRender = null;
        $this->Trabalho->id = $id;
        if ($this->Trabalho->delete()) {
            $this->Session->setFlash("Trabalho excluido com sucesso!");
            $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
        }        
    }

    function editar($id) {
        $trabalho = $this->Trabalho->findById($id);
        $this->data = $trabalho;
        $this->loadModel('Materia');
        $materia = $this->Materia->findById($trabalho['Trabalho']['materia_id']);
        $this->data['Trabalho']['materia'] = $materia['Materia']['nome'];
        $this->data['Trabalho']['data'] = date('d/m/Y', strtotime($trabalho['Trabalho']['data']));        
    }

}

?>
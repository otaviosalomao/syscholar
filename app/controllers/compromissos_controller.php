<?php

class CompromissosController extends AppController {

    var $name = 'Compromissos';
    var $helpers = array('Javascript');

    function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();
    }

    function cadastrar($id=null) {
        if (!empty($this->data)) {
            $this->data['Compromisso']['user_id'] = $this->Session->read('Auth.User.id');
            $this->data['Compromisso']['data'] = $this->converteData($this->data['Compromisso']['data']) . ' ' . $this->data['Compromisso']['horario'] . ':00';
            if ($this->Compromisso->save($this->data))
                $this->Session->setFlash("Compromisso cadastrado com sucesso!");
            $this->redirect(array('controller' => 'compromissos', 'action' => 'index'));
        }
    }

    function index() {
        $compromissos = $this->Compromisso->find('all', array('conditions' => array('Compromisso.user_id' => $this->Session->read('Auth.User.id'))));
        $this->set('compromissos', $compromissos);
    }

    function excluir($id) {
        $this->autoRender = null;
        $this->Compromisso->id = $id;
        if ($this->Compromisso->delete()) {
            $this->Session->setFlash("Compromisso excluido com sucesso!");
            $this->redirect(array('controller' => 'compromissos', 'action' => 'index'));
        }
    }

      function editar($id) {
            $compromisso = $this->Compromisso->findById($id);
            $this->data = $compromisso;
            $this->data['Compromisso']['data']= date('d/m/Y', strtotime($compromisso['Compromisso']['data']));
            $this->data['Compromisso']['horario']= date('H:i', strtotime($compromisso['Compromisso']['data']));

        }

        function view($id) {
            $compromisso = $this->Compromisso->findById($id);
            $this->set('compromisso', $compromisso);
        }

}

?>
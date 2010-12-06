<?php
class CalendarioController extends AppController {

    var $name = 'Calendario';
    var $helpers = array('Javascript');
    var $uses = array('Trabalho', 'Compromisso');

      function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();
    }


    function cadastrar($id=null) {
        if(!empty($this->data)) {
            if($this->Materia->save($this->data))
                $this->Session->setFlash("Arquivo cadastrado com sucesso!");
        }
    }

    function index() {
//        $compromissos = $this->Compromisso->find('all', array('conditions' => array('Compromisso.user_id' => $this->Session->read('Auth.User.id'))));
//        $this->set('compromissos', $compromissos);
//        $avaliacoes = $this->Avaliacao->find('all', array('conditions' => array('Avaliacao.user_id' => $this->Session->read('Auth.User.id'))));
//        $this->set('avaliacoes', $avaliacoes);
          $this->loadModel('User');
          $usuario = $this->User->findById($this->Session->read('Auth.User.id'));
          $this->set('usuario', $usuario);
    }
}
?>
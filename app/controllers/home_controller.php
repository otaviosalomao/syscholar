<?php
class HomeController extends AppController {

    var $components = array('Auth','Acl');
    var $helpers = array('Form', 'Javascript', 'Session');
    var $name = 'Home';
    var $uses = null;

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

    function index() {
        $this->Session = new SessionComponent();        
        $this->layout= 'default';
        $this->loadModel('Avaliacao');
        $this->loadModel('Compromisso');
        $usuario = $this->Session->read('Auth.User');
        $this->set('avaliacoes', $avaliacoes = $this->Avaliacao->find('all',
                array('conditions'=>array('Avaliacao.data >' =>date('Y/m/d'),
                    'Avaliacao.user_id'=>$usuario['id']), 'limit'=> '5')));
        $this->set('compromissos', $compromissos = $this->Compromisso->find('all',
                array('conditions'=>array('Compromisso.data >' => date('Y/m/d'),
                    'Compromisso.user_id'=>$usuario['id']), 'limit'=> '5')));

    }

}
?>
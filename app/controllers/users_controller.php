<?php
class UsersController extends AppController {

    var $name = 'Users';
    var $components = array('Auth', 'Acl');
    var $helpers = array('Html', 'Form', 'Session', 'Javascript');

    function beforeFilter() {
        $this->_autenticacao();
        parent::beforeFilter();        
        $this->Auth->allow('login', 'cadastrar', 'logout');        
    }

    function login() {        
        $this->layout = 'default';
    }

    function logout() {        
        $this->Auth->logout();
        $this->redirect('/home');
    }

    function cadastrar() {
        $this->Session = new SessionComponent();
        if(!empty($this->data)) {            
            $this->data['User']['group_id'] = 2;
            $this->data['User']['data_nascimento'] = date('Y-m-d', strtotime($this->converteData($this->data['User']['data_nascimento'])));            
            if($this->User->save($this->data)) {
                $this->Session->setFlash("Cadastro realizado com sucesso");
                $this->Auth->login($this->data);
                $this->redirect($this->Auth->redirect());
            }
            else
                $this->Session->setFlash("Cadastro não realizado");
        }               
    }

    function editar($id) {
        $usuario = $this->User->findById($id);
        if(!empty($usuario)) {
            $this->data = $usuario;
            $this->data['User']['data_nascimento']= date('d/m/Y', strtotime($usuario['User']['data_nascimento']));
        }
    }

}
?>
<?php
class UsersController extends AppController {

    var $name = 'Users';
    var $components = array('Auth', 'Acl');

    function beforeFilter() {
        $this->_autenticacao();
        parent::beforeFilter();
        parent::beforeFilter();
        $this->Auth->allowedActions = array('login', 'cadastrar', 'logout');
        $this->Session= new SessionComponent();
    }

    function login() {
        $this->layout = '_login';
    }

    function logout() {        
        $this->Auth->logout();
        $this->redirect('/home');
    }

    function cadastrar() {              
        if(!empty($this->data)) {
            $senha = $this->User->gerarSenha();
            $this->data['User']['senha'] = $senha['User']['senha'];
            $this->data['User']['confirmar_senha'] = $senha['User']['confirmar_senha'];
            $this->data['User']['group_id'] = 2;
            if($this->User->save($this->data)) {
                $this->Session->setFlash("Cadastro realizado com sucesso");
                $this->Auth->login($this->data);
                $this->redirect($this->Auth->redirect());
            }

            else
                $this->Session->setFlash("Cadastro não realizado");
        }
        $this->Session->setFlash("senha incorreta!");

    }

}
?>
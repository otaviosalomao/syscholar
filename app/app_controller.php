<?php
class AppController extends Controller {
    var $components = array('Acl', 'Auth');

     function _autenticacao() {
        Security::setHash('md5');
        $this->Auth->userModel = 'User';
        $this->Auth->fields = array(
                'username' => 'email',
                'password' => 'senha'
        );
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'home', 'action' => 'index');
        $this->Auth->authError = 'Você precisa estar logado para ter acesso';
        $this->Auth->loginError = 'E-mail ou senha inválida';
    }

    function converteData($data) {
        $data = explode('/', $data);
        $data = $data[2] . $data[1] . $data[0];
        return date('Y-m-d', strtotime($data));
    }

}
?>
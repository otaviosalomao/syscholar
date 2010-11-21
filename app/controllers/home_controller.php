<?php
class HomeController extends AppController {

    var $components = array('Auth','Acl');
    var $name = 'Home';
    var $uses = null;

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allowedActions = array('index');
        $this->Session = new SessionComponent();
    }

    function index() {
        debug($this->Session->read());  
        $this->layout= 'default';
    }

}
?>
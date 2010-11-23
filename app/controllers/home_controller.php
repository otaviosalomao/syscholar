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
        debug($this->Session->read());
        $this->layout= 'default';
    }

}
?>
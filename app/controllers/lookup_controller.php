<?php

class LookupController extends AppController {

    var $uses = array('Materia');

     function beforeFilter() {
        Configure::write('debug', 0);
        $this->layout = null;
    }

    function listarMaterias() {
        $this->set('data', $this->Materia->find('list', array('fields' => array('nome'), 'recursive' => 0)));
        $this->render('lookup_array');
    }

}

?>
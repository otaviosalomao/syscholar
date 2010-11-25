<?php
class CalendarioController extends AppController {

    var $name = 'Calendario';
    var $helpers = array('Javascript');

    function cadastrar($id=null) {
        if(!empty($this->data)) {
            if($this->Materia->save($this->data))
                $this->Session->setFlash("Arquivo cadastrado com sucesso!");
        }
    }

    function index() {

    }
}
?>
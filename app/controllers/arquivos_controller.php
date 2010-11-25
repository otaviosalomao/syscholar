<?php
class ArquivosController extends AppController {

    var $name = 'Arquivos';
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
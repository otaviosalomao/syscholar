<?php

class AvaliacoesController extends AppController {

    var $name = 'Avaliacoes';
    var $helpers = array('Javascript', 'Paginas');

    function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();
    }

    function cadastrar($id=null) {
        if (!empty($this->data)) {            
            $this->data['Avaliacao']['user_id'] = $this->Session->read('Auth.User.id');  
            $this->data['Avaliacao']['data'] = $this->converteData($this->data['Avaliacao']['data']) . ' ' . $this->data['Avaliacao']['horario'] . ':00';
            if ($this->Avaliacao->save($this->data)) {
                $this->Session->setFlash("Avaliacao cadastrada com sucesso!");
                $this->redirect(array('controller' => 'materias', 'action' => 'view', $this->data['Avaliacao']['materia_id']));
            }
        } else {
            $this->loadModel('Materia');
            $materia = $this->Materia->findById($id);
            $this->data['Avaliacao']['materia_id'] = $materia['Materia']['id'];
        }
    }

    function index() {
        $avaliacoes = $this->Avaliacao->find('all', array('conditions' => array('Avaliacao.user_id' => $this->Session->read('Auth.User.id'))));
        $this->set('avaliacoes', $avaliacoes);
    }

    function excluir($id) {
        $this->autoRender = null;
        $this->Avaliacao->id = $id;
        $avaliacao = $this->Avaliacao->findById($id);
        $this->loadModel('Materia');
        $materia = $this->Materia->findById($avaliacao['Avaliacao']['materia_id']);
        if ($this->Avaliacao->delete()) {
            $this->Session->setFlash("Avaliacao excluida com sucesso!");
            $this->redirect(array('controller' => 'materias', 'action' => 'view', $materia['Materia']['id']));
        }
    }

    function editar($id) {
        $avaliacao = $this->Avaliacao->findById($id);
        $this->data = $avaliacao;
        $this->loadModel('Materia');
        $materia = $this->Materia->findById($avaliacao['Avaliacao']['materia_id']);
        $this->data['Avaliacao']['materia'] = $materia['Materia']['nome'];
        $this->data['Avaliacao']['data'] = date('d/m/Y', strtotime($avaliacao['Avaliacao']['data']));
        $this->data['Avaliacao']['horario'] = date('H:i', strtotime($avaliacao['Avaliacao']['data']));
    }

}

?>
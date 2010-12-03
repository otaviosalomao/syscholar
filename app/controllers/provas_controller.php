<?php
class ProvasController extends AppController {

	var $name = 'Provas';
        var $helpers = array('Javascript', 'Paginas');

      function beforeFilter() {
            $this->Session = new SessionComponent();
            $this->_autenticacao();
            parent::beforeFilter();
        }

        function cadastrar($id=null) {
            if(!empty($this->data)) {
                $this->loadModel('Materia');
                $materia = $this->Materia->findByNome($this->data['Prova']['materia']);
                if(!empty($materia)){
                    $this->data['Prova']['user_id'] = $this->Session->read('Auth.User.id');
                    $this->data['Prova']['materia_id'] = $materia['Materia']['id'];                    
                    $this->data['Prova']['data'] = $this->converteData($this->data['Prova']['data']).' '.$this->data['Prova']['horario'].':00';                    
                        if($this->Prova->save($this->data)){
                            $this->Session->setFlash("Prova cadastrada com sucesso!");
                            $this->redirect(array('controller'=>'provas', 'action'=>'index'));
                        }
                }
             }
        }

        function index() {
            $provas = $this->Prova->find('all', array('conditions' => array('Prova.user_id' => $this->Session->read('Auth.User.id'))));            
            $this->set('provas', $provas);            
        }

        function excluir($id) {
            $this->autoRender = null;
            $this->Prova->id = $id;
            if($this->Prova->delete()) {
                $this->Session->setFlash("Prova excluida com sucesso!");
                $this->redirect(array('controller'=>'provas', 'action'=>'index'));
            }
        }

        function editar($id) {
            $prova = $this->Prova->findById($id);
            $this->data = $prova;
            $this->loadModel('Materia');
            $materia = $this->Materia->findById($prova['Prova']['materia_id']);
            $this->data['Prova']['materia']=$materia['Materia']['nome'];
            $this->data['Prova']['data']= date('d/m/Y', strtotime($prova['Prova']['data']));
            $this->data['Prova']['horario']= date('H:i', strtotime($prova['Prova']['data']));
            
        }

}
?>
<?php

class ArquivosController extends AppController {

    var $name = 'Arquivos';
    var $helpers = array('Javascript');

    function beforeFilter() {
        $this->Session = new SessionComponent();
        $this->_autenticacao();
        parent::beforeFilter();
    }

    function index() {
        $arquivos = $this->Arquivo->find('all', array('conditions' => array('Arquivo.user_id' => $this->Session->read('Auth.User.id'))));
        $this->set('arquivos', $arquivos);
    }

    function buscarArquivo($arquivo, $caminho) {
        $diretorio = 'files/arquivos/' . $caminho . '/';
        // abre o diretório
        $ponteiro = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
            if ($nome_itens == $arquivo)
                return true;
        }
        return false;
    }

    function cadastrar() {
        if (!(empty($this->data))) {
            $arquivo = $_FILES['data'];
            $caminho = 'files/arquivos/' . $this->Session->read('Auth.User.id');
            if (!is_dir($caminho))
                mkdir($caminho, 0777, true);
            $arquivo_minusculo = strtolower($arquivo['name']['Arquivo']['arquivo']);
            $caracteres = array("ç", "~", "^", "]", "[", "{", "}", ";", ":", "´", ",", ">", "<", "-", "/", "|", "@", "$",
                "%", "ã", "â", "á", "à", "é", "è", "ó", "ò", "+", "=", "*", "&", "(", ")", "!", "#", "?", "`", "ã", " ", "©");
            $arquivo_tratado = str_replace($caracteres, "", $arquivo_minusculo);
            $destino = $caminho . "/" . $arquivo_tratado;
            if (!is_dir($caminho))
                mkdir($caminho, 0777, true);
            if (move_uploaded_file($arquivo['tmp_name']['Arquivo']['arquivo'], $destino)) {
                $this->data['Arquivo']['arquivo'] = $this->data['Arquivo']['arquivo']['name'];
                $this->data['Arquivo']['user_id'] = $this->Session->read('Auth.User.id');
                if ($this->Arquivo->save($this->data))
                    $this->Session->setFlash('<h5>Arquivo enviado com sucesso!</h5>', 'default', array('class' => 'msg-ok'));
            }
            else
                $this->Session->setFlash('<h5>Erro ao enviar o arquivo!</h5>', 'default', array('class' => 'msg-erro'));
            $this->redirect('/arquivos');
        }
    }

    function excluir($id) {
        $this->autoRender = null;
        $arquivo = $this->Arquivo->findById($id);
        $this->Arquivo->id = $id;
        if (unlink('files/arquivos/'.$this->Session->read('Auth.User.id').'/'.$arquivo['Arquivo']['arquivo']) && $this->Arquivo->delete()) {
            $this->Session->setFlash("Arquivo excluido com sucesso!");
            $this->redirect(array('controller' => 'trabalhos', 'action' => 'index'));
        }    
    }

}

?>
<?php
class User extends AppModel {
    var $name = 'User';
    var $displayField = 'nome';
    var $belongsTo = array('Group');
    var $actsAs = array('Acl' => 'requester');

     var $validate = array(
        'nome' => array(
            'rule' => 'notempty',
            'message' => "O campo 'nome' é obrigatório",
            'required' => true
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => "O campo 'email' é obrigatório",
                'required' => true
            ),
            'unique' => array(
                'rule' => array('isUnique', 'email'),
                'message' => "E-mail já cadastrado"
            )
        ),
        'senha' => array(
            'invalidPassword' => array(
                'rule' => array('validarSenha', 'senha'),
                'message' => "Senha inválida"
            )
        ),
         'telefone' => array(
            'rule' => 'notempty',
            'message' => "O campo 'telefone' é obrigatório",
            'required' => true
        ));

    function parentNode() {
        $data = $this->data;
        $user = $this->findById($this->id);
        return array('Group' => array('id' => $user['User']['group_id']));
    }

    function gerarSenha() {
        $senha = substr(uniqid(), 6);
        $data['User'] = array('senha' => Security::hash($senha, 'md5', true), 'confirmar_senha' => $senha);
        return $data;
    }

     function validarSenha($data) {
        $this->data["User"]["confirmar_senha"] =
                Security::hash($this->data["User"]["confirmar_senha"], 'md5', true);
        if ($this->data["User"]["confirmar_senha"] != $data["senha"])
            return false;
        if ($data["senha"] == Security::hash("", 'md5', true))
            return false;
        return true;
    }
}
?>
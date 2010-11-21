<?php
class User extends AppModel {
    var $name = 'User';
    var $displayField = 'nome';
    var $belongsTo = array('Group');
    var $actsAs = array('Acl' => 'requester');

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
}
?>
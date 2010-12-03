<?php
class User extends AppModel {
    var $name = 'User';
    var $displayField = 'nome';
    var $belongsTo = array('Group');
    var $hasMany = array('Arquivo');
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

    

}
?>
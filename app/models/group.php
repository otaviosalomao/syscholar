<?php
class Group extends AppModel {
    var $name = 'Group';
    var $displayField = 'nome';
    var $hasMany = array('User');

    var $actsAs = array('Acl' => array('requester'));
    function parentNode() {
        return null;
    }
}
?>
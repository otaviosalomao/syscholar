<?php
class Materia extends AppModel {
	var $name = 'Materia';
	var $displayField = 'nome';
        var $belongsTo = array('User');
        var $hasMany= array('Avaliacao');
}
?>
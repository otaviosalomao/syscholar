<?php
class Prova extends AppModel {
	var $name = 'Prova';
	var $displayField = 'nome';        
	var $belongsTo = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'User'
                );
}
?>
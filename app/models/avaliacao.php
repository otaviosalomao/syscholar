<?php
class Avaliacao extends AppModel {
	var $name = 'Avaliacao';
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
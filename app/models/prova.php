<?php
class Prova extends AppModel {
	var $name = 'Prova';
	var $displayField = 'nome';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'materia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
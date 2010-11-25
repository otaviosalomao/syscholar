<?php
/* Prova Fixture generated on: 2010-11-21 00:11:37 : 1290297877 */
class ProvaFixture extends CakeTestFixture {
	var $name = 'Prova';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'materia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'data' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'nota' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'materia_id' => 1,
			'data' => '1290297877',
			'nota' => 1
		),
	);
}
?>
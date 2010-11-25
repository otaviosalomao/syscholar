<?php
/* Materia Fixture generated on: 2010-11-21 00:11:11 : 1290297791 */
class MateriaFixture extends CakeTestFixture {
	var $name = 'Materia';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'professor' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tipo' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'curso' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array(),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'professor' => 1,
			'tipo' => 1,
			'curso' => 'Lorem ipsum dolor sit amet',
			'ano' => '2010-11-21 00:03:11'
		),
	);
}
?>
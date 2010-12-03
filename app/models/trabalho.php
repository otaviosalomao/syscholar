<?php
class Trabalho extends AppModel {
	var $name = 'Trabalho';
	var $displayField = 'nome';
        var $belongsTo = array('User', 'Materia');
}
?>
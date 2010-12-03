<?php
class Tarefa extends AppModel {
	var $name = 'Tarefa';
	var $displayField = 'nome';
        var $belongsTo = array('User');
}
?>
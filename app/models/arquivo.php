<?php
class Arquivo extends AppModel {
	var $name = 'Arquivo';
	var $displayField = 'nome';
        var $belongsTo = array('User');
}
?>
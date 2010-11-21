<div class="provas form">
<?php echo $this->Form->create('Prova');?>
	<fieldset>
 		<legend><?php __('Add Prova'); ?></legend>
	<?php
		echo $this->Form->input('materia_id');
		echo $this->Form->input('data');
		echo $this->Form->input('nota');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
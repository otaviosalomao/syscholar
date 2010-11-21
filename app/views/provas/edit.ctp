<div class="provas form">
<?php echo $this->Form->create('Prova');?>
	<fieldset>
 		<legend><?php __('Edit Prova'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Prova.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Prova.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
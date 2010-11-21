<div class="materias form">
<?php echo $this->Form->create('Materia');?>
	<fieldset>
 		<legend><?php __('Edit Materia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('professor');
		echo $this->Form->input('tipo');
		echo $this->Form->input('curso');
		echo $this->Form->input('ano');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Materia.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Materia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('action' => 'index'));?></li>
	</ul>
</div>
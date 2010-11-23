<div class="grupos form">
<?php echo $this->Form->create('Grupo');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Grupo', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('alterado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Grupo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Grupo.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Grupos', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Clientes', true)), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Cliente', true)), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
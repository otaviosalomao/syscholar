<div class="materias view">
<h2><?php  __('Materia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Professor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['professor']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Curso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['curso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ano'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $materia['Materia']['ano']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Materia', true), array('action' => 'edit', $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Materia', true), array('action' => 'delete', $materia['Materia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $materia['Materia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia', true), array('action' => 'add')); ?> </li>
	</ul>
</div>

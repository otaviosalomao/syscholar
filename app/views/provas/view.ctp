<div class="provas view">
<h2><?php  __('Prova');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Materia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($prova['Materia']['nome'], array('controller' => 'materias', 'action' => 'view', $prova['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['data']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nota'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $prova['Prova']['nota']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prova', true), array('action' => 'edit', $prova['Prova']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Prova', true), array('action' => 'delete', $prova['Prova']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prova['Prova']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prova', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>

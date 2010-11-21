<div class="provas index">
	<h2><?php __('Provas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('materia_id');?></th>
			<th><?php echo $this->Paginator->sort('data');?></th>
			<th><?php echo $this->Paginator->sort('nota');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($provas as $prova):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $prova['Prova']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prova['Materia']['nome'], array('controller' => 'materias', 'action' => 'view', $prova['Materia']['id'])); ?>
		</td>
		<td><?php echo $prova['Prova']['data']; ?>&nbsp;</td>
		<td><?php echo $prova['Prova']['nota']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $prova['Prova']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $prova['Prova']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $prova['Prova']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $prova['Prova']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Prova', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Materias', true), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia', true), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
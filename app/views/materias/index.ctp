<div class="materias index">
	<h2><?php __('Materias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nome');?></th>
			<th><?php echo $this->Paginator->sort('professor');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th><?php echo $this->Paginator->sort('curso');?></th>
			<th><?php echo $this->Paginator->sort('ano');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($materias as $materia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $materia['Materia']['id']; ?>&nbsp;</td>
		<td><?php echo $materia['Materia']['nome']; ?>&nbsp;</td>
		<td><?php echo $materia['Materia']['professor']; ?>&nbsp;</td>
		<td><?php echo $materia['Materia']['tipo']; ?>&nbsp;</td>
		<td><?php echo $materia['Materia']['curso']; ?>&nbsp;</td>
		<td><?php echo $materia['Materia']['ano']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $materia['Materia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $materia['Materia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $materia['Materia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $materia['Materia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Materia', true), array('action' => 'add')); ?></li>
	</ul>
</div>
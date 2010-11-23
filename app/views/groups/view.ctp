<div class="grupos view">
<h2><?php  __('Grupo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alterado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $grupo['Grupo']['alterado']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Grupo', true)), array('action' => 'edit', $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Grupo', true)), array('action' => 'delete', $grupo['Grupo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $grupo['Grupo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Grupos', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Grupo', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Clientes', true)), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Cliente', true)), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Clientes', true));?></h3>
	<?php if (!empty($grupo['Cliente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Grupo Id'); ?></th>
		<th><?php __('Nome'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Senha'); ?></th>
		<th><?php __('Cpf'); ?></th>
		<th><?php __('Telefone'); ?></th>
		<th><?php __('Celular'); ?></th>
		<th><?php __('Profissao'); ?></th>
		<th><?php __('Sexo'); ?></th>
		<th><?php __('Data Nascimento'); ?></th>
		<th><?php __('Como Conheci'); ?></th>
		<th><?php __('Newsletter'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupo['Cliente'] as $cliente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cliente['id'];?></td>
			<td><?php echo $cliente['grupo_id'];?></td>
			<td><?php echo $cliente['nome'];?></td>
			<td><?php echo $cliente['email'];?></td>
			<td><?php echo $cliente['senha'];?></td>
			<td><?php echo $cliente['cpf'];?></td>
			<td><?php echo $cliente['telefone'];?></td>
			<td><?php echo $cliente['celular'];?></td>
			<td><?php echo $cliente['profissao'];?></td>
			<td><?php echo $cliente['sexo'];?></td>
			<td><?php echo $cliente['data_nascimento'];?></td>
			<td><?php echo $cliente['como_conheci'];?></td>
			<td><?php echo $cliente['newsletter'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'clientes', 'action' => 'view', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'clientes', 'action' => 'edit', $cliente['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'clientes', 'action' => 'delete', $cliente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cliente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Cliente', true)), array('controller' => 'clientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

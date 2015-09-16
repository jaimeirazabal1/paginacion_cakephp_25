<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuario Telefonos'), array('controller' => 'usuario_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario Telefono'), array('controller' => 'usuario_telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargo Usuarios'), array('controller' => 'cargo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Usuario'), array('controller' => 'cargo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuario Telefonos'); ?></h3>
	<?php if (!empty($usuario['UsuarioTelefono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Telefono Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['UsuarioTelefono'] as $usuarioTelefono): ?>
		<tr>
			<td><?php echo $usuarioTelefono['id']; ?></td>
			<td><?php echo $usuarioTelefono['telefono_id']; ?></td>
			<td><?php echo $usuarioTelefono['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuario_telefonos', 'action' => 'view', $usuarioTelefono['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuario_telefonos', 'action' => 'edit', $usuarioTelefono['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuario_telefonos', 'action' => 'delete', $usuarioTelefono['id']), array(), __('Are you sure you want to delete # %s?', $usuarioTelefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario Telefono'), array('controller' => 'usuario_telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cargo Usuarios'); ?></h3>
	<?php if (!empty($usuario['CargoUsuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['CargoUsuario'] as $cargoUsuario): ?>
		<tr>
			<td><?php echo $cargoUsuario['id']; ?></td>
			<td><?php echo $cargoUsuario['cargo_id']; ?></td>
			<td><?php echo $cargoUsuario['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cargo_usuarios', 'action' => 'view', $cargoUsuario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cargo_usuarios', 'action' => 'edit', $cargoUsuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cargo_usuarios', 'action' => 'delete', $cargoUsuario['id']), array(), __('Are you sure you want to delete # %s?', $cargoUsuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cargo Usuario'), array('controller' => 'cargo_usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

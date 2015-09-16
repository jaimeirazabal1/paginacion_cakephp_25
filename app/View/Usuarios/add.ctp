<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('usuario');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuario Telefonos'), array('controller' => 'usuario_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario Telefono'), array('controller' => 'usuario_telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargo Usuarios'), array('controller' => 'cargo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo Usuario'), array('controller' => 'cargo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="guides form">
<?php echo $this->Form->create('Guide'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guide'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('email');
		echo $this->Form->input('languages');
		echo $this->Form->input('nationality');
		echo $this->Form->input('tk_organized');
		echo $this->Form->input('diplome');
		echo $this->Form->input('user_id');
		echo $this->Form->input('picture');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Guide.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Guide.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guides'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

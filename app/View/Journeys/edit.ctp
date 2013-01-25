<div class="journeys form">
<?php echo $this->Form->create('Journey'); ?>
	<fieldset>
		<legend><?php echo __('Edit Journey'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('creation');
		echo $this->Form->input('max');
		echo $this->Form->input('user_id');
		echo $this->Form->input('zone_id');
		echo $this->Form->input('guide_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Journey.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Journey.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Journeys'), array('controller' => 'rate_journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Journey'), array('controller' => 'rate_journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="rateTracks form">
<?php echo $this->Form->create('RateTrack'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Rate Track'); ?></legend>
	<?php
		echo $this->Form->input('rate');
		echo $this->Form->input('track_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rate Tracks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>

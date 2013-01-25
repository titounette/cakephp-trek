<div class="journeys form">
<?php echo $this->Form->create('Journey'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Journey'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('creation');
		echo $this->Form->input('max');
		echo $this->Form->input('user_id');
		echo $this->Form->input('zone_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?></li>
	</ul>
</div>

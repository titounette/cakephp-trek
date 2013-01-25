<div class="rateJourneys form">
<?php echo $this->Form->create('RateJourney'); ?>
	<fieldset>
		<legend><?php echo __('Add Rate Journey'); ?></legend>
	<?php
		echo $this->Form->input('rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rate Journeys'), array('action' => 'index')); ?></li>
	</ul>
</div>

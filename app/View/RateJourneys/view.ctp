<div class="rateJourneys view">
<h2><?php  echo __('Rate Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rateJourney['RateJourney']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($rateJourney['RateJourney']['rate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rate Journey'), array('action' => 'edit', $rateJourney['RateJourney']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rate Journey'), array('action' => 'delete', $rateJourney['RateJourney']['id']), null, __('Are you sure you want to delete # %s?', $rateJourney['RateJourney']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Journey'), array('action' => 'add')); ?> </li>
	</ul>
</div>

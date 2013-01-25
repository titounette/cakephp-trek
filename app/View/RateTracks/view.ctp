<div class="rateTracks view">
<h2><?php  echo __('Rate Track'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rateTrack['RateTrack']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($rateTrack['RateTrack']['rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Track'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rateTrack['Track']['name'], array('controller' => 'tracks', 'action' => 'view', $rateTrack['Track']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rate Track'), array('action' => 'edit', $rateTrack['RateTrack']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rate Track'), array('action' => 'delete', $rateTrack['RateTrack']['id']), null, __('Are you sure you want to delete # %s?', $rateTrack['RateTrack']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Tracks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Track'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>

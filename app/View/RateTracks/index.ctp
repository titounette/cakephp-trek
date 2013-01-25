<div class="rateTracks index">
	<h2><?php echo __('Rate Tracks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rate'); ?></th>
			<th><?php echo $this->Paginator->sort('track_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($rateTracks as $rateTrack): ?>
	<tr>
		<td><?php echo h($rateTrack['RateTrack']['id']); ?>&nbsp;</td>
		<td><?php echo h($rateTrack['RateTrack']['rate']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rateTrack['Track']['name'], array('controller' => 'tracks', 'action' => 'view', $rateTrack['Track']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rateTrack['RateTrack']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rateTrack['RateTrack']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rateTrack['RateTrack']['id']), null, __('Are you sure you want to delete # %s?', $rateTrack['RateTrack']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rate Track'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>

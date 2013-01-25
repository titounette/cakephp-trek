<div class="journeys index">
	<h2><?php echo __('Journeys'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('creation'); ?></th>
			<th><?php echo $this->Paginator->sort('max'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('zone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('guide_id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tourist_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($journeys as $journey): ?>
	<tr>
		<td><?php echo h($journey['Journey']['id']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['name']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['creation']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['max']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['user_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($journey['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $journey['Zone']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($journey['Guide']['firstname'], array('controller' => 'guides', 'action' => 'view', $journey['Guide']['id'])); ?>
		</td>
		<td><?php echo h($journey['Journey']['group_id']); ?>&nbsp;</td>
		<td><?php echo h($journey['Journey']['tourist_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $journey['Journey']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $journey['Journey']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Zones'), array('controller' => 'zones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zone'), array('controller' => 'zones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Journeys'), array('controller' => 'rate_journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Journey'), array('controller' => 'rate_journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tracks'), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>

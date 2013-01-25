<div class="journeys view">
<h2><?php  echo __('Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['creation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max'); ?></dt>
		<dd>
			<?php echo h($journey['Journey']['max']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['User']['username'], array('controller' => 'users', 'action' => 'view', $journey['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Zone']['name'], array('controller' => 'zones', 'action' => 'view', $journey['Zone']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guide'); ?></dt>
		<dd>
			<?php echo $this->Html->link($journey['Guide']['firstname'], array('controller' => 'guides', 'action' => 'view', $journey['Guide']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Journey'), array('action' => 'edit', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Journey'), array('action' => 'delete', $journey['Journey']['id']), null, __('Are you sure you want to delete # %s?', $journey['Journey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Rate Journeys'); ?></h3>
	<?php if (!empty($journey['RateJourney'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Journey Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($journey['RateJourney'] as $rateJourney): ?>
		<tr>
			<td><?php echo $rateJourney['id']; ?></td>
			<td><?php echo $rateJourney['rate']; ?></td>
			<td><?php echo $rateJourney['journey_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rate_journeys', 'action' => 'view', $rateJourney['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rate_journeys', 'action' => 'edit', $rateJourney['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rate_journeys', 'action' => 'delete', $rateJourney['id']), null, __('Are you sure you want to delete # %s?', $rateJourney['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rate Journey'), array('controller' => 'rate_journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tracks'); ?></h3>
	<?php if (!empty($journey['Track'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Journey Id'); ?></th>
		<th><?php echo __('Long'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($journey['Track'] as $track): ?>
		<tr>
			<td><?php echo $track['id']; ?></td>
			<td><?php echo $track['journey_id']; ?></td>
			<td><?php echo $track['long']; ?></td>
			<td><?php echo $track['user_id']; ?></td>
			<td><?php echo $track['size']; ?></td>
			<td><?php echo $track['level']; ?></td>
			<td><?php echo $track['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tracks', 'action' => 'view', $track['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tracks', 'action' => 'edit', $track['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tracks', 'action' => 'delete', $track['id']), null, __('Are you sure you want to delete # %s?', $track['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Track'), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

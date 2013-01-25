<div class="commentsGuides index">
	<h2><?php echo __('Comments Guides'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($commentsGuides as $commentsGuide): ?>
	<tr>
		<td><?php echo h($commentsGuide['CommentsGuide']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($commentsGuide['User']['username'], array('controller' => 'users', 'action' => 'view', $commentsGuide['User']['id'])); ?>
		</td>
		<td><?php echo h($commentsGuide['CommentsGuide']['date']); ?>&nbsp;</td>
		<td><?php echo h($commentsGuide['CommentsGuide']['message']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $commentsGuide['CommentsGuide']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $commentsGuide['CommentsGuide']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $commentsGuide['CommentsGuide']['id']), null, __('Are you sure you want to delete # %s?', $commentsGuide['CommentsGuide']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

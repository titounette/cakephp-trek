<div class="commentsJourneys view">
<h2><?php  echo __('Comments Journey'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsJourney['CommentsJourney']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentsJourney['User']['username'], array('controller' => 'users', 'action' => 'view', $commentsJourney['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($commentsJourney['CommentsJourney']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($commentsJourney['CommentsJourney']['message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Journey'), array('action' => 'edit', $commentsJourney['CommentsJourney']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Journey'), array('action' => 'delete', $commentsJourney['CommentsJourney']['id']), null, __('Are you sure you want to delete # %s?', $commentsJourney['CommentsJourney']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Journeys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Journey'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

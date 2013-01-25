<div class="commentsGuides view">
<h2><?php  echo __('Comments Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($commentsGuide['CommentsGuide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($commentsGuide['User']['username'], array('controller' => 'users', 'action' => 'view', $commentsGuide['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($commentsGuide['CommentsGuide']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($commentsGuide['CommentsGuide']['message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comments Guide'), array('action' => 'edit', $commentsGuide['CommentsGuide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comments Guide'), array('action' => 'delete', $commentsGuide['CommentsGuide']['id']), null, __('Are you sure you want to delete # %s?', $commentsGuide['CommentsGuide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

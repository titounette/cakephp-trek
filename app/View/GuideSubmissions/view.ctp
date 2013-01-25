<div class="guideSubmissions view">
<h2><?php  echo __('Guide Submission'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guideSubmission['GuideSubmission']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guideSubmission['User']['username'], array('controller' => 'users', 'action' => 'view', $guideSubmission['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($guideSubmission['GuideSubmission']['resume']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guide Submission'), array('action' => 'edit', $guideSubmission['GuideSubmission']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guide Submission'), array('action' => 'delete', $guideSubmission['GuideSubmission']['id']), null, __('Are you sure you want to delete # %s?', $guideSubmission['GuideSubmission']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guide Submissions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide Submission'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

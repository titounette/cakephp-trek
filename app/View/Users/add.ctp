<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('controller' => 'comments_guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('controller' => 'comments_guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Journeys'), array('controller' => 'comments_journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Journey'), array('controller' => 'comments_journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Tracks'), array('controller' => 'comments_tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Track'), array('controller' => 'comments_tracks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guide Submissions'), array('controller' => 'guide_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide Submission'), array('controller' => 'guide_submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>

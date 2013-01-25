<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($user['User']['picture']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guide Submissions'), array('controller' => 'guide_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide Submission'), array('controller' => 'guide_submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Guide Submissions'); ?></h3>
	<?php if (!empty($user['GuideSubmission'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Resume'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['GuideSubmission'] as $guideSubmission): ?>
		<tr>
			<td><?php echo $guideSubmission['id']; ?></td>
			<td><?php echo $guideSubmission['user_id']; ?></td>
			<td><?php echo $guideSubmission['resume']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guide_submissions', 'action' => 'view', $guideSubmission['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guide_submissions', 'action' => 'edit', $guideSubmission['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guide_submissions', 'action' => 'delete', $guideSubmission['id']), null, __('Are you sure you want to delete # %s?', $guideSubmission['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guide Submission'), array('controller' => 'guide_submissions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Guides'); ?></h3>
	<?php if (!empty($user['Guide'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Languages'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Tk Organized'); ?></th>
		<th><?php echo __('Diplome'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Id Journey'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Guide'] as $guide): ?>
		<tr>
			<td><?php echo $guide['id']; ?></td>
			<td><?php echo $guide['firstname']; ?></td>
			<td><?php echo $guide['lastname']; ?></td>
			<td><?php echo $guide['email']; ?></td>
			<td><?php echo $guide['languages']; ?></td>
			<td><?php echo $guide['nationality']; ?></td>
			<td><?php echo $guide['tk_organized']; ?></td>
			<td><?php echo $guide['diplome']; ?></td>
			<td><?php echo $guide['user_id']; ?></td>
			<td><?php echo $guide['picture']; ?></td>
			<td><?php echo $guide['group_id']; ?></td>
			<td><?php echo $guide['id_journey']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'guides', 'action' => 'view', $guide['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'guides', 'action' => 'edit', $guide['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'guides', 'action' => 'delete', $guide['id']), null, __('Are you sure you want to delete # %s?', $guide['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($user['Tourist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Nationality'); ?></th>
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Journey Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tourist'] as $tourist): ?>
		<tr>
			<td><?php echo $tourist['id']; ?></td>
			<td><?php echo $tourist['firstname']; ?></td>
			<td><?php echo $tourist['lastname']; ?></td>
			<td><?php echo $tourist['age']; ?></td>
			<td><?php echo $tourist['nationality']; ?></td>
			<td><?php echo $tourist['level']; ?></td>
			<td><?php echo $tourist['user_id']; ?></td>
			<td><?php echo $tourist['group_id']; ?></td>
			<td><?php echo $tourist['journey_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tourists', 'action' => 'view', $tourist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tourists', 'action' => 'edit', $tourist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tourists', 'action' => 'delete', $tourist['id']), null, __('Are you sure you want to delete # %s?', $tourist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

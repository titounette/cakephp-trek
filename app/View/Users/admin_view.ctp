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
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Comments Guides'); ?></h3>
	<?php if (!empty($user['CommentsGuide'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CommentsGuide'] as $commentsGuide): ?>
		<tr>
			<td><?php echo $commentsGuide['id']; ?></td>
			<td><?php echo $commentsGuide['user_id']; ?></td>
			<td><?php echo $commentsGuide['date']; ?></td>
			<td><?php echo $commentsGuide['message']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_guides', 'action' => 'view', $commentsGuide['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_guides', 'action' => 'edit', $commentsGuide['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_guides', 'action' => 'delete', $commentsGuide['id']), null, __('Are you sure you want to delete # %s?', $commentsGuide['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Guide'), array('controller' => 'comments_guides', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments Journeys'); ?></h3>
	<?php if (!empty($user['CommentsJourney'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CommentsJourney'] as $commentsJourney): ?>
		<tr>
			<td><?php echo $commentsJourney['id']; ?></td>
			<td><?php echo $commentsJourney['user_id']; ?></td>
			<td><?php echo $commentsJourney['date']; ?></td>
			<td><?php echo $commentsJourney['message']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_journeys', 'action' => 'view', $commentsJourney['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_journeys', 'action' => 'edit', $commentsJourney['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_journeys', 'action' => 'delete', $commentsJourney['id']), null, __('Are you sure you want to delete # %s?', $commentsJourney['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Journey'), array('controller' => 'comments_journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Comments Tracks'); ?></h3>
	<?php if (!empty($user['CommentsTrack'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CommentsTrack'] as $commentsTrack): ?>
		<tr>
			<td><?php echo $commentsTrack['id']; ?></td>
			<td><?php echo $commentsTrack['user_id']; ?></td>
			<td><?php echo $commentsTrack['date']; ?></td>
			<td><?php echo $commentsTrack['message']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments_tracks', 'action' => 'view', $commentsTrack['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments_tracks', 'action' => 'edit', $commentsTrack['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments_tracks', 'action' => 'delete', $commentsTrack['id']), null, __('Are you sure you want to delete # %s?', $commentsTrack['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comments Track'), array('controller' => 'comments_tracks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
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
		<th><?php echo __('Picture'); ?></th>
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
			<td><?php echo $tourist['picture']; ?></td>
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

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
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guide Submissions'), array('controller' => 'guide_submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide Submission'), array('controller' => 'guide_submissions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('controller' => 'guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('controller' => 'guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourists'), array('controller' => 'tourists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourist'), array('controller' => 'tourists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Guides'), array('controller' => 'comments_guides', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Guide'), array('controller' => 'comments_guides', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Journeys'), array('controller' => 'comments_journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Journey'), array('controller' => 'comments_journeys', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments Tracks'), array('controller' => 'comments_tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comments Track'), array('controller' => 'comments_tracks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Journeys'), array('controller' => 'journeys', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Guide Submissions'); ?></h3>
	<?php if (!empty($user['GuideSubmission'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['GuideSubmission']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['GuideSubmission']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
	<?php echo $user['GuideSubmission']['resume']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Guide Submission'), array('controller' => 'guide_submissions', 'action' => 'edit', $user['GuideSubmission']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Guides'); ?></h3>
	<?php if (!empty($user['Guide'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Guide']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
	<?php echo $user['Guide']['firstname']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
	<?php echo $user['Guide']['lastname']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $user['Guide']['email']; ?>
&nbsp;</dd>
		<dt><?php echo __('Languages'); ?></dt>
		<dd>
	<?php echo $user['Guide']['languages']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
	<?php echo $user['Guide']['nationality']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tk Organized'); ?></dt>
		<dd>
	<?php echo $user['Guide']['tk_organized']; ?>
&nbsp;</dd>
		<dt><?php echo __('Diplome'); ?></dt>
		<dd>
	<?php echo $user['Guide']['diplome']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Guide']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
	<?php echo $user['Guide']['picture']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Guide'), array('controller' => 'guides', 'action' => 'edit', $user['Guide']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Tourists'); ?></h3>
	<?php if (!empty($user['Tourist'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['firstname']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['lastname']; ?>
&nbsp;</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['age']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['nationality']; ?>
&nbsp;</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['level']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['user_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
	<?php echo $user['Tourist']['picture']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Tourist'), array('controller' => 'tourists', 'action' => 'edit', $user['Tourist']['id'])); ?></li>
			</ul>
		</div>
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
	<h3><?php echo __('Related Journeys'); ?></h3>
	<?php if (!empty($user['Journey'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Creation'); ?></th>
		<th><?php echo __('Max'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Zone Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Journey'] as $journey): ?>
		<tr>
			<td><?php echo $journey['id']; ?></td>
			<td><?php echo $journey['name']; ?></td>
			<td><?php echo $journey['creation']; ?></td>
			<td><?php echo $journey['max']; ?></td>
			<td><?php echo $journey['user_id']; ?></td>
			<td><?php echo $journey['zone_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'journeys', 'action' => 'view', $journey['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'journeys', 'action' => 'edit', $journey['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journeys', 'action' => 'delete', $journey['id']), null, __('Are you sure you want to delete # %s?', $journey['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Journey'), array('controller' => 'journeys', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

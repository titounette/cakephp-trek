<div class="guides view">
<h2><?php  echo __('Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Languages'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['languages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tk Organized'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['tk_organized']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diplome'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['diplome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($guide['User']['username'], array('controller' => 'users', 'action' => 'view', $guide['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($guide['Guide']['picture']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guide'), array('action' => 'edit', $guide['Guide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guide'), array('action' => 'delete', $guide['Guide']['id']), null, __('Are you sure you want to delete # %s?', $guide['Guide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guide'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

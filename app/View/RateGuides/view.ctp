<div class="rateGuides view">
<h2><?php  echo __('Rate Guide'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rateGuide['RateGuide']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rate'); ?></dt>
		<dd>
			<?php echo h($rateGuide['RateGuide']['rate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rate Guide'), array('action' => 'edit', $rateGuide['RateGuide']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rate Guide'), array('action' => 'delete', $rateGuide['RateGuide']['id']), null, __('Are you sure you want to delete # %s?', $rateGuide['RateGuide']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rate Guides'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rate Guide'), array('action' => 'add')); ?> </li>
	</ul>
</div>

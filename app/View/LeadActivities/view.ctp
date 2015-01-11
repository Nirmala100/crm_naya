<div class="leadActivities view">
<h2><?php echo __('Lead Activity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadActivity['LeadActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Up Date'); ?></dt>
		<dd>
			<?php echo h($leadActivity['LeadActivity']['start_up_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Closed Dae'); ?></dt>
		<dd>
			<?php echo h($leadActivity['LeadActivity']['closed_dae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadActivity['User']['name'], array('controller' => 'users', 'action' => 'view', $leadActivity['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lead Activity'), array('action' => 'edit', $leadActivity['LeadActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lead Activity'), array('action' => 'delete', $leadActivity['LeadActivity']['id']), null, __('Are you sure you want to delete # %s?', $leadActivity['LeadActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

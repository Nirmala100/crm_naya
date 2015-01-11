<div class="leadActivities index">
	<h2><?php echo __('Lead Activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_up_date'); ?></th>
			<th><?php echo $this->Paginator->sort('closed_dae'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leadActivities as $leadActivity): ?>
	<tr>
		<td><?php echo h($leadActivity['LeadActivity']['id']); ?>&nbsp;</td>
		<td><?php echo h($leadActivity['LeadActivity']['start_up_date']); ?>&nbsp;</td>
		<td><?php echo h($leadActivity['LeadActivity']['closed_dae']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leadActivity['User']['name'], array('controller' => 'users', 'action' => 'view', $leadActivity['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leadActivity['LeadActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leadActivity['LeadActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leadActivity['LeadActivity']['id']), null, __('Are you sure you want to delete # %s?', $leadActivity['LeadActivity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lead Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

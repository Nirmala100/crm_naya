<div class="leadContacts index">
	<h2><?php echo __('Lead Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_manager_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leadContacts as $leadContact): ?>
	<tr>
		<td><?php echo h($leadContact['LeadContact']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leadContact['ContactManager']['name'], array('controller' => 'contact_managers', 'action' => 'view', $leadContact['ContactManager']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($leadContact['User']['name'], array('controller' => 'users', 'action' => 'view', $leadContact['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $leadContact['LeadContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $leadContact['LeadContact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $leadContact['LeadContact']['id']), null, __('Are you sure you want to delete # %s?', $leadContact['LeadContact']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Managers'), array('controller' => 'contact_managers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Manager'), array('controller' => 'contact_managers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

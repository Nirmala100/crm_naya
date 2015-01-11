<div class="contactManagers index">
	<h2><?php echo __('Contact Managers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('services'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactManagers as $contactManager): ?>
	<tr>
		<td><?php echo h($contactManager['ContactManager']['id']); ?>&nbsp;</td>
		<td><?php echo h($contactManager['ContactManager']['name']); ?>&nbsp;</td>
		<td><?php echo h($contactManager['ContactManager']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contactManager['ContactManager']['address']); ?>&nbsp;</td>
		<td><?php echo h($contactManager['ContactManager']['email']); ?>&nbsp;</td>
		<td><?php echo h($contactManager['ContactManager']['services']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactManager['ContactManager']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactManager['ContactManager']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactManager['ContactManager']['id']), null, __('Are you sure you want to delete # %s?', $contactManager['ContactManager']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact Manager'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>

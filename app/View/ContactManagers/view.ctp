<div class="contactManagers view">
<h2><?php echo __('Contact Manager'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Services'); ?></dt>
		<dd>
			<?php echo h($contactManager['ContactManager']['services']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Manager'), array('action' => 'edit', $contactManager['ContactManager']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Manager'), array('action' => 'delete', $contactManager['ContactManager']['id']), null, __('Are you sure you want to delete # %s?', $contactManager['ContactManager']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Managers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Manager'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lead Contacts'); ?></h3>
	<?php if (!empty($contactManager['LeadContact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Manager Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactManager['LeadContact'] as $leadContact): ?>
		<tr>
			<td><?php echo $leadContact['id']; ?></td>
			<td><?php echo $leadContact['contact_manager_id']; ?></td>
			<td><?php echo $leadContact['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lead_contacts', 'action' => 'view', $leadContact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lead_contacts', 'action' => 'edit', $leadContact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lead_contacts', 'action' => 'delete', $leadContact['id']), null, __('Are you sure you want to delete # %s?', $leadContact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

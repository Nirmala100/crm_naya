<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned To'); ?></dt>
		<dd>
			<?php echo h($user['User']['assigned_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned Date'); ?></dt>
		<dd>
			<?php echo h($user['User']['assigned_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned Work'); ?></dt>
		<dd>
			<?php echo h($user['User']['assigned_work']); ?>
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
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($user['User']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Category']['id'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Activities'), array('controller' => 'lead_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Activity'), array('controller' => 'lead_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lead Activities'); ?></h3>
	<?php if (!empty($user['LeadActivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Up Date'); ?></th>
		<th><?php echo __('Closed Dae'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['LeadActivity'] as $leadActivity): ?>
		<tr>
			<td><?php echo $leadActivity['id']; ?></td>
			<td><?php echo $leadActivity['start_up_date']; ?></td>
			<td><?php echo $leadActivity['closed_dae']; ?></td>
			<td><?php echo $leadActivity['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lead_activities', 'action' => 'view', $leadActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lead_activities', 'action' => 'edit', $leadActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lead_activities', 'action' => 'delete', $leadActivity['id']), null, __('Are you sure you want to delete # %s?', $leadActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lead Activity'), array('controller' => 'lead_activities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lead Contacts'); ?></h3>
	<?php if (!empty($user['LeadContact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Contact Manager Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['LeadContact'] as $leadContact): ?>
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

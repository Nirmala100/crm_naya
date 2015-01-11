<div class="leadContacts view">
<h2><?php echo __('Lead Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leadContact['LeadContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Manager'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadContact['ContactManager']['name'], array('controller' => 'contact_managers', 'action' => 'view', $leadContact['ContactManager']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leadContact['User']['name'], array('controller' => 'users', 'action' => 'view', $leadContact['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lead Contact'), array('action' => 'edit', $leadContact['LeadContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lead Contact'), array('action' => 'delete', $leadContact['LeadContact']['id']), null, __('Are you sure you want to delete # %s?', $leadContact['LeadContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Managers'), array('controller' => 'contact_managers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Manager'), array('controller' => 'contact_managers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

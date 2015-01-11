<div class="leadContacts form">
<?php echo $this->Form->create('LeadContact'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lead Contact'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('contact_manager_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('LeadContact.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('LeadContact.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Managers'), array('controller' => 'contact_managers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Manager'), array('controller' => 'contact_managers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

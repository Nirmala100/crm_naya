<div class="contactManagers form">
<?php echo $this->Form->create('ContactManager'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact Manager'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('services');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactManager.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactManager.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Managers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>

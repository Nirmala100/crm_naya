<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		//echo $this->Form->input('role');
		echo $this->Form->input('role', array(
            'options' => array( 'admin' => 'Admin', 'home_user' => 'Home User', 'lead' => 'Client')
        ));
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
		echo $this->Form->input('address');
		echo $this->Form->input('assigned_to');
		echo $this->Form->input('assigned_date');
		echo $this->Form->input('assigned_work');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('position');
		echo $this->Form->input('status');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Activities'), array('controller' => 'lead_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Activity'), array('controller' => 'lead_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>

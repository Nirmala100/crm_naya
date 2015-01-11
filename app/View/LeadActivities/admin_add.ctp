<div class="leadActivities form">
<?php echo $this->Form->create('LeadActivity'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Lead Activity'); ?></legend>
	<?php
		echo $this->Form->input('start_up_date');
		echo $this->Form->input('closed_dae');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lead Activities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

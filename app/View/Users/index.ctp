<?php echo $this->Html->script('jquery.js');?>
<?php echo $this->Html->script('jquery-ui.js');?>
<?php echo $this->Html->script('jquery-ui.min.js');?>
<script>
 $( document ).ready(function() {
        console.log( "document loaded" );
		alert ("okay!");
		
		$(function() {
    $( "#datepicker" ).datepicker();
  });
   
  
		
		
    });
 
  </script>

<div class="users index">
<h1>Search By:</h1>
Date: <input type="text" id="datepicker">
<?php //print_r($dropdownitems); ?>
<?php echo $this->Form->input('Name:',array("options"=>$dropdownitems));?>

	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr><?php //debug($users); die;?>
       
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('assigned_to'); ?></th>
			<th><?php echo $this->Paginator->sort('assigned_date'); ?></th>
			<th><?php echo $this->Paginator->sort('assigned_work'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['address']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['assigned_to']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['assigned_date']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['assigned_work']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['position']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Category']['id'], array('controller' => 'categories', 'action' => 'view', $user['Category']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Activities'), array('controller' => 'lead_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Activity'), array('controller' => 'lead_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lead Contacts'), array('controller' => 'lead_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lead Contact'), array('controller' => 'lead_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>

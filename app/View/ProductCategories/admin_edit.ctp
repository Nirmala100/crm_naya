<div class="productCategories form">
<?php echo $this->Form->create('ProductCategory'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Product Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name');
		echo $this->Form->input('key_number');
		echo $this->Form->input('price');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProductCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProductCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="userDetails form">
<?php echo $this->Form->create('UserDetail'); ?>
	<fieldset>
		<legend><?php echo __('Edit User Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('trn');
		echo $this->Form->input('add_line_one');
		echo $this->Form->input('add_line_two');
		echo $this->Form->input('add_parish');
		echo $this->Form->input('add_post_code');
		echo $this->Form->input('employed');
		echo $this->Form->input('comp_occ');
		echo $this->Form->input('comp_add_one');
		echo $this->Form->input('comp_add_two');
		echo $this->Form->input('comp_parish');
		echo $this->Form->input('comp_post_code');
		echo $this->Form->input('bank');
		echo $this->Form->input('bank_branch');
		echo $this->Form->input('bank_acc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserDetail.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UserDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Details'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

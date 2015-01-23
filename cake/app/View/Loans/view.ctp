<div class="loans view">
<h2><?php echo __('Loan'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loan['User']['id'], array('controller' => 'users', 'action' => 'view', $loan['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['amount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loan'), array('action' => 'edit', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan'), array('action' => 'delete', $loan['Loan']['id']), array(), __('Are you sure you want to delete # %s?', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

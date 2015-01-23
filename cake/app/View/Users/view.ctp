<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fname'); ?></dt>
		<dd>
			<?php echo h($user['User']['fname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lname'); ?></dt>
		<dd>
			<?php echo h($user['User']['lname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Details'), array('controller' => 'user_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Detail'), array('controller' => 'user_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Loans'); ?></h3>
	<?php if (!empty($user['Loan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Loan'] as $loan): ?>
		<tr>
			<td><?php echo $loan['id']; ?></td>
			<td><?php echo $loan['user_id']; ?></td>
			<td><?php echo $loan['amount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['id']), array(), __('Are you sure you want to delete # %s?', $loan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Details'); ?></h3>
	<?php if (!empty($user['UserDetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Trn'); ?></th>
		<th><?php echo __('Add Line One'); ?></th>
		<th><?php echo __('Add Line Two'); ?></th>
		<th><?php echo __('Add Parish'); ?></th>
		<th><?php echo __('Add Post Code'); ?></th>
		<th><?php echo __('Employed'); ?></th>
		<th><?php echo __('Comp Occ'); ?></th>
		<th><?php echo __('Comp Add One'); ?></th>
		<th><?php echo __('Comp Add Two'); ?></th>
		<th><?php echo __('Comp Parish'); ?></th>
		<th><?php echo __('Comp Post Code'); ?></th>
		<th><?php echo __('Bank'); ?></th>
		<th><?php echo __('Bank Branch'); ?></th>
		<th><?php echo __('Bank Acc'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['UserDetail'] as $userDetail): ?>
		<tr>
			<td><?php echo $userDetail['id']; ?></td>
			<td><?php echo $userDetail['user_id']; ?></td>
			<td><?php echo $userDetail['trn']; ?></td>
			<td><?php echo $userDetail['add_line_one']; ?></td>
			<td><?php echo $userDetail['add_line_two']; ?></td>
			<td><?php echo $userDetail['add_parish']; ?></td>
			<td><?php echo $userDetail['add_post_code']; ?></td>
			<td><?php echo $userDetail['employed']; ?></td>
			<td><?php echo $userDetail['comp_occ']; ?></td>
			<td><?php echo $userDetail['comp_add_one']; ?></td>
			<td><?php echo $userDetail['comp_add_two']; ?></td>
			<td><?php echo $userDetail['comp_parish']; ?></td>
			<td><?php echo $userDetail['comp_post_code']; ?></td>
			<td><?php echo $userDetail['bank']; ?></td>
			<td><?php echo $userDetail['bank_branch']; ?></td>
			<td><?php echo $userDetail['bank_acc']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_details', 'action' => 'view', $userDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_details', 'action' => 'edit', $userDetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_details', 'action' => 'delete', $userDetail['id']), array(), __('Are you sure you want to delete # %s?', $userDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Detail'), array('controller' => 'user_details', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

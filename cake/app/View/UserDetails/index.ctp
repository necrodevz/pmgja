<div class="userDetails index">
	<h2><?php echo __('User Details'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('trn'); ?></th>
			<th><?php echo $this->Paginator->sort('add_line_one'); ?></th>
			<th><?php echo $this->Paginator->sort('add_line_two'); ?></th>
			<th><?php echo $this->Paginator->sort('add_parish'); ?></th>
			<th><?php echo $this->Paginator->sort('add_post_code'); ?></th>
			<th><?php echo $this->Paginator->sort('employed'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_occ'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_add_one'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_add_two'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_parish'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_post_code'); ?></th>
			<th><?php echo $this->Paginator->sort('bank'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_branch'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_acc'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($userDetails as $userDetail): ?>
	<tr>
		<td><?php echo h($userDetail['UserDetail']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $userDetail['User']['id'])); ?>
		</td>
		<td><?php echo h($userDetail['UserDetail']['trn']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['add_line_one']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['add_line_two']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['add_parish']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['add_post_code']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['employed']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['comp_occ']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['comp_add_one']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['comp_add_two']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['comp_parish']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['comp_post_code']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['bank']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['bank_branch']); ?>&nbsp;</td>
		<td><?php echo h($userDetail['UserDetail']['bank_acc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userDetail['UserDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userDetail['UserDetail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userDetail['UserDetail']['id']), array(), __('Are you sure you want to delete # %s?', $userDetail['UserDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New User Detail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

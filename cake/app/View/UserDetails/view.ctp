<div class="userDetails view">
<h2><?php echo __('User Detail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userDetail['User']['id'], array('controller' => 'users', 'action' => 'view', $userDetail['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trn'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['trn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add Line One'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['add_line_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add Line Two'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['add_line_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add Parish'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['add_parish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Add Post Code'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['add_post_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employed'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['employed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Occ'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['comp_occ']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Add One'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['comp_add_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Add Two'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['comp_add_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Parish'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['comp_parish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Post Code'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['comp_post_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Branch'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['bank_branch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Acc'); ?></dt>
		<dd>
			<?php echo h($userDetail['UserDetail']['bank_acc']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Detail'), array('action' => 'edit', $userDetail['UserDetail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Detail'), array('action' => 'delete', $userDetail['UserDetail']['id']), array(), __('Are you sure you want to delete # %s?', $userDetail['UserDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Details'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Detail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>

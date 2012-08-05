<div class="people view">
<h2><?php  __('Person');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Other Names'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['other_names']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $person['Person']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person', true), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Person', true), array('action' => 'delete', $person['Person']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships', true), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership', true), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Memberships');?></h3>
	<?php if (!empty($person['Membership'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Person Id'); ?></th>
		<th><?php __('Institution Id'); ?></th>
		<th><?php __('Start Date'); ?></th>
		<th><?php __('End Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Membership'] as $membership):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $membership['id'];?></td>
			<td><?php echo $membership['person_id'];?></td>
			<td><?php echo $membership['institution_id'];?></td>
			<td><?php echo $membership['start_date'];?></td>
			<td><?php echo $membership['end_date'];?></td>
			<td><?php echo $membership['created'];?></td>
			<td><?php echo $membership['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'memberships', 'action' => 'view', $membership['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'memberships', 'action' => 'edit', $membership['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'memberships', 'action' => 'delete', $membership['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $membership['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Membership', true), array('controller' => 'memberships', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>

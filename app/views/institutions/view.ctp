<div class="institutions view">
<h2><?php  __('Institution');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $institution['Institution']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $institution['Institution']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $institution['Institution']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $institution['Institution']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $institution['Institution']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Institution', true), array('action' => 'edit', $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Institution', true), array('action' => 'delete', $institution['Institution']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $institution['Institution']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Memberships', true), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership', true), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Memberships');?></h3>
	<?php if (!empty($institution['Membership'])):?>
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
		foreach ($institution['Membership'] as $membership):
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

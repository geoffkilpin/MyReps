<div class="people index">
	<h2><?php __('People');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('other_names');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($people as $person):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $person['Person']['id']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['first_name']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['last_name']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['other_names']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['title']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['gender']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['created']; ?>&nbsp;</td>
		<td><?php echo $person['Person']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $person['Person']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $person['Person']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['Person']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Person', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Memberships', true), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership', true), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
 		<legend><?php __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('other_names');
		echo $this->Form->input('title');
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Memberships', true), array('controller' => 'memberships', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Membership', true), array('controller' => 'memberships', 'action' => 'add')); ?> </li>
	</ul>
</div>
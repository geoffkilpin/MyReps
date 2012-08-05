<div class="memberships form">
<?php echo $this->Form->create('Membership');?>
	<fieldset>
 		<legend><?php __('Add Membership'); ?></legend>
	<?php
		echo $this->Form->input('person_id');
		echo $this->Form->input('institution_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Memberships', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Institutions', true), array('controller' => 'institutions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institution', true), array('controller' => 'institutions', 'action' => 'add')); ?> </li>
	</ul>
</div>
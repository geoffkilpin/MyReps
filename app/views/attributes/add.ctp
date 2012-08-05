<div class="attributes form">
<?php echo $this->Form->create('Attribute');?>
	<fieldset>
 		<legend><?php __('Add Attribute'); ?></legend>
	<?php
		echo $this->Form->input('type');
		echo $this->Form->input('key');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attributes', true), array('action' => 'index'));?></li>
	</ul>
</div>
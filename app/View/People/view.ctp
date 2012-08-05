<h1><?php echo $person['Person']['title'].' '.$person['Person']['first_name'].' '.$person['Person']['last_name']; ?></h1>
<?php echo $this->Html->link('XML View','/people/view/'.$person['Person']['id'].'.xml'); ?><br />
<?php if (isset($person['Person']['Wikipedia'])) {
	echo $person['Person']['Wikipedia']; 
	echo 'Source: '.$this->Html->link('Wikipedia','http://en.wikipedia.org/wiki/'.$person['Person']['WikipediaKey']).'<p>';
}
?>
<?php if (isset($person['Person']['email'])) { ?>
<ul>
<li><?php echo $person['Person']['email']; ?></li>
</ul>
<?php } ?>
<h2>Memberships &amp; Positions:</h2>
<ul>
<?php
if (count($person['Membership'])>0) foreach ($person['Membership'] as $membership) {
	$add='';
	if (($membership['start_date']!='0000-00-00')&&($membership['start_date']!='')) $add.=' from '.$membership['start_date'];
	if (($membership['end_date']!='0000-00-00')&&($membership['end_date']!='')) $add.=' until '.$membership['end_date'];
	echo '<li>'.$this->Html->link($membership['Institution']['name'],'/institutions/view/'.$membership['Institution']['id']).$add.'</li>';
}
?>
</ul>

<pre>
<?php //print_r($person); ?>
</pre>

<h1><?php echo $institution['Institution']['name']; ?></h1>
<?php echo $this->Html->link('XML View','/institutions/view/'.$institution['Institution']['id'].'.xml'); ?><br />
<ul class="nav nav-tabs">
  <li class="active"><a href="#current" data-toggle="tab">Current members</a>
  </li>
  <li><a href="#past" data-toggle="tab">Past Members</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="current"><table>
	<?php
	foreach ($institution['Membership'] as $member) {
		echo '<tr><td>'.$this->Html->link($member['Person']['first_name'].' '.$member['Person']['last_name'],'/people/view/'.$member['Person']['id']).'</td><td>'.$member['Person']['Parties'].'</td></tr>';
	}
	?>
	</table></div>
  <div class="tab-pane" id="past">Past members<ul>
<?php
foreach ($past['Membership'] as $member) {
	echo '<li>'.$this->Html->link($member['Person']['first_name'].' '.$member['Person']['last_name'],'/people/view/'.$member['Person']['id']).' until '.$member['end_date'].'</li>';
}
?>
</ul></div>
</div>

<pre>
<?php //print_r($institution); ?>
</pre>

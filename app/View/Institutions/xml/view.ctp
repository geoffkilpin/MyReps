<?php
$memberships=array();

//print_r($institution);

foreach ($institution['Membership'] as $membership) {
	$m=array();
	$m['id']=$membership['id'];
	$m['person_id']=$membership['person_id'];
	$m['person_first_name']=$membership['Person']['first_name'];
	$m['person_last_name']=$membership['Person']['last_name'];
	$m['person_paries']=$membership['Person']['Parties'];
	$m['created']=$membership['created'];
	$m['modified']=$membership['modified'];
	$memberships[]=$m;
}
//print_r($memberships);

$data=array('Institution'=>$institution['Institution']);
$data['Institution']['Members']=$memberships;

//print_r($data);

$xmlArray = array('root' => array('child' => 'value'));
$xmlObject = Xml::fromArray($data, array('format' => 'tags')); // You can use Xml::build() too
echo $xmlString = $xmlObject->asXML();

?>

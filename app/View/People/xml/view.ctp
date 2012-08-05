<?php

$data = $person['Person'];
//print_r($data);
//make the memberships array
$memberships=Array();
foreach ($person['Membership'] as $membership) {
	$memberships[]=array('institution_id'=>$membership['institution_id'],
		'start_date'=>$membership['start_date'],
		'end_date'=>$membership['end_date'],
		'institution'=>$membership['Institution']['name'],
		'institution_type'=>$membership['Institution']['type'],
		'created'=>$membership['created'],
		'modified'=>$membership['modified']
	);
}

//create actual array
$person['Person']['Members']=$memberships;
$data=array('Person'=>$person['Person']);
//print_r($data);
$data2 = array(
    'projects' => array(
        'project' => array(
            array(
                'id' => 1, 'title' => 'Project 1',
                'industry' => array('id' => 1, 'name' => 'Industry 1')
            ),
            array(
                'id' => 2, 'title' => 'Project 2',
                'industry' => array('id' => 2, 'name' => 'Industry 2')
            )
        )
    )
);
//print_r($data2);
$xmlArray = array('root' => array('child' => 'value'));
$xmlObject = Xml::fromArray($data, array('format' => 'tags')); // You can use Xml::build() too
echo $xmlString = $xmlObject->asXML();
?>

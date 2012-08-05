<?php
class Person extends AppModel {
	var $name = 'Person';
	var $displayField = 'title';
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Membership' => array(
			'className' => 'Membership',
			'foreignKey' => 'person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Attribute'=> array(
			'className'=>'Attribute',
			'foreignKey'=>'person_id'
		)
	);
	
	function get($id) {
		$persons = $this->find('first',array('conditions'=>array('Person.id'=>$id),'recursive'=>2));
		if (isset($persons['Attribute'])) if (count($persons['Attribute'])>0) foreach ($persons['Attribute'] as $attribute) {
			if ($attribute['key']=='wikipediaText') $persons['Person']['Wikipedia']=$attribute['value'];
			if ($attribute['key']=='wikipediaArticle') $persons['Person']['WikipediaKey']=$attribute['value'];
			if ($attribute['key']=='Email') $persons['Person']['email']=$attribute['value'];
		}
		return $persons;
	}
	
	
	function updateWikipedia($id) {
		$this->unbindModel(array('hasMany' => array('Attribute')));
		$this->bindModel(array('hasMany' => array('Attribute' => array('className' => 'Attribute','foreignKey'=>'person_id','conditions'=>'Attribute.key=\'wikipediaArticle\''))));
		
		$persons = $this->find('first',array('conditions'=>array('Person.id'=>$id),'recursive'=>2));
		
		
		//print_r(stream_get_wrappers());$persons['Attribute'][0]['value']
		//$wikipedia_file=file_get_contents('http://en.wikipedia.org/w/api.php?action=parse&page=South Africa&prop=text&section=0&format=xml');
		
		$vars = array(
			'http' => array(
			  'user_agent' =>'whatever'));
		  $context = stream_context_create($vars);
		  libxml_set_streams_context($context);
		  $xmlDoc = new DOMDocument();
		  $xmlDoc->load('http://en.wikipedia.org/w/api.php?action=parse&page='.$persons['Attribute'][0]['value'].'&prop=text&section=0&format=xml');

		  $wikipedia_file= $xmlDoc->saveHTML();
		  //$wikipedia_file=$temp;
		  
		  $t1=explode('&lt;/table&gt;',$wikipedia_file);
		  $t=explode('Cite error:',$t1[1]);
		  
		  $tosave=array('Attribute'=>array(
			'value'=>str_replace("\n",'<p>',strip_tags(htmlspecialchars_decode($t[0]))),
			'person_id'=>$id,
			'key'=>'wikipediaText'
		  ));
		  
		  $this->Attribute->save($tosave);
		
		return ;
	}

}
?>

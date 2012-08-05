<?php
class Institution extends AppModel {
	var $name = 'Institution';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Membership' => array(
			'className' => 'Membership',
			'foreignKey' => 'institution_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	function getCurrent($id) {
		$this->unbindModel(array('hasMany' => array('Membership')));
		$this->bindModel(array('hasMany' => array('Membership' => array('className' => 'Membership','conditions'=>'Membership.end_date>NOW() OR Membership.end_date IS NULL'))));
		
		//$this->Membership->Person->unbindModel(array('hasMany' => array('Membership')));
		//$this->Membership->Person->bindModel(array('hasMany'=>array('Party'=>array('className'=>'Membership','conditions'=>''))));
		
		$returner=$this->find('first',array('conditions'=>array('Institution.id'=>$id),'recursive'=>2));
		
		//now look at each person to get party info (later should get delegation info as well?)
		foreach ($returner['Membership'] as $key=>$membership) {
			$returner['Membership'][$key]['Person']['Parties']='';
			$others = $this->Membership->find('all',array('conditions'=>array('Person.id'=>$membership['person_id'],'Institution.type'=>'party')));
			foreach ($others as $other) {
				$returner['Membership'][$key]['Person']['Parties']=$returner['Membership'][$key]['Person']['Parties'].$other['Institution']['name'];
			}
		}
		
		return $returner;
	}
	function get($id) {
		
		
		return $this->find('first',array('conditions'=>array('Institution.id'=>$id),'recursive'=>2));
	}
	function getPast($id) {
		$this->unbindModel(array('hasMany' => array('Membership')));
		$this->bindModel(array('hasMany' => array('Membership' => array('className' => 'Membership','conditions'=>'Membership.end_date<NOW()'))));
		
		return $this->find('first',array('conditions'=>array('Institution.id'=>$id),'recursive'=>2));
	}

}
?>

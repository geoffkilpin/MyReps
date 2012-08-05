<?php
class PeopleController extends AppController {

	var $name = 'People';
	//var $helpers = array('Html',,'Javascript');
	public $components = array('RequestHandler');
	
	public function view($id) {
		//$persons = $this->Person->find('first', array('conditions' => array('Person.id' => 1)));
        //$persons = $this->Person->find('first',array('conditions'=>array('Person.id'=>$id),'recursive'=>2));
        $this->set('person', $this->Person->get($id));
    }
    
    function xml($id) {
		$this->layoutPath = 'xml'; 
		 $data = $this->Person->find('first',array('conditions'=>array('Person.id'=>$id),'recursive'=>2));
		 $xmlArray = array('root' => array('child' => 'value'));
		$xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags')); // You can use Xml::build() too
		$xmlString = $xmlObject->asXML();
		 $this->set('data', $xmlString);
		
	}
    
    public function updateWikipedia($id) {
		$persons = $this->Person->updateWikipedia($id);
        $this->set('person', $persons);
	}

}
?>

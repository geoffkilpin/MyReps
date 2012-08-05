<?php
class InstitutionsController extends AppController {

	var $name = 'Institutions';
	public $components = array('RequestHandler');
	
	public function view($id) {
		//$persons = $this->Person->find('first', array('conditions' => array('Person.id' => 1)));
        $current = $this->Institution->getCurrent($id);
        $past = $this->Institution->getPast($id);
        $this->set('institution', $current);
        $this->set('past', $past);
    }
    
    public function mp_twitter() {
		
	}

}
?>

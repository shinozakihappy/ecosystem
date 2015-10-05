<?php
class SamplesController extends AppController{
	
	public $uses = array('sample');

    public function index(){
    	
    	var_dump($this->sample);
        $this->set('samples',$this->sample->find('all'));
    }
}

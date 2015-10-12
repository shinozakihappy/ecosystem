<?php
class TopPagesController extends AppController{
	
	public $uses = array('sample');

    public function index(){
    	
    	if(Configure::read("debug")>=2){
//    		debug($this->sample);
    	}
        $this->set('samples',$this->sample->find('all'));
    }
}

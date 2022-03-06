<?php


class MainController extends Controller {

    
    
    function render(){

        $message = new Messages($this->db);
		$message->key = 'Second message';
		$message->messages = 'This is the second message inserted from code';
		$message->save();
        
        $messages = new Messages($this->db);
	    $msg = $messages->all()[1];

        $this->f3->set('msg',$msg);
        echo \Template::instance()->render('template.htm');
       
    }

}


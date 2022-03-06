<?php


class MainController extends Controller {

    function render($f3){
        $f3->set('name','world');
        echo \Template::instance()->render('template.htm');
       
    }

    function sayhello(){

        echo 'Hello , babe';
    }
}


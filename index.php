<?php

require_once("vendor/autoload.php");
$f3=Base::instance();


class AppController{ //these functions run before and after main and about class

    function beforeroute(){

        echo 'before routing- ';

    }

    function afterroute(){

        echo ' after routing- ';

    }
}


class Main extends AppController{

    function render(){

        echo 'Hello, world';
    }

    function sayhello(){

        echo 'Hello , babe';
    }
}


class AboutPage extends AppController{

    

    function render(){

        echo 'This is about page';
    }

}


$f3->route('GET /','Main->render');
$f3->route('GET /hello','Main->sayhello');
$f3->route('GET /about','AboutPage->render');

$f3->run();
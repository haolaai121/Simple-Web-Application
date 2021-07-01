<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Home/Show/1/2

class Home extends Controller{
    public $HomeModel; 
    
    function __construct(){
        //Call Models
        $this->HomeModel = $this->model("Home");
    }

    // Must have Default()
    function Default(){
        // Call Views
        $this->view("home", [
            
        ]);

    }

}
?>
<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Signin/Show/1/2

class Signin extends Controller{
    public $SigninModel; 
    
    function __construct(){
        //Call Models
        $this->SigninModel = $this->model("SigninModel");
    }
    // Must have Default()
    function Default(){
        // Call Views
        $this->view("signin", [
            
        ]);

    }

    

}
?>
<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Signup/Show/1/2

class Signup extends Controller{

    // Must have Default()
    function Default(){
        //Call Models
        $teo = $this->model("SigninModel");
        // Call Views
        $this->view("signup", [
            
        ]);

    }

    function Show($a, $b){        
        // Call Models
        
    }
}
?>
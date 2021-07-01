<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Signin/Show/1/2

class Signin extends Controller{

    // Must have Default()
    function Default(){
        //Call Models
        $teo = $this->model("SigninModel");
        // Call Views
        $this->view("signin", [
            
        ]);

    }

    function Show($a, $b){        
        // Call Models
        
    }

}
?>
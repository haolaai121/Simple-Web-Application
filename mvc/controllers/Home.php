<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Home/Show/1/2

class Home extends Controller{

    // Must have Default()
    function Default(){
        //Call Models
        $teo = $this->model("SigninModel");
        // Call Views
        $this->view("home", [
            
        ]);

    }

    function Show($a, $b){        
        // Call Models
        
    }
}
?>
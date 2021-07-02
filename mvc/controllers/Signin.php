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
    function UserSignin(){
        //get data submit
        if (isset($_POST["btnSignin"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            //checking SQL injection with prepared statment
            $kq = $this->SigninModel->CheckSignin($username,$password);
            //Checking Signin data
            //Deal with session to navigate web to home or signin page
            //Show result 
            $this->view("signin", [
                "result" -> $kq
                ]);
        }
        
        

        
    }
    

}
?>
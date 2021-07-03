<?php

//simple URL example with MVC model
// http://localhost/php-mvc-master/Signup/Show/1/2

class Signup extends Controller{
    public $SignupModel; 

    function __construct(){
        //Call Models
        $this->SignupModel = $this->model("SignupModel");
    }
    function Default(){
        
        // Call Views
        $this->view("signup", [
 
        ]);

    }

    public function UserSignup(){
        //get data submit
        if (isset($_POST["btnSignup"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $confirm_password = $_POST["confirm_password"];
            //checking SQL injection with prepared statment
            //checking input
            //check username is unique

            //check password and confirm_password
            if($password!=$confirm_password)
            {
                //Show AJAX notification
                $kq=false;
            }
            //hash the password for storing
            $password=password_hash($password,PASSWORD_DEFAULT);

            //insert into database table users
            $kq = $this->SignupModel->InsertUser($username,$password,$email);
            echo $kq;
            //Show result (Fail/OK)
            $this->view("signup", [
                "result" -> $kq,
                ]);
        
        }
    }
}
?>
<?php
class SignupModel extends DB{

    public function InsertUser($username,$password,$email){
        $qr="INSERT INTO users VALUES(null,'$username','$password','$email')";
        $result=false;
        if (mysqli_query($this->con, $qr)){
            $result=true;
        }
        return json_encode($result);
    }
}
?>
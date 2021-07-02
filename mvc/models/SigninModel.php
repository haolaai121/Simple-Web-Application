<?php
class SigninModel extends DB{
    
    public function CheckSignin($username,$password){
        $qr = "SELECT * FROM users WHERE username ='$username'";
        $rows = mysqli_query($this->con, $qr);
        $kq = false;
        if(mysql_nums_rows==1){
            $hashed_password = rows["password"];
            if (password_verify($password,$hashed_password)){
                $kq = true;
            }
        }
        return $kq;
    }

}
?>
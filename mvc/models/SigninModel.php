<?php
class SigninModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function Login(){
        $qr = "SELECT * FROM users";
        return mysqli_query($this->con, $qr);
    }

}
?>
<?php
class User{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null,$username=null,$password=null)
    {
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
    }
    
    public static function logInUser($usr, mysqli $conn)
    {
        $querry= "SELECT * FROM user WHERE username='$usr->username' AND password='$usr->password'";
       
            return $conn->query($querry);
    }

}
?>
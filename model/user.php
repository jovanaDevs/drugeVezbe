<?php
class User{
    public $id;
    public $username;
    public $password;
    public function __construct($id=null,$password=null,$username=null)
    {
        $this->id=$id;
        $this->password=$password;
        $this->username=$username;

    }
    public static function logInUser($usr,mysqli $conn)
    {
        $query="SELECT * FROM user WHERE username='$usr->username' and password='$usr->password'";
        return $conn->query($query);
    }
}



?>
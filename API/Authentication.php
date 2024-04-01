<?php
$pdo = new PDO("mysql:host=localhost;dbname=builderbuddy", 'root', '');
if($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $user = new Authentication();
    $user->set_data($_POST['username'],$_POST['password']);
    echo json_encode(get_object_vars($user));
}

class Authentication{
    public $username;
    public $password;

    function set_data($username,$password){
        $this->username = $username;
        $this->password = $password;
    }
}
?>
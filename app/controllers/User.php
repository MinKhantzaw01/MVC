<?php
class User extends Controller{
    public function __construct()
    {
        
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data=[
                "name"=>$_POST['name'],
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
                "confirm_password"=>$_POST['confirm_password'],
                "name_err"=>'',
                "email_err"=>'',
                "password_err"=>'',
                "confirm_password_err"=>''
            ];
            if(empty($data['name'])){
                $data['name_err']="User Name must be supply!";
            }
            if(empty($data['email'])){
                $data['email_err']="Email must be supply!";
            }
            if(empty($data['password'])){
                $data['password_err']="Password must be supply!";
            }
            if(empty($data['confirm_password'])){
                $data['confirm_password_err']="Confirm_password must be supply!";
            }else{
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err']="Password do not match";
                }
            }
            if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                echo "Already Good!";
            }else{
                $this->view("user/register",$data);
            }
        }else{
        $this->view("user/register");

        }
      
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data=[
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
                "email_err"=>'',
                "password_err"=>''
            ];
            if(empty($data['email'])){
                $data['email_err']="Email must be supply!";
            }
            if(empty($data['password'])){
                $data['password_err']="Password must be supply!";
            }
            if(empty($data['email_err']) && empty($data['password_err'])){
                echo "Already Good!";
            }else{
                $this->view("user/login",$data);
            }
        }else{
        $this->view("user/login");

        }
    }
}


?>
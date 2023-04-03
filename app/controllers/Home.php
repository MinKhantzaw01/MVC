<?php
class Home{
    public function __construct()
    {
        echo "I am a constructor method of " .__CLASS__. " class <br>";
    }
    public function index(){
        echo "I am a index method of  " .__CLASS__. " class <br>";
        
    }
    public function show(){
        echo "I am a show method of " .__CLASS__. " class <br>";
        
    }
}


?>
<?php
class CategoryModel{
    private $db;
    public function __construct()
    {
        $this->db=new Database();
    }
    public function getAllCategory(){
        $this->db->query("SELECT * FROM category");
        return $this->db->multipleSet();
    }
}


?>
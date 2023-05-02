<?php
class Category extends Controller{
    public function __construct()
    {
        $this->catModel = $this->model('CategoryModel');
    }
    public function home(){
        $data=$this->catModel->getAllCategory();
        $this->view('admin/category/home',$data );
    }
}


?>
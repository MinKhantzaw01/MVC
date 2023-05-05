<?php
class Post extends Controller
{
    public function __construct()
    {
        $this->postModel=$this->model("PostModel");
        $this->catModel=$this->model("CategoryModel");
    }

    public function home($param=[])
    {
        $data=[
            'cats'=>'',
            'posts'=>''
        ];
        $data['cats']=$this->catModel->getAllCategory();
        $data['posts']=$this->postModel->getPostById($param[0]);
        $this->view("admin/post/home",$data);
    }

    public function create()
    {
        $data=[
            'title'=>'',
            'desc'=>'',
            'file'=>'',
            'content'=>'',
            'title_err'=>'',
            'desc_err'=>'',
            'file_err'=>'',
            'content_err'=>'',
            'cats'=>''
        ];
        $data['cats']=$this->catModel->getAllCategory();

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {  
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $root=dirname(dirname(dirname(__FILE__)));
            $files=$_FILES['file']; 

            $data['title']=$_POST['title'];
            $data['desc']=$_POST['desc'];
            $data['content']=$_POST['content']; 

            if(empty($data['title']))
            {
                $data['title_err']="Title must Supply!";
            }

            if(empty($data['desc']))
            {
                $data['desc_err']="Description must Supply!";
            }

            if(empty($data['content']))
            {
                $data['content_err']="Content must Supply!";
            }
             
            if(empty($data['title_err']) && empty($data['desc_err']) && empty($data['content_err']))
            {
                if(!empty($files['name']))
                {
                    move_uploaded_file($files['tmp_name'],$root.'/public/assets/uploads/'.$files['name']);

                    if($this->postModel->insetPost($_POST['cat_id'], $data['title'], $data['desc'], $files['name'], $data['content']))
                    {
                        flash("pis", "Post Insert Successfully!");
                        redirect(URLROOT. "post/home/1");
                    } else {
                        $this->view("admin/post/create",$data);
                    }
                } else {
                    $this->view("admin/post/create", $data);
                }
            } else {
            $this->view("admin/post/create",$data);
            }
        } else {
            $this->view("admin/post/create",$data);
        }
    }


}
?>
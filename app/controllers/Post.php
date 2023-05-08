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
        $data['posts']=$this->postModel->getPostByCatId($param[0]);
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

    public function show($param=[])
    {
        $post=$this->postModel->getPostById($param[0]);
        $this->view("admin/post/show",$post);
    }

    public function edit($param=[])
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
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
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $root=dirname(dirname(dirname(__FILE__)));
            $files=$_FILES['file']; 
            $filename=$_FILES['file']['name'];

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
                } else {
                    $filename=$_POST['old_file'];
                }
                $curId=getCurrentId();
                deleteCurrentId();
                if($this->postModel->updateData($curId,$_POST['cat_id'],$data['title'],$data['desc'],$filename,$data['content']))
                {
                    flash("pes","Post Edit Success,Thank");
                    redirect(URLROOT."post/show/".$curId);
                } else {
                    flash("pef","Post Edit Fail,Try Again");
                    redirect(URLROOT."post/edit/".$curId);
                }
            } else {
            $this->view("admin/post/edit",$data);
            }
        } else {
            setCurrentId($param[0]);
            $data['cats']=$this->catModel->getAllCategory();
            $data['post']=$this->postModel->getPostById($param[0]);
            $this->view("admin/post/edit",$data);
        }
    }

    public function delete($param=[])
    {
        $data=[
            'cats'=>'',
            'posts'=>''
        ];
        if($this->postModel->deletePost($param[0]))
        {
            redirect(URLROOT."post/home/1");
        } else {
            flash("del_fal","Post Delete Fail!");
            $data['cats']=$this->catModel->getAllCategory();
            $data['posts']=$this->postModel->getPostByCatId($param[0]);
            $this->view("admin/post/home",$data);
        }
        
    }

}
?>

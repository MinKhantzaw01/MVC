<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
    <div class="col-md-3">
            <!--Sidebar start-->
            <div class="card rounded-0">
                <div class="card-header">
                    <h2>Category</h2>
                </div>
                <div class="card-block">
                    <!-- Sidebar menu Start-->
                    <ul class="list-group">
                        <?php foreach($data["cats"] as $cat) : ?>
                        <li class="list-group-item rounded-0 d-flex justify-content-between">
                            <span><?php echo $cat->name?></span>
                            <span>
                            <a href="<?php echo URLROOT.'category/edit/'.$cat->id;    ?>"><i class="fa fa-edit text-warning"></i></a>
                            <a href="#"><i class="fa fa-trash text-danger"></i></a></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <!-- Sidebar menu End-->
                </div>
            </div>
            <!--Sidebar End-->
        </div>
        
        <div class="col-md-5 offset-md-1 my-5">
        <?php flash('register_success');  
                flash('login_fail');
                 ?>
                <h1 class="text-center text-info mb-3">Edit Category</h1>
                <form method="post" action="<?php echo URLROOT."Category/edit";  ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control rounded-0 <?php echo !empty($data["name
                        _err"]) ? 'is-invalid' : '';?>" id="name" name="name" value="<?php echo $data['currentCat']->name;?>" >
                        <span class="text-danger"><?php echo !empty($data["name_err"]) ? $data["name_err"] : '';?></span>
                    </div>
                        <div style="float:right;">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary ">Update</button>
                        </div>
                    
                    
                </form>  
                
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php";?>

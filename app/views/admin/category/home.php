<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>

<div class="container-fluid p-0">
    <div class="row no-gutters">
    <div class="col-md-3">
            <!--Sidebar start-->
            <div class="card rounded-0">
                <div class="card-header">
                    <h2>Category</h2></h2>
                </div>
                <div class="card-block">
                    <!-- Sidebar menu Start-->
                    <ul class="list-group">
                        <?php foreach($data as $cat) : ?>
                        <li class="list-group-item rounded-0">
                            <a href="#" class="text-info" style="text-decoration: none;"><?php echo $cat->name?></a>
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
                <h1 class="text-center text-info mb-3">Create Category</h1>
                <form method="post" action="<?php echo URLROOT."user/login";  ?>" class="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Nmae</label>
                        <input type="text" class="form-control rounded-0 <?php echo !empty($data["name
                        _err"]) ? 'is-invalid' : '';?>" id="name" aria-describedby="name
                        " name="name">
                        <span class="text-danger"><?php echo !empty($data["name_err"]) ? $data["name_err"] : '';?></span>
                        </div>
                        <div style="float:right;">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary ">Login</button>
                        </div>
                    </div>
                    
                </form>
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php";?>

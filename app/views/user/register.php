<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>
<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- register form start -->
                <h1 class="text-center text-info mb-3">Register Form</h1>
                <form method="post" action="<?php echo URLROOT."user/register";  ?>">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control rounded-0 <?php echo !empty($data["name_err"]) ? 'is-invalid' : '';?>" id="username" aria-describedby="username" name="name" >
                        <span class="text-danger"><?php echo !empty($data["name_err"]) ? $data["name_err"] : '';?></span>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-0 <?php echo !empty($data["email_err"]) ? 'is-invalid' : '';?>" id="email" aria-describedby="email" name="email">
                        <span class="text-danger"><?php echo !empty($data["email_err"]) ? $data["email_err"] : '';?></span>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-0 <?php echo !empty($data["password_err"]) ? 'is-invalid' : '';?>" id="password" aria-describedby="password" name="password">
                        <span class="text-danger"><?php echo !empty($data["password_err"]) ? $data["password_err"] : '';?></span>
                    </div>
                 
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control rounded-0 <?php echo !empty($data["confirm_password_err"]) ? 'is-invalid' : '';?>" id="confirm_password" aria-describedby="password" name="confirm_password">
                        <span class="text-danger"><?php echo !empty($data["confirm_password_err"]) ? $data["confirm_password_err"] : '';?></span>
                    </div>
                    <div class="row justify-content-between no-gutter" style=" float: left;flex-wrap: nowrap;">
                        <a href="<?php echo URLROOT.'user/login';   ?>" class="link-warning" style="    text-decoration: none;">Already Register, Please Login!</a>
                        <div style="margin-left: 34px;">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    
                </form>
                <!-- register form end -->
            </div>
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php";?>
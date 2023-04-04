<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>
<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card bg-light p-5">
                <!-- register form start -->
                <h1 class="text-center text-info mb-3">Login To Post</h1>
                <form>
                   
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control rounded-0" id="email" aria-describedby="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control rounded-0" id="password" aria-describedby="password" name="password">
                    </div>
                 
                    <div class="row justify-content-between no-gutter" style=" float: left;flex-wrap: nowrap;">
                        <a href="<?php echo URLROOT.'user/register';   ?>" class="link-warning" style="    text-decoration: none;">Not a user yet!, Please Register</a>
                        <div style="margin-left: 50px;">
                            <button class="btn btn-outline-secondary">Cancle</button>
                            <button class="btn btn-primary ">Login</button>
                        </div>
                    </div>
                    
                </form>
                <!-- register form end -->
            </div>
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php";?>
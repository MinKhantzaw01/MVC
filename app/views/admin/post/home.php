<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>

<div class="container-fluid">
    <div class="container my-4">
        <?php flash("del_suc"); ?>
        <a href="<?php echo URLROOT.'post/create';  ?>" class="btn btn-primary mb-3 text-black">Create</a>
        <div class="row">
            <div class="col-md-4">
                <ul class="list-group rounded-0">
                    <?php  foreach($data['cats'] as $cat) :   ?>
                    <li class="list-group-item">
                        <a href="<?php echo URLROOT . 'post/home/'.$cat->id; ?>" style="text-decoration:none;--bs-link-hover-color: black;">
                            <h6><?php echo $cat->name;   ?></h6>
                        </a>
                    </li>
                    <?php   endforeach;   ?>
                </ul>
            </div>
            <div class="col-md-8">
               <?php foreach($data['posts'] as $post) :  ?>
                <div class="card rounded-0 mb-3">
                    <div class="card-header bg-dark text-white rounded-0">
                        <?php echo $post->title; ?>
                    </div>
                    <div class="card-body p-2">
                    <p><?php echo $post->description;  ?></p>
                        <div class="row justify-content-end">
                            <a href="<?php  echo URLROOT."post/show/".$post->id;?>" class="btn btn-success btn-sm text-white" style="width: 80px;">Details</a>
                            <a href="<?php  echo URLROOT."post/edit/".$post->id;?>" class="btn btn-warning btn-sm text-white" style="width: 80px;margin-left: 10px;">Edit</a>
                            <a href="<?php  echo URLROOT."post/delete/".$post->id;?>" class="btn btn-danger btn-sm text-white" style="width: 80px;margin-left: 10px;margin-right: 10px;">Delete</a>
                        </div>
                    </div>
                </div>
                <?php  endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php require_once APPROOT."/views/inc/footer.php";?>



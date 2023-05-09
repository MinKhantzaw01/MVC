<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>

<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-10">
            <?php flash("pes");  ?>
            <div class="card p-3">
                <div class="card-header">
                    <h6><?php echo $data->title;    ?></h6>
                </div>
                <div class="card-body" style="margin-left: 72px;">
                    <img src="<?php echo URLROOT."assets/uploads/".$data->image;?>" alt="Picture">
                    <p><?php echo $data->content;     ?></p>
                </div>
            </div>
            
            <div class="row justify-content-between no-gutters px-3 mt-3">
                <a href="<?php echo URLROOT."post/edit/".$data->id;  ?>" class="btn btn-success rounded">Edit</a>
                <a href="<?php echo URLROOT."post/home/".$data->cat_id;  ?>" class="btn btn-success rounded mt-3">Back</a>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT."/views/inc/footer.php";?>
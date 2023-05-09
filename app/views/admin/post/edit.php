<?php require_once APPROOT."/views/inc/header.php";?>
<?php require_once APPROOT."/views/inc/nav.php";?>

<div class="container-fluid">
    <div class="container my-5">
        <div class="col-md-8 offset-md-2">
            <div class="card p-5">
            <h1 class="text-center text-info mb-3">Post Edit Form</h1>
                <form method="post" action="<?php echo URLROOT."post/edit";  ?>" enctype="multipart/form-data">
                <?php flash("pef"); ?>
                    <div class="mb-3">
                        <label for="cat_id" class="form-label">Post Category</label>
                        <select name="cat_id" id="cat_id" class="form-control rounded-0">
                            <?php foreach($data['cats'] as $cat) :?>
                                <?php if($cat->id == $data['post']->cat_id) : ?>
                                    <option value="<?php echo $cat->id ?>" selected><?php echo $cat->name;  ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $cat->id ?>"><?php echo $cat->name;  ?></option>
                                <?php endif; ?>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control rounded-0 <?php echo !empty($data["title_err"]) ? 'is-invalid' : '';?>" id="title" aria-describedby="username" name="title" value="<?php echo $data['post']->title;  ?>">
                        <span class="text-danger"><?php echo !empty($data["title_err"]) ? $data["title_err"] : '';?></span>
                    </div>
                    <div class="form-group">
                        <label for="desc">Post Description</label>
                        <textarea class="form-control rounded-0 <?php echo !empty($data["desc_err"]) ? 'is-invalid' : '';?>" id="desc" style="height: 100px" name="desc">
                        <?php echo $data['post']->description;  ?>
                        </textarea>
                        <span class="text-danger"><?php echo !empty($data["desc_err"]) ? $data["desc_err"] : '';?></span>
                    </div>
                    <div class="mt-3">
                        <label for="file" class="form-label">File Input</label>
                        <input class="form-control bg-primary text-white" type="file" id="file" name="file">
                        <span class="text-danger"><?php echo !empty($data["file_err"]) ? $data["file_err"] : '';?></span>
                        <input type="hidden" name="old_file" value="<?php echo $data['post']->iamge; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Post Content</label>
                        <textarea class="form-control rounded-0 <?php echo !empty($data["content_err"]) ? 'is-invalid' : '';?>" id="content" style="height: 100px" name="content">
                        <?php echo $data['post']->content;  ?>
                        </textarea>   
                        <span class="text-danger"><?php echo !empty($data["content_err"]) ? $data["content_err"] : '';?></span>                    
                    </div>    
                    <div style="float:right;" class="mt-3">
                        <button class="btn btn-outline-danger">Cancel</button>
                        <button class="btn btn-outline-primary">Update</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT."/views/inc/footer.php";?>
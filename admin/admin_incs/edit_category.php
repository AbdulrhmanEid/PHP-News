<form action="" method="post">
                    <div class="form-group">
                        <label for="">Category Title</label>
                        <?php
                        $sql = "SELECT * FROM `categories` WHERE `cat_id`='$edit_id'";
                        $allcategories = mysqli_query($conn,$sql) ;
                        while($row =mysqli_fetch_assoc($allcategories) ):
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
    
                            ?>
                        <input type="text" name="title" id="" value="<?=$cat_title?>" class="form-control">
                        <?php endwhile ?>
                        <!-- update -->
                         <?php
                         if(isset($_POST['update_category'])):
                            $cat_title =$_POST['title'];
                            $sql = "UPDATE `categories` SET`cat_title`='$cat_title' WHERE `cat_id`='$edit_id'";
                            $updateCategory = mysqli_query($conn , $sql);
                            header("Location:categories.php");
                         endif;
                         ?>
                    </div>
                    <div class="form-group"> 
                    <button type="submit" name="update_category" class="btn-block btn btn-warning">Update Category</button>
                    </div>
                </form>
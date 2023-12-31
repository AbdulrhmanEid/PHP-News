<?php include "./admin_incs/admin_header.php";
include "./admin_incs/admin_nav.php";
?>

<!-- Navigation -->


<div id="page-wrapper">

    <div class="container-fluid">
        <h1 class="page-header">
            PHP News
            <small>Dashboard</small>
        </h1>

        <!-- Page Heading -->
        <div class="row">

            <div class="col-md-6">
                <table  class="table table-bordered table-hover table-striped table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $allcategories = mysqli_query($conn,$sql) ;
                    while($row =mysqli_fetch_assoc($allcategories) ):
                        $cat_id = $row['cat_id'];
                        $cat_title = $row['cat_title'];

                    ?>

                        <tr>
                            <td scope="row"> <?=$cat_id?></td>
                            <td> <?=$cat_title?></td>
                            <td><a href="categories.php?edit_id=<?=$cat_id?>" ><i class="fa fa-edit"></i></a></td>
                            <td><a href="categories.php?del_id=<?=$cat_id?>" ><i class="fa fa-trash"></i></a></td>
                          
                        </tr>
                        <?php 
                        endwhile; ?>
                        
                    </tbody>
                    <?php
                 if(isset($_GET['del_id'])){
                    $del_id = $_GET['del_id'];
                     $del_sql = "DELETE FROM `categories` WHERE `cat_id`=  '$del_id'" ;
                     $deletecategory = mysqli_query($conn,$del_sql) ;
                     header("location:categories.php");

                 }
                 ?>
                </table></table>
                


            </div> <!-- col-md-6 -->
            <div class="col-md-6">
                <?php
                if(isset($_POST['add_category'])){
                    $cat_title = $_POST['title'];
                    // echo $cat_title ;
                    if(!empty($cat_title)){
                        // insert code 
                       $sqlinsert =" INSERT INTO `categories`(`cat_title`) VALUES ('$cat_title')";
                       $sqlCategory = mysqli_query($conn,$sqlinsert);
                       if($sqlCategory){
                        header("location:categories.php");
                       }else{
                        
                       }


                    } else { ?>

                    <div class="alert-danger">
                        <h1 class="text-center text-danger"> Enter Title</h1>
                    </div>

                  <?php  }//else
                }// isset
                ?>
                <form action="" method="post"> 
                    <div class="form-group">
                        <label for="">Category Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group"> 
                    <button type="submit" name="add_category" class="btn-block btn btn-primary">Add New Category</button>
                    </div>
                </form>
                <!-- update form  -->
                <!-- edit -->
                <?php
                if(isset($_GET['edit_id'])):
                    $edit_id = $_GET['edit_id'];
                    include'./admin_incs/edit_category.php';
                endif;
                    
                ?>

                



            </div> <!-- col-md-6 -->
        </div><!-- /.row -->
    </div> <!-- /#page-wrapper -->


</div>
<!-- /.container-fluid -->

<?php include "./admin_incs/admin_footer.php";

?>
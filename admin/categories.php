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
                            <td><a href="#" ></a><i class="fa fa-edit"></i></a></td>
                            <td><a href="#" ></a><i class="fa fa-trash"></i></a></td>
                          
                        </tr>
                        <?php 
                        endwhile; ?>
                        
                    </tbody>
                </table></table>


            </div> <!-- col-md-6 -->
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Category Title</label>
                        <input type="text" name="title" id="" class="form-control">
                    </div>
                    <div class="form-group"> 
                    <button type="submit" name="add_category" class="btn-block btn btn-primary">Add New Category</button>
                    </div>
                </form>
                



            </div> <!-- col-md-6 -->
        </div><!-- /.row -->
    </div> <!-- /#page-wrapper -->


</div>
<!-- /.container-fluid -->

<?php include "./admin_incs/admin_footer.php";

?>
<?php
if(isset($_POST['submit'])):
     $keyword = $_POST['txtName'] ;
     
    
 endif;

$sqlposts = "SELECT * FROM `posts` WHERE `post_tags`LIKE '%$keyword%'";
$allposts = mysqli_query( $conn,$sqlposts);
 $count = mysqli_num_rows($allposts);
 if($count == 0 ){?>
    <div class="alert alert-danger text-center" >
        <h1 class="">No Result</h1>
    </div> 
    

<?php }; 
    
  
// /echo $count ;

while($row = mysqli_fetch_assoc($allposts) ):
    $post_id = $row['post_id'];
    $post_title = $row['post_title'];
    $post_category = $row['post_category'];
    $post_date = $row['post_date'];
    $post_image = $row['post_image'];
    // $post_content = $row['post_content'];
    $post_content =substr($row['post_content'],0,100); 
    $post_tags = $row['post_tags'];
    $post_author = $row['post_author'];
    $post_comment_count = $row['post_comment_count'];
   ?>
    <div class="col-md-8">
                <h1 class="page-header">
                    PHP News
                    <small>Abdulrhman Eid</small>
                </h1>
                <!-- First Blog Post -->
                <h2>
                <a href="post.php?pid=<?=$post_id?>"><?=$post_title?></a>
                </h2>
                    
                  
                
                <p class="lead">
                    by <a href="index.php"><?=$post_author?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?=$post_date?> </p>
                <hr>
                <img class="img-responsive" src="images/<?=$post_image?>" alt="">
                <hr>
                <p><?=$post_content?></p>
                <a class="btn btn-primary" href="post.php?pid=<?=$post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                
                </div>    <!--  col-md-8 -->

                <?php  endwhile ; ?>
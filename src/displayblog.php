<?php
session_start();
include "connection.php";
$status1 = "PUBLIC";
$status2 = "Approved";
$query = "SELECT * FROM `POST` where status ='$status1' and status_by_admin ='$status2'  ORDER BY post_id DESC "; ?>
<div id="display_blog_msin_div"><?php
                                $result = mysqli_query($conn, $query);
                                foreach ($result as $row) {
                                  $query1 = "SELECT name,image FROM Users where user_id=" . $row['user_id'] . "";
                                  $result1 = mysqli_query($conn, $query1);
                                  $row1 = mysqli_fetch_assoc($result1);
                                  $str = substr($row['content'], 0, 200);
                                  $str1 = "$str..."; ?>
    <div class="eachPost">
      <p href="blogger_post.php?action=onlybloggerpost&id='<?php echo $row['user_id'] ?> '">
        <img src='<?php echo $row1['image'] ?>' id="image_of_blogger">

        <span id="name_of_blogger"><?php echo $row1['name'] ?> </span></p>

      <p href="detailaboutblog.php?action1=detail&id='<?php echo $row['post_id'] ?> '&name='<?php echo $row1['name'] ?>'"></p>

      <div class="content_image_sql">
        <img style="border-radius:10px;" src=<?php echo $row['image'] ?> class="img_blog_sql">
      </div>

      <div class="content_Post">

        <p id="id_of_publishing_time"> Published At: <?php echo $row['published_at'] ?></p>

        <div id="id_of_blog_content" class="display_content_sql">

          <h2 id="id_of_blog_title"><?php echo $row['blog_title'] ?></h2>
          <p class="details_of_content"><?php echo $str1 ?></p>
        </div>
      </div>

    </div></a>

  <?php } ?>
</div>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/utils.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div><?php include "header.php"; ?></div>
  <div id="edit_notification"> <?php if (isset($_SESSION['edit'])) {

                                  echo "<center><h2 style='color:#808080;margin-top:5%;'>Your POST is Waiting For Admin <span><b>Approval<b></span></h2></center>";
                                } ?></div>
  <?php
  $id = $_SESSION['userid'];
  include "connection.php";
  $query = "SELECT * FROM `POST` where user_id='$id'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $query1 = "SELECT name,image FROM Users where user_id='$id'";
  $result1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_assoc($result1); ?>
  <div>
    <?php echo ' <p id="name_of_blogger_post" >' . $row1['name'] . '</p>';
    foreach ($result as $row) {

      $str = substr($row['content'], 0, 200);
      $str1 = "$str...";
    ?>


      <hr>
      <a href="detailaboutblog.php?action1=detail&id=<?php echo $row['post_id'] ?>&name=<?php echo $row1['name'] ?>">
        <div class="display_blog_sql">
          <div id="id_of_blog_content" class="display_content_sql">

            <h2 id="id_of_blog_title"><?php echo $row['blog_title'] ?></h2>

            <div class="content_image_sql">
              <img style="border-radius:10px;" src='<?php echo $row['image'] ?>' id="image_of_blog_post">
            </div>
            <div class="content_Post">
              <a href="editpost.php?action2=detail&id=<?php echo $row['post_id'] ?>"><p id="id_of_publishing_time_post"> Published At:<?php echo $row['published_at'] ?></p>
                <p class="details_of_content"><? echo $str1 ?></p>
            </div>


          </div>

       

            <input type="submit" value="EDIT POST" class="edit_post">
      </a>
  </div>
  </div></a>
  <hr><?php } ?> </div>

<?php include "footer.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="code.js"></script>
</body>

</html>
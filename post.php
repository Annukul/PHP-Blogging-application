<?php
require './inc/config.php';
require './inc/db.php';


$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM redblog_posts WHERE id=' . $id;
$result = mysqli_query($conn, $query);

$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);

// Add comments
if (isset($_POST['com-submit'])) {
  require './inc/db2.php';

  $com_username = mysqli_real_escape_string($conn, $_POST['com-username']);
  $com_email = mysqli_real_escape_string($conn, $_POST['com-email']);
  $comment = mysqli_real_escape_string($conn, $_POST['comment']);
  $hashtags = mysqli_real_escape_string($conn, $_POST['com-hashtags']);

  $query3 = "INSERT INTO comments(com_username, com_email, com_com, com_hashtags) VALUES('$com_username', '$com_email', '$comment', '$hashtags');";
 
  if (mysqli_query($conn, $query3)) {
    header('Location: '.ROOT_URL.'post.php');
  } else {
    echo 'Error '.mysqli_error($conn);
  }
}

// Request for comments  
require './inc/db2.php';         
$query2 = 'SELECT * FROM comments;';
$result2 = mysqli_query($conn, $query2);

$comments = mysqli_fetch_all($result2, MYSQLI_ASSOC);
mysqli_free_result($result2);
mysqli_close($conn);



?>


<?php include_once './inc/header.php'; ?>
<?php include_once './inc/navbar.php'; ?>

<div class="full-post">
  <div class="full-post-inside">
    <a class="go-back-btn" href="<?php echo ROOT_URL; ?>main.php">Go Back</a>

    <h1 class="full-post-title"><?php echo $post['title']; ?></h1>
    <br>
    <small><strong>Created on: <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></strong></small>
    <br>
    <p class="full-post-p">
      <?php echo $post['body']; ?>
    </p>
    <a class="edit-post-btn" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit post</a>
  </div>


  <div class="full-post-author">
    <?php include_once './inc/side-bar.php'; ?>
  </div>
</div>

<div class="comments">
  <h1 class="com-h1">Comments</h1>
  <?php foreach($comments as $com) : ?>
    <div class="com-inside">
      <h3 class="com-h3"><?php echo $com['com_username']; ?></h3>
      <h5 class="com-h5">Email: <?php echo $com['com_email']; ?></h5>
      <p class="com-p"><?php echo $com['com_com']; ?></p>
      <small class="com-small">Hashtags: <?php echo $com['com_hashtags']; ?></small>
    </div>
  <?php endforeach; ?>

  <hr>

  <div class="add-com">
    <h2>Add Comment</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="com-form">
      <div class="cols">
        <label>Name</label>
        <input type="text" name="com-username" class="input titleIn">
      </div>

      <div class="cols">
        <label>Email</label>
        <input type="text" name="com-email" class="input authorIn">
      </div>

      <div class="cols">
        <label>Hashtags</label>
        <input type="text" name="com-hashtags" class="input authorIn">
      </div>

      <div class="cols">
        <label>Comment</label>
        <textarea name="comment" cols="30" rows="10" class="input bodyIn"></textarea>
      </div>
      <input type="submit" value="Add comment" name="com-submit" class="submit-btn com-btn">
    </form>
    </form>
  </div>
</div>


<?php include_once './inc/footer.php'; ?>
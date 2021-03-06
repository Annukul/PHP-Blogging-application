<?php
require './inc/config.php';
require './inc/db.php';

if (isset($_POST['submit'])) {

  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);

  $query = "
    UPDATE redblog_posts
    SET title = '$title', author = '$author', body = '$body'
    WHERE id = '$update_id'
      ";

  if (mysqli_query($conn, $query)) {
    header('Location: '.ROOT_URL.'main.php');
  } else {
    echo 'Error '.mysqli_error($conn);
  }
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$query = 'SELECT * FROM redblog_posts WHERE id='. $id;
$result = mysqli_query($conn, $query);

$post = mysqli_fetch_assoc($result);
mysqli_free_result($result);

mysqli_close($conn);

?>


<?php include_once './inc/header.php'; ?>
<?php include_once './inc/navbar.php'; ?>

<div class="form-cont">
    <h1 class="form-h1">Edit Post</h1>
    <a href="<?php echo ROOT_URL; ?>main.php" class="cancel-create">Cancel</a>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="cols">
            <label>Title</label>
            <input type="text" name="title" class="input titleIn" value="<?php echo $post['title']; ?>">
        </div>

        <div class="cols">
            <label>Author</label>
            <input type="text" name="author" class="input authorIn" value="<?php echo $post['author']; ?>">
        </div>

        <div class="cols">
            <label>Body</label>
            <textarea name="body" cols="30" rows="10" class="input bodyIn"><?php echo $post['body']; ?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
        <input type="submit" value="Update post" name="submit" class="submit-btn">
    </form>
</div>

<?php include_once './inc/footer.php'; ?>

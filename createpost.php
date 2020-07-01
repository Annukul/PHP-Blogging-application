<?php
require './inc/config.php';
require './inc/db.php';

if (isset($_POST['submit'])) {
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);

  $query = "INSERT INTO redblog_posts(title, author, body) VALUES('$title', '$author', '$body')";

  if (mysqli_query($conn, $query)) {
    header('Location: '.ROOT_URL.'main.php');
  } else {
    echo 'Error '.mysqli_error($conn);
  }
}

?>


<?php include_once './inc/header.php'; ?>
<?php include_once './inc/navbar.php'; ?>

<div class="form-cont">
    <h1 class="form-h1">Create a new post</h1>
    <a href="<?php echo ROOT_URL; ?>main.php" class="cancel-create">Cancel</a>
    <div class="newauthor">
      <button type="button" name="button" class="new-author"><a>New author?</a></button>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="cols">
            <label>Title</label>
            <input type="text" name="title" class="input titleIn">
        </div>

        <div class="cols">
            <label>Author</label>
            <input type="text" name="author" class="input authorIn">
        </div>

        <div class="cols">
            <label>Image</label>
            <input type="file" name="imageUpload" class="input authorIn">
        </div>

        <div class="cols">
            <label>Body</label>
            <textarea name="body" cols="30" rows="10" class="input bodyIn"></textarea>
        </div>
        <input type="submit" value="Create post" name="submit" class="submit-btn">
    </form>
</div>

<?php include_once './inc/footer.php'; ?>

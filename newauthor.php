<?php
require './inc/config.php';
require './inc/db.php';

if (isset($_POST['submit'])) {

  $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
  $author_about = mysqli_real_escape_string($conn, $_POST['author_about']);

  $query ='INSERT INTO redblog_authors(author_name, author_about) VALUES('$author_name', '$author_about')';

  if (mysqli_query($conn, $query)) {
    header('Location'.ROOT_URL.'main.php');
  } else {
    echo 'Error '.mysqli_error($conn);
  }
}



?>


<?php include_once './inc/header.php'; ?>
<?php include_once './inc/navbar.php'; ?>

<div class="form-cont">
    <h1 class="form-h1">Add a new author</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="cols">
            <label>Name</label>
            <input type="text" name="author_name" class="input titleIn">
        </div>

        <div class="cols">
            <label>About</label>
            <textarea name="author_about" cols="30" rows="10" class="input bodyIn"></textarea>
        </div>
        <input type="submit" value="Add" name="submit" class="submit-btn">
    </form>
</div>

<?php include_once './inc/footer.php'; ?>

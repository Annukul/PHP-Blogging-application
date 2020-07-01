<?php
require './inc/config.php';
require './inc/db.php';

session_start();

if (isset($_SESSION['userId'])) {
    $name = $_SESSION['name'];
    #First request for posts
    $query = 'SELECT * FROM redblog_posts;';
    $result = mysqli_query($conn, $query);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

    mysqli_close($conn);
} else {
    header("Location: ./index.php");
}




?>

<div class="black">
    <p class="black_p">Logged in as: <span><strong><?php echo $name; ?></strong></span></p>
    <?php if (isset($_SESSION['userId'])) {
        echo '<form class="logout-form" action="./inc/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
            </form>';
    } ?>
</div>
<?php include_once './inc/header.php'; ?>
<?php include_once './inc/nav_ex.php'; ?>

<h1 class="post-head">Recent Posts</h1>
<div class="posts">
    <div class="left">
        <?php foreach ($posts as $post) : ?>
            <div class="post">
                <h3 class="post-title"><?php echo $post['title']; ?></h3>
                <small class="post-author">Created on: <?php echo $post['created_at']; ?> by <strong><?php echo $post['author']; ?></strong></small>
                <img src="" alt="" class="post-img">
                <p class="post-body">
                    <?php echo $post['body']; ?>
                </p>
                <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="view-post"><strong>View post...</strong></a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Side Bar !-->
    <?php include_once './inc/side-bar.php'; ?>
</div>

<?php include_once './inc/footer.php'; ?>
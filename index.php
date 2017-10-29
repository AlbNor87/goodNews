<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
require __DIR__.'/header.php';

// if (isset($_GET['title'])) {
//
//   $title = $_GET['title'];
//   $name = $_GET['name'];
//   $content = $_GET['content'];
//   $newPost[] = [
//
//     'title' => $title,
//     'author' => $name,
//     'avatar' => '',
//     'content' => $content,
//     'date' => time(),
//     'likes' => 15,
//
//   ];
//
// array_push($posts, $newPost);
//
// }

$sortBy = 'date'; //Default is set sort posts by date

if (isset($_GET['sortBy'])) { //Get what value to sort by

  $sortBy = $_GET['sortBy']; //Set it...

}

$posts = val_sort($posts, $sortBy); //Sort it!!!

?>
<body>

  <div class="header">
    <p>THE</p> <h1>MATRIX NEWS</h1>
  </div>

  <div class="main-container">

    <div class="news-feed">


        <form class="form align-right" action="index.php">

          <label for="sortBy">Sort posts by</label>
          <select name="sortBy">
            <option value="date">Date</option>
            <option value="title">Title</option>
            <option value="author">Author</option>
          </select>

          <input type="submit" value="Refresh">

        </form>

      <?php foreach ($posts as $post): ?>

        <div class="post">

          <div class="post-header">

            <div class="title">
              <?php echo strtoupper($post['title']); ?>
            </div>

            <div class="date">
              <?php echo date('Y-m-d', $post['date']); ?>
            </div>
          </div>

          <div class="post-body">

            <div class="author">
              <div class="avatar">
                <?php echo $post['avatar']; ?>
              </div>
              <?php echo $post['author']; ?>
            </div><!-- /author -->

            <br>

            <div class="content">
              <?php echo $post['content']; ?>
            </div>
          </div> <!-- /post-body -->

          <div class="post-footer">

            <div class="likes">
              <?php echo "Likes: " . $post['likes'];?>
            </div>

          </div>

        </div> <!-- /post -->
      <?php endforeach; ?>

        <form class="form" action="index.php" method="get">

          <h1>MAKE YOUR OWN COMMENT</h1>

          <label for="title">Subject</label>
          <input type="text" name="title" required>

          <label for="name">Name</label>
          <input type="text" name="name" required>

          <br>
          <br>

          <label for="content">Message</label>
          <br>
          <textarea name="content" rows="8" cols="80"></textarea>

          <br>
          <br>

          <button type="submit" name="button">Submit</button>

        </form>

    </div><!-- /news-feed -->

  </div><!-- /main-container -->

</body>

</html>

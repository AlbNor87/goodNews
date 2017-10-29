<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.
require __DIR__.'/data.php';
require __DIR__.'/functions.php';
require __DIR__.'/header.php';

$posts = val_sort($posts, 'date');

?>

    <body>

      <div class="header">
        <p>THE</p> <h1>MATRIX DAILY</h1>
      </div>

      <div class="main-container">

        <div class="news-feed">

          <?php foreach ($posts as $post): ?>

            <div class="post">

              <div class="post-header">

                <div class="title">
                  <?php echo $post['title']; ?>
                </div>

                <div class="date">
                  <?php echo $post['date']; ?>
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
        </div><!-- /news-feed -->



      </div><!-- /main-container -->

    </body>
</html>

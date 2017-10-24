<?php
declare(strict_types=1);
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP-only file.
require __DIR__.'/data.php';
require __DIR__.'/fuctions.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
        <link href="matrix.regular.ttf" rel="stylesheet">
        <title>The Matrix News Feed</title>
    </head>
    <body>

      <div class="header">
        <p>THE</p> <h1>MATRIX</h1>
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
              </div> <!-- /post-grid -->

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

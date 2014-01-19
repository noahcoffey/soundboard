<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brian Graham Sound Board</title>
    <link rel="stylesheet" href="stylesheets/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
        <h1>Brian Graham Sound Board</h1>
      </div>
    </div>
    
    <div class="row">
      <div class="large-12 columns">

        <ul class="small-block-grid-2 large-block-grid-3 buttons">
        </ul>
        
      </div>
    </div>

    <?php foreach ($sounds as $file=>$sound) { ?>
      <audio src="sounds/<?=$file?>" autobuffer="true" title="<?=$sound['title']?>"></audio>
    <?php } ?>

    <script src="bower_components/jquery/jquery.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

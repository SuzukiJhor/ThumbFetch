<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Download Youtube Video Thumbnail | JhordS.</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

</head>

<body>
  <form action="download.php" method="POST">
    <header>Download Thumbnail</header>
    <div class="url-input">
      <span class="title">Paste video Url</span>
      <div class="field">
        <input type="text" placeholder="https://www.youtube.com/watch?v=-IaYO1ENrT4" name="videoUrl"/>
        <input type="hidden" class="hidden-input" id="imurl" name="imurl" />
        <span class="bottom-line"></span>
      </div>
    </div>
    <div class="preview-area">
      <img class="thumbnail" src="" alt="">
      <i class="icon fas fa-cloud-download-alt"></i>
      <span>Paste video url to see preview</span>
    </div>
    <button class="download-btn" type="submit" name="download">Download Thumbnail</button>
  </form>

 
 
  <script src="script.js"></script>
</body>

</html>
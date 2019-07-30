<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  <ul>
  <?php
  $arr = ['导航1','导航2','导航3'];
  for($i=0; $i<count($arr); $i++){
    echo '<li><a href="http://">'.$arr[$i]. '</a></li>';
  }
  ?>
    
  </ul>
</body>
</html>
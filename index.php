<?php

  // 引入类 Import
  require_once('inc/require.php');

  if(isset($_GET['id'])) {
    
    $url_c = new url();

    // 获取目标网址 Get destination URL
    $url = $url_c->get_url($_GET['id']);
    // 重定向至目标网址 Redirect to destination URL
    if($url) {
      header('Location: ' . $url);
      exit;
    }

  }

?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8" />   
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo get_title() . ' - ' . get_description(); ?></title>
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="theme-color" content="#ff4665" />
    <meta name="msapplication-TileColor" content="#ff4665" />
    <link type="text/css" rel="stylesheet" href="asset/css/main.css" />
  </head>
  <body>
    <div class="wrap">
      <div class="meta">
        <h2 class="title"><?php echo get_title(); ?></h2>
        <h3 class="description"><?php echo get_description(); ?></h3>
      </div>
      <div class="link-area">
        <input id="url" type="url" placeholder="https://" spellcheck="false" onkeydown="keyEnter()" required />
        <input id="submit" type="button" value="Generate" onclick="APP.fn.setUrl(this)" />
      </div>
      <div class="footer">Copyright &copy; <?php echo date("Y"); ?> <a href="https://github.com/Caringor/" title="Carignor" target="_blank">Caringor</a> & <a href="https://github.com/qNFCp" title="qNFCp" target="_blank">qNFCp</a></div>
    </div>
  </body>
  <!-- JS -->
  <script type="text/javascript" src="asset/js/app.js"></script>
</html>

    </div>
  </body>
  <!-- JS -->
  <script type="text/javascript" src="asset/js/app.js"></script>
  <script type="text/javascript">
  function keyEnter(){
    if(event.keyCode==13){
      APP.fn.setUrl(document.getElementById("submit"));
    }
  }
  document.getElementById("url").focus();
  </script>
</html>

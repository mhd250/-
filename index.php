<?php
/*
 *by:学者李
 *论坛ID67891
 *博客：https://handsl.cn
 */
$a = array("a"=>"a","b"=>"b","c"=>"c","e"=>"e","d"=>"d","f"=>"f");
$type = array_rand($a);
$url = "https://api.handsl.cn/API/hitokoto.php?type={$type}"; 
$array_data = json_decode(file_get_contents($url),true);
$content = $array_data['hitokoto'];
//echo $content;
$from = $array_data['from'];
if ($from=="") {
$from = "匿名";
} 

?>
<!doctype html>
<html lang="zh-cn">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
        <script crossorigin="anonymous" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
        src="https://lib.baomitu.com/jquery/3.4.1/jquery.min.js"></script>
    <title>一言-学者李</title>
</head>
  <body>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">一言</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link" href="https://api.handsl.cn">API</a>
        <a class="nav-link" href="https://handsl.cn">博客</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading"><?php echo $content; ?></h1>
    <p class="lead">— —<?php echo $from; ?></p>
    <p class="lead">
      <a  href="/." class="btn btn-lg btn-secondary">再来一条</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Avatar：<a href="https://handsl.cn">学者李</a></p>
    </div>
  </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	
</script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    	
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    	
    </script>
  </body>
</html>
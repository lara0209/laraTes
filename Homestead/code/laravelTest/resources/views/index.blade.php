<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz55</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slide.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/openclose.js"></script>
<script src="js/fixmenu.js"></script>
<script src="js/fixmenu_pagetop.js"></script>
<script src="js/ddmenu_min.js"></script>
<script src="js/script.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="home">

<div id="container">

<header>
<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE COMPANY"></a></h1>
<!--スライドショー-->
<aside id="mainimg">
<img src="images/0.png" alt="" class="slide0">
<img src="images/1.jpg" alt="" class="slide1">
<img src="images/2.jpg" alt="" class="slide2">
<img src="images/3.jpg" alt="" class="slide3">
</aside>
</header>

<!--  -->
<nav id="menubar" class="nav-fix-pos">
<ul class="inner">
<li><a href="index.html">HOME<span>ホーム</span></a></li>
<li><a href="about.html">ABOUT<span>当サイトについて</span></a></li>
<li><a href="javascript:void(0)" class="cursor-default">WORKS<span>業務内容</span></a>
	<ul class="ddmenu">
	<li><a href="works.html">メニュー</a></li>
	<li><a href="works.html">メニュー</a></li>
	<li><a href="works.html">メニュー</a></li>
	<li><a href="works.html">メニュー</a></li>
	<li><a href="works.html">メニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">RECRUIT<span>採用情報</span></a></li>
<li><a href="contact.html">CONTACT<span>お問い合わせ</span></a></li>
</ul>
</nav>

<div id="contents">

<div class="inner">

<section>
<!-- --------------------------------------------------------- -->
<!-- microCMS -->
<h2><p id="topic">TOPICS</p><span>トピックス</span></h2>

<br>
<form name="sample1" action="">
    <p>
        http://homestead.test/api/<input type="text" name="endpoint" size="10" value="ver">
 <input type='button' value='JSON取得' onclick='myfunc()'>
</p>
</form>
 <ul id="text1"></ul>
<br><br><br><br>
<!-- --------------------------------------------------------- -->

<div class="list-column-container">

<div class="list-column">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>メニュータイトル</h4>
<p>ここに説明を入れます。</p>
</div>
<p class="btn1"><a href="#">もっとみる</a></p>
</div>

</div>
<!--/.list-column-container-->

</section>

<section id="new">

</section>

<footer>

<div id="copyright">
<ul class="icon">
<li><a href="#"><img src="images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="images/icon_instagram.png" alt="Instagram"></a></li>
<li><a href="#"><img src="images/icon_youtube.png" alt="TouTube"></a></li>
</ul>
<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>
<!--/#copyright-->

</footer>

</div>
<!--/#container-->

<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理-->
<script>
// open_close("menubar_hdr", "menubar-s");
</script>

<!--「WORKS」の子メニュー-->
<script>
	// open_close("menubar_hdr2", "menubar-s2");
</script>

</body>
</html>

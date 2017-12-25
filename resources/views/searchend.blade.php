<html><head>
    <title>高鐵訂票系統</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo --><!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">

        <ul>
            <li><a href="index.php">首頁</a></li>
            <li><a href="search.php">高鐵</a></li>
            <li><a href="aboutus.php">關於我們</a></li>
            <!--<li><a href="generic.html">登入</a></li>-->
            <!--<li><a href="generic.html">訂票紀錄</a></li>-->
            <li><a href="cutser.php">線上客服</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <div class="inner">
            <h1>高鐵班次查詢與訂票</h1>
        </div>
    </div>

    <div id="main">
        <div class="inner">
            @foreach($posts	as $post)
                <td>{{$post->year}}</td>
                <td>{{$post->month}}</td>
                <td>{{$post->day}}</td>
                <td>{{$post->出發}}</td>
                <td>{{$post->抵達}}</td>
            @endforeach


    <script type="text/javascript">
        alert('訂票前請先註冊或登入～')
    </script>
    <meta http-equiv="refresh" content="0.1;URL=addmember.php" />

<?php
//}
}
?>



<!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Follow</h2>
                <ul class="icons">
                    <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                    <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
                </ul>
            </section>
            <ul class="copyright">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </footer>
</div>
<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<!--[if lte IE 8]><script src="js/ie/respond.min.js"></script><![endif]-->
<script src="js/main.js"></script>

</body>
</html>
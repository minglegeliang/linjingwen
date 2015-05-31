<!DOCTYPE html>
<!-- saved from url=(0025)http://blog.toruneko.net/ -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="gMSvLHvnWi">
    <meta name="keywords" content="Toruneko,特鲁尼克,戴建豪,PHP,Java,设计模式,Windows Phone,C#">
    <meta name="description" content="戴建豪(Toruneko)的博客.">
	<link rel="stylesheet" type="text/css" href="./Common/Css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Common/Css/blog.css">
	<link rel="stylesheet" type="text/css" href="./View/Css/blogList.css">
<title>BlogList</title>
    <link rel="shortcut icon" href="http://toruneko.sinaapp.com/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="BlogList.class.php">minglegeliang</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="">Home</a></li>
					<li class="active"><a href="BlogList.class.php">Blog</a></li>
					<li><a href="">Public Api</a></li>
					<li><a href="" >RedLib</a></li>
                    <li><a href="" >DNA SE</a></li>
					<li><a href="">RSS</a></li>
				</ul>
				<div class="navbar-form navbar-right" >
					<button type="submit" class="btn btn-default" onclick="javascript:window.location.href='LoginForm.class.php'">退出</button>
				</div>
			</div>
		</div>
	</div>
    <div class="container-fluid blog-container"><div class="row">
	<div class="col-md-9 blog-container-list">
	<div class="page-header">
	<h2><a href=""></a></h2>
</div>
<?php include'./Controller/Handle/GetMessage_BlogList.class.php' ;?>
<?php foreach ($allMessage as $key => $value){ ?>
<div class="panel">
	<h2><a href="#"><?php echo $value['Blog_header']; ?></a></h2>
	<div class="panel-body"><pre><?php echo $value['Blog_content']; ?></pre></div>
	<div class="panel-footer">
		<span>这里还没有足迹</span>
		创建于:<?php echo $value['Blog_time']; ?>		By minglegeliang </div>
</div>
<?php } ?>

<div class="page-header">
	<h2><a href="blog.class.php">这里可以跳转</a></h2>
</div>
<div class="panel">
	<div class="panel-body"><pre>省略很多字</pre></div>
	<div class="panel-footer">
		<span>这里还没有足迹</span>
		创建于：2015-01-21		By Toruneko	</div>
</div>

<form action="./Controller/Handle/SendMessage_BlogList.class.php" method="post">
<div class="Blog_write">
	<h4>写博客</h4>
	<p>标题：<input type="text" name="Blog_header"></p>
	<textarea class="Blog_content" name="Blog_content"></textarea>
	<input type="submit" value="发表" >
</div>
<ul id="yw1" class="pagination"><li class=" "><a href="BlogList.class.php">&lt;&lt;</a></li>
<li class=" "><a href="BlogList.class.php">&lt;</a></li>
<li class=" active"><a href="BlogList.class.php">1</a></li>
<li class=""><a href="BlogList.class.php?page=2">2</a></li>
<li class=""><a href="BlogList.class.php?page=3">3</a></li>
<li class=""><a href="BlogList.class.php?page=4">4</a></li>
<li class=""><a href="BlogList.class.php?page=2">&gt;</a></li>
<li class=""><a href="BlogList.class.php?page=4">&gt;&gt;</a></li></ul>	</div>
	<div class="col-md-3 blog-container-sidebar" id="sidebar">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#archive"></span>
        <h6>日期归档</h6>
    </div>
    
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <div class="list-group" id="category">
        <a href="BlogList.class.php" class="list-group-item">
	<span class="badge">6</span>
	...</a><a href="BlogList.class.php" class="list-group-item">
	<span class="badge">1</span>
	...</a><a href="BlogList.class.php" class="list-group-item">
	<span class="badge">4</span>
	...</a><a href="BlogList.class.php" class="list-group-item">
	<span class="badge">4</span>
	...</a><a href="BlogList.class.php" class="list-group-item">
	<span class="badge">8</span>
	...</a><a href="BlogList.class.php" class="list-group-item">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#neighbor"></span>
        <h6>隔壁小屋</h6>
    </div>
    
	<div class="container-fluid text-center">
		© 2014 - 2015		Toruneko. All rights reserved.
		Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
            <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="./Common/Image/poweredby-117x12px.gif">
	    </a>
    </div>
<script src="./Common/Js/hm.js"></script>
<script type="text/javascript" src="./Common/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Common/Js/blog.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
var offset = 20;

var current = window.location.href;
$('.nav li').each(function(){
    var href = $(this).find('a').attr('href');
    if(href == current){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }else if(current.match('^'+href+'.*')){
        $('.nav li.active').removeClass('active');
        $(this).addClass('active');
    }
});


var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e259f8f91c0fa95b00c128e2cb9c9503";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();

/*]]>*/
</script>


</body></html>
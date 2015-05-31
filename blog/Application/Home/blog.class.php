<!DOCTYPE html>
<!-- saved from url=(0027)http://blog.toruneko.net/35 -->
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baidu-site-verification" content="gMSvLHvnWi">
    <meta name="keywords" content="Toruneko,特鲁尼克,戴建豪,PHP,Java,设计模式,Windows Phone,C#">
    <meta name="description" content="这里可以跳转">
	<link rel="stylesheet" type="text/css" href="./Common/Css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./Common/Css/blog.css">
<link rel="stylesheet" type="text/css" href="./View/Css/sunburst.css">
<link rel="stylesheet" type="text/css" href="./View/Css/ContactForm.css">
<title>Blog</title>
    <link rel="shortcut icon" href="http://toruneko.sinaapp.com/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/html5shiv.min.js"></script>
	<script type="text/javascript" src="http://toruneko.sinaapp.com/assets/js/respond.min.js"></script>
	<![endif]-->
<script src="./Common/Js/hm.js"></script><script src="./View/Js/share.js"></script><link rel="stylesheet" href="http://bdimg.share.baidu.com/static/api/css/share_style2_24.css"></head>
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
					<li><a href="" target="_blank">RedLib</a></li>
                    <li><a href="" target="_blank">DNA SE</a></li>
					<li><a href="">RSS</a></li>
				</ul>
				<div class="navbar-form navbar-right" >
					<button type="submit" class="btn btn-default" onclick="javascript:window.location.href='LoginForm.class.php'">退出</button>
				</div>
			</div>
		</div>
	</div>

    <div class="container-fluid blog-container"><div class="row">
    <div class="col-md-12 blog-container-breadcrumbs">
        <ol class="breadcrumb">
<li><a href="">Home</a></li><li><a href="BlogList.class.php">Blog</a></li><li><a href="">...</a></li><li class="active">这里可以跳转</li></ol>    </div>
    <div class="col-md-9 blog-container-content">
        <div class="page-header"><span><a href="blog.class.php#comment" class="btn btn-default">留下足迹</a></span>
        	<span><a href="blog.class.php#panel-body" class="btn btn-default">编辑</a></span>
        	<span><a href="blog.class.php" class="btn btn-default" name="Blog_id">删除</a></span>
        <h2>这里可以跳转</h2></div>
        <div class="panel">
            <div class="panel-body">
                <pre>省略很多字</pre>
            </div>
        </div>

        <ul class="pager">
            <li class="previous"><a href="blog.class.php">← 上一篇</a></li>
            <li class="next"><a href="blog.class.php">下一篇 →</a></li>
        </ul>
        <?php include'./Controller/Handle/GetMessage_ContactForm.class.php' ;?>
		<?php foreach ($allMessage as $key => $value){ ?>
        <div class="commentView">
        	<div class="navbar-form navbar-right" >
				<button type="submit" class="btn btn-default">回复</button>
			</div>
        	<p> 昵称: <?php echo $value['ContactForm_username'];?> 时间: <?php echo $value['ContactForm_time'];?> </p>
        	<div class="comment_content"> 
        		<?php echo $value['ContactForm_content'];?> 
        	</div>
        	<div class="form-group" id="commentReply">
        		<div class="col-md-6">
            		<input class="form-control" type="text" disabled="disabled">
            		<input value="0" name="ContactForm[fid]" id="ContactForm_fid" type="hidden">
            		<div class="col-md-2">
            			<a class="btn btn-default cancel" href="http://blog.toruneko.net/35##">取消</a>        
       				</div>        
        		</div>
            </div>

        </div>
        <hr/>
        <?php } ?>
        
        <div class="page-header"><h4>留下足迹</h4><a name="comment"></a></div>
        <ul class="list-group commentList" id="commentList">
            <span class="empty"></span>        </ul>
                <form class="form-horizontal" id="commentBox" action="./Controller/Handle/SendMessage_ContactForm.class.php" method="post">    


    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_username">昵称 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="ContactForm_username" id="ContactForm_username" type="text">        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_email">邮箱 <span class="required">*</span></label>        <div class="col-md-6">
            <input class="form-control" name="ContactForm_email" id="ContactForm_email" type="text">        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label required" for="ContactForm_content">留言 <span class="required">*</span></label>        <div class="col-md-6">
            <textarea class="form-control" style="height:150px" name="ContactForm_content" id="ContactForm_content"></textarea>        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="form-group">
                    <label class="col-md-2 control-label" for="ContactForm_verifyCode">验证码</label>            <div class="col-md-2">
                <img height="34px" width="116px" id="verifyCode" src="./View/captcha" alt="">            </div>
            <div class="col-md-2">
                <input class="form-control" name="ContactForm[verifyCode]" id="ContactForm_verifyCode" type="text">            </div>
                <div class="col-md-offset-1 col-md-1">
            <input class="btn btn-default" type="submit"  value="提交">        </div>
        <div class="col-md-2"></div>
    </div>
</form>    </div>
    <div class="col-md-3 blog-container-sidebar" id="sidebar">
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#archive"></span>
        <h6>日期归档</h6>
    </div>
    <div class="list-group" id="archive">
   
    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#category"></span>
        <h6>分类标签</h6>
    </div>
    <div class="list-group" id="category">
        <a href="blog.class.php" class="list-group-item">
	<span class="badge">6</span>
	...</a><a href="blog.class.php" class="list-group-item">
	<span class="badge">1</span>
	...</a><a href="blog.class.php" class="list-group-item">
	<span class="badge">4</span>
	...</a><a href="blog.class.php" class="list-group-item">
	<span class="badge">4</span>
	...</a><a href="blog.class.php" class="list-group-item">
	<span class="badge">8</span>
	...</a><a href="blog.class.php" class="list-group-item">

    <div class="page-header">
        <span class="glyphicon glyphicon-chevron-up sidebar-toggle" for="#neighbor"></span>
        <h6>隔壁小屋</h6>
    </div>
    
	<div class="container-fluid text-center">
		© 2014 - 2015		Toruneko. All rights reserved.
		Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.        <a href="http://sae.sina.com.cn/">
            <img title="Sae App Engine" alt="Sae App Engine" width="117" height="12" src="./Commom/Image/poweredby-117x12px.gif">
	    </a>
    </div>
<script type="text/javascript" src="./Commom/Js/jquery.min.js"></script>
<script type="text/javascript" src="./Commom/Js/bootstrap.min.js"></script>
<script type="text/javascript" src="./Commom/Js/blog.js"></script>
<script type="text/javascript" src="./View/Js/prettify.min.js"></script>
<script type="text/javascript">
/*<![CDATA[*/
prettyPrint();
var offset = 75;
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];

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
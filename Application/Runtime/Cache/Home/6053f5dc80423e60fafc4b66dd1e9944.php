<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	
	<title>修改信息</title>

    
	<link rel="stylesheet" type="text/css" href="/testbench/tp/Public/Home/css/theme.css" />
	<link href="/testbench/tp/Public/Home/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.error {color: #FF0000;}
	</style>

    
    <script src="/testbench/tp/Public/Home/js/jquery-2.2.4.min.js"></script>
    <script src="/testbench/tp/Public/Home/js/bootstrap.min.js"></script>

</head>

<body>
	
	<nav class="navbar navbar-default" role="navigation">
	   <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" 
	         data-target="#example-navbar-collapse">
	         <span class="sr-only">切换导航</span>
	         <span class="icon-bar"></span>
	         <span class="icon-bar"></span>
	         <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/testbench/tp/index.php/Home/Index/index">留言板系统</a>
	   </div>
	   <div class="collapse navbar-collapse" id="example-navbar-collapse">
	      <ul class="nav navbar-nav">
	         <li><a href="/testbench/tp/index.php/Home/Index/index">留言板列表</a></li>
	         <li><a href="/testbench/tp/index.php/Home/User/writeMessage">编写留言</a></li>
	         <li class="active"><a href="/testbench/tp/index.php/Home/User/userInfo">修改信息</a></li>
	         <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	               其他功能 <b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu">
	               <li><a href="/testbench/tp/index.php/Home/User/uploadFile">上传文件</a></li>
	               <li><a href="#">上传文件列表</a></li>
	               <li><a href="#">Jasper Report</a></li>
	               <li class="divider"></li>
	               <li><a href="#">分离的链接</a></li>
	               <li class="divider"></li>
	               <li><a href="#">另一个分离的链接</a></li>
	            </ul>
	         </li>
	      </ul>
	   </div>
	</nav>

	
    <form action="/testbench/tp/index.php/Home/User/userInfo" method="post" class="basic-grey" enctype="multipart/form-data">
    	<h1>Contact Form
    		<span>Please fill all the texts in the fields.</span>
    	</h1>
    	<label>
    		<span>Telephone :</span>
    		<input id="telephone" type="text" name="telephone" placeholder="Your telephone number" />
    	</label>
    	<label>
    		<span>Email :</span>
    		<input id="email" type="text" name="email" placeholder="Your email" />
    	</label>
	    <label>
		    <span>&nbsp;</span>
		    <input type="submit" class="button" value="Send" />
	    </label>
    </form>

	<select name="selection_theme">
    	<option value="basic-grey" selected="selected">basic-grey</option>
    	<option value="bootstrap-frm">bootstrap-frm</option>
    	<option value="elegant-aero">elegant-aero</option>
    	<option value="smart-green">smart-green</option>
    	<option value="white-pink">white-pink</option>
    	<option value="dark-matter">dark-matter</option>
	</select>

	
	
    <script type="text/javascript">
    	$(document).ready(function(){
  			$("select[name='selection_theme']").change(function(){
  				var checkValue=$("select[name='selection_theme']").val(); 
  				alert(checkValue);
			    $("form").attr("class", checkValue);
		 	});
		});
    </script>

</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	
	<title>文件列表 -- 61</title> 

    
	<link href="/testbench/tp/Public/Home/css/bootstrap.min.css" rel="stylesheet">
	<style>  
	.keleyitable {  
	width: 800px;  
	}  
	  
	.keleyitable table, td, th {  
	border: 1px solid green;margin-top:10px;  
	}  
	.klytd {width:100px;text-align:right  
	}  
	.hvttd {  
	width:500px}  
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
	         <li><a href="/testbench/tp/index.php/Home/User/userInfo">修改信息</a></li>
	         <li class="dropdown active">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	               其他功能 <b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu">
	               <li><a href="/testbench/tp/index.php/Home/User/uploadFile">上传文件</a></li>
	               <li class="active"><a href="/testbench/tp/index.php/Home/Index/fileList">上传文件列表</a></li>
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

	
	<div style="margin:0px auto;" class="keleyitable"><h2>文件列表</h2>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><table>
				<tr><td class = klytd>上传人：</td><td class = hvttd><?php echo ($vo["username"]); ?></td></tr>
				<tr><td class = klytd>电话号码：</td><td class = hvttd><?php echo ($telephone); ?></td></tr>
				<tr><td class = klytd>电子邮箱：</td><td class = hvttd><?php echo ($email); ?></td></tr>
				<tr><td class = klytd>文件名：</td><td class = hvttd><?php echo ($vo["file_origin_name"]); ?></td></tr>
				<tr><td class = klytd>文件类型：</td><td class = hvttd><?php echo ($vo["filetype"]); ?></td></tr>
				<tr><td class = klytd>备注：</td><td class = hvttd><?php echo ($vo["notes"]); ?></td></tr>
				<tr><td class = klytd>日期：</td><td class = hvttd><?php echo ($vo["uploadtime"]); ?></td></tr>
			</table><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>  

	
	
</body>
</html>
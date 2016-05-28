<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>ThinkphpHelper V0.342 - for Thinkphp3.2.2</title>
  <meta name="keywords" content="ThinkphpHelper,Thinkphp代码自动生成" />
  <meta name="description" content="ThinkphpHelper,Thinkphp代码自动生成工具" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="sjj">
  <script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.js"></script> <!-- jQuery -->
  <!-- Stylesheets -->
  <link href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/font-awesome.css">
  <!-- jQuery UI -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/jquery-ui.css">
  <!-- Calendar -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/fullcalendar.css">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/prettyPhoto.css">
  <!-- Star rating -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/rateit.css">
  <!-- Date picker -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-datetimepicker.min.css">
  <!-- CLEditor -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/jquery.cleditor.css">
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/bootstrap-switch.css">
  <!-- Main stylesheet -->
  <link href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/style.css" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/style/widgets.css" rel="stylesheet">

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="href="/testbench/tp/<?php echo MODULE_PATH;?>/img/favicon/favicon.png">
  <script>
	$(document).ready(function(){
		$.post('/testbench/tp/index.php/TPH/Index/checkVersion',
			function(data){
				$('#version').html(data);
			}
		);
	});
  </script>
</head>

<body>
<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="#">ThinkphpHelper  V0.342<span class="bold"></span></a></h1>
            <p class="meta">代码生成工具　　　　<a href="https://github.com/zhuanqianfish/ThinkphpHelper" id="version"></a>
			如果觉得好用，请记得分享给你的好基友们！</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">

        </div>

        <!-- Data section -->

        <div class="col-md-4">
          <div class="header-data">

            <!-- Traffic data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with red background -->
                <i class="icon-signal bred"></i>
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="https://github.com/zhuanqianfish/ThinkphpHelper">项目</a> <em>GitHub</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="icon-user bblue"></i>
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="http://weibo.com/0371fish">微博</a> <em>WeiBo</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data
            <div class="hdata">
              <div class="mcol-left">
                <i class="icon-money bgreen"></i>
              </div>
              <div class="mcol-right">
                <p><a href="#">赞助</a><em>support</em></p>
              </div>
              <div class="clearfix"></div>
            </div>
			-->
          </div>
        </div>

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">导航</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li><a href="/testbench/tp/index.php/TPH/CreateM"><i class="icon-bar-chart"></i>生成模块布局</a></li>
		  <li><a href="/testbench/tp/index.php/TPH/CRUD/crud"><i class="icon-bar-chart"></i>生成CRUD代码</a></li>

		  <li><a href="/testbench/tp/index.php/TPH/MCode"><i class="icon-table"></i>模型代码生成</a></li>
          <li><a href="/testbench/tp/index.php/TPH/FCode"><i class="icon-tasks"></i>表单生成</a></li>

          <li><a href="/testbench/tp/index.php/TPH/Index/ui"><i class="icon-magic"></i>UI控件</a></li>
          <li><a href="/testbench/tp/index.php/TPH/Index/help"><i class="icon-calendar"></i>帮助</a></li>
        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar -->
<!-- Main bar -->
<style>
.mainbar{
font-size:14px;
padding:10px;
}

p{
	line-height:30px;
}
</style>
<div class="mainbar">

<h1>帮助</h1>
<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/1.png" alt="" /></a>

<p>测试中我使用的是Sqlite数据库，复制数据库文件到项目目录下，如使用Mysql数据库可以省略此步骤。</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/2.png" alt="" /></a>

<p>将TPH文件夹复制到项目目录下。</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/3.png" alt="" /></a>

<p>修改项目配置文件，主要是配置数据库信息。</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/4.png" alt="" /></a>

<p>访问一下TPH，应该看到以上界面</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/5.png" alt="" /></a>

<p>点击“生成模块选项”选择好目标模块，把需要生成的表名打上勾，点击生成。成功后，会有提示生成路径。此步骤主要是为了生成布局文件。</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/6.png" alt="" /></a>

<p>点击“生成CRUD代码”，注意选择和上一步相同的数据表，点击生成文件。</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/7.png" alt="" /></a>

<p>修改Index控制器下的index方法内容为：$this-&gt;show();如图</p><br>

<a href="http://weiyunstudio.qiniudn.com/1.png"><img class="alignnone" src="http://weiyunstudio.qiniudn.com/8.png" alt="" /></a>

<p>再次访问你的项目，have fun.</p><br>

&nbsp;

&nbsp;

<p>注：0.34版本之后的前台、后台代码都是根据TPH/Template文件夹下的文件生成的。你可以通过修改代码模板来创建适合自己需求的代码生成器。<br>
具体来说，View文件夹下对应的是前台代码，前台代码分两种，code结尾表示是代码片段，它被用于替换前台布局代码中<?php echo ($content); ?>的部分。<br>
Controller文件夹放置的是控制器代码模板。<br>
以layout结尾的文件夹都被认为是布局模板，布局模板文件夹下必须有一个名为layout.html的布局文件，布局模板文件夹的所有内容将会在"生成布局文件"这一步被复制到相应模块的View文件夹下。

</p><br>

</div>   
  
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2014 | <a href="http://weiyunstudio.com">WeiYunStudio.com</a> </p>
      </div>
    </div>
  </div>
</footer>

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span>

<!-- JS -->

<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery-ui-1.9.2.custom.min.js"></script> <!-- jQuery UI -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.rateit.min.js"></script> <!-- RateIt - Star rating -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->

<!-- jQuery Flot 绘图工具
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/excanvas.min.js"></script>
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.js"></script>
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.resize.js"></script>
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.pie.js"></script>
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.flot.stack.js"></script>
-->

<!-- jQuery Notification - Noty -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.noty.js"></script> <!-- jQuery Notify -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/themes/default.js"></script> <!-- jQuery Notify -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/layouts/bottom.js"></script> <!-- jQuery Notify -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/layouts/topRight.js"></script> <!-- jQuery Notify -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/layouts/top.js"></script> <!-- jQuery Notify -->
<!-- jQuery Notification ends -->

<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/sparklines.js"></script> <!-- Sparklines -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/jquery.cleditor.min.js"></script> <!-- CLEditor -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/bootstrap-switch.min.js"></script> <!-- Bootstrap Toggle -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/filter.js"></script> <!-- Filter for support page -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/custom.js"></script> <!-- Custom codes -->
<script src="/testbench/tp/<?php echo MODULE_PATH;?>/View/Public/js/charts.js"></script> <!-- Charts & Graphs -->


</body>
</html>
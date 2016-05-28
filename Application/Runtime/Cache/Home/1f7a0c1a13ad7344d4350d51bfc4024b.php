<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>[项目名]</title> 
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
            <h1><a href="/testbench/tp/index.php/Home ">[项目名]<span class="bold"></span></a></h1>
            <p class="meta">[项目描述]</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">
			
        </div>

        <!-- Data section -->

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
          <li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Fileinfo<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/testbench/tp/index.php/Home/Fileinfo/all">管理</a></li>
<li><a href="/testbench/tp/index.php/Home/Fileinfo/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> Message<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/testbench/tp/index.php/Home/Message/all">管理</a></li>
<li><a href="/testbench/tp/index.php/Home/Message/add">新建</a></li>
</ul>
</li>
<li class="has_sub"><a href="#"><i class="icon-list-alt"></i> User<span class="pull-right"><i class="icon-chevron-right"></i></span></a>
<ul>
<li><a href="/testbench/tp/index.php/Home/User/all">管理</a></li>
<li><a href="/testbench/tp/index.php/Home/User/add">新建</a></li>
</ul>
</li>

        </ul>
    </div>
    <!-- Sidebar ends -->
  	<!-- Main bar -->
	<div class="mainbar">
	<div class="container">
<div class="row">
	<div class="col-md-12">
		<div class="widget">
			<div class="widget-head">
			  <div class="pull-left" height="80">
			  管理fileinfo			  </div>
			  <div class="widget-icons pull-right">
				<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
				<a href="#" class="wclose"><i class="icon-remove"></i></a>
			  </div>  
			  <div class="clearfix"></div>
			</div>  
			<div class="widget-content" >
			<div class="padd">
				<div class="form quick-post">
							  <div class="form-horizontal">                        
								  <div class="form-group">
									<table class="table table-striped table-bordered table-hover">
<thead>
<tr>	
<th><center>id</center></th><th><center>username</center></th><th><center>file_origin_name</center></th><th><center>file_save_name</center></th><th><center>file_save_path</center></th><th><center>notes</center></th><th><center>filetype</center></th><th><center>uploadtime</center></th><td>操作</td>
</tr>
</thead>
<?php if(is_array($fileinfoList)): $i = 0; $__LIST__ = $fileinfoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($vo["id"]); ?></td><td><?php echo ($vo["username"]); ?></td><td><?php echo ($vo["file_origin_name"]); ?></td><td><?php echo ($vo["file_save_name"]); ?></td><td><?php echo ($vo["file_save_path"]); ?></td><td><?php echo ($vo["notes"]); ?></td><td><?php echo ($vo["filetype"]); ?></td><td><?php echo ($vo["uploadtime"]); ?></td><td><a href="<?php echo U('Fileinfo/edit/id/'.$vo[id]);?>">编辑</a> |
<a href="<?php echo U('Fileinfo/delete/id/'.$vo[id]);?>" onclick='return confirm("确定删除吗？")'>删除</a>
</td>
<tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<?php echo ($page); ?>								  </div>              
							  </div>
				</div><!--end  paddad-->
			</div>
		</div>	
		</div>	
	</div>
</div>
</div>
	</div>
</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2012 | <a href="#">Your Site</a> </p>
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
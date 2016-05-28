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
<script type="text/javascript">
db_prefix = '<?php echo ($db_prefix); ?>';

function getRelationCode(){	//获取手工关联代码
	var moduleName = $('#moduleName').val();
	var modelName =  $('#tableName1').val();
	var	mappingName = $('#mapping_name').val();
	var foreignKey = $("#foreignerKeyTableInfo input[type='radio']:checked").val();
	var relationForeignKey = $("#relationshipTableInfo input[type='radio']:checked").val();
	var mappingType = $('#mapping_type').val();
	var className = $('#tableName2').val();
	var relationTable = "";
	
	if($('#tableName3').attr('disabled') != 'disabled'){
		relationTable = $('#tableName3').val();
	}
	
	if(db_prefix != ''){
		modelName =  $('#tableName1').val().replace(db_prefix,'');
		className = $('#tableName2').val().replace(db_prefix,'');
	}
	$.post("/testbench/tp/index.php/TPH/MCode/relationshipModelCode", 
		{'modelName' : modelName, 'mappingName' : mappingName, 'foreignKey' : foreignKey, 'relationForeignKey' : relationForeignKey,
		'mappingType' : mappingType, 'className' : className, 'relationTable' : relationTable, 'moduleName': moduleName},
		function(data){
			$('#relationCode').html(data);
		}
	);
}

function creatRelationFile(){ //生成关联代码文件
	var code = $('#relationCode').val();
	var moduleName = $('#moduleName').val();
	var modelName =  $('#tableName1').val();
	$.post("/testbench/tp/index.php/TPH/MCode/createRelationshipModelFile", {'code' : code, 'moduleName' : moduleName, 'modelName' : modelName},
	function(data){
			$('#relationResult').html(data);
		}
	);
}

function addRelationCode(){ //添加关联代码
	var moduleName = $('#moduleName').val();
	var modelName =  $('#tableName1').val();
	var	mappingName = $('#mapping_name').val();
	var foreignKey = $("#foreignerKeyTableInfo input[type='radio']:checked").val();
	var relationForeignKey = $("#relationshipTableInfo input[type='radio']:checked").val();
	var mappingType = $('#mapping_type').val();
	var className = $('#tableName2').val();
	var relationTable = "";
	
	if($('#tableName3').attr('disabled') != 'disabled'){
		relationTable = $('#tableName3').val();
	}
	
	if(db_prefix != ''){
		modelName =  $('#tableName1').val().replace(db_prefix,'');
		className = $('#tableName2').val().replace(db_prefix,'');
	}
	$.post("/testbench/tp/index.php/TPH/MCode/addRelationModelCode", 
		{'modelName' : modelName, 'mappingName' : mappingName, 'foreignKey' : foreignKey, 'relationForeignKey' : relationForeignKey,
		'mappingType' : mappingType, 'className' : className, 'relationTable' : relationTable, 'moduleName': moduleName},
		function(data){
			code = $('#relationCode').html().replace("//@more", data);
			$('#relationCode').html(code);
		}
	);
}

function getViewCode(){	//生成视图模型代码
	
	var moduleName = $('#moduleName').val();
	var modelName = $('#viewTable1').val();
	var tableName = $('#viewTable2').val();
	var joinType = $('#joinType').val();
	var viewModuleOn1 = $('#viewModuleOn1').val();
	var viewModuleOn2 = $('#viewModuleOn2').val();
	var viewTableColum = $('#viewTableColum input:checked');
	var table1Field = [];
	viewTableColum.each(function(){
		table1Field.push($(this).val());
	});
	
	checkedBox = $('#viewColum input:checked');
	var selectColumName = [];
	var asColumName = [];
	checkedBox.each(function(){
		selectColumName.push($(this).val());
		asColumName.push($('#as_' + $(this).val()).val());
	});
	$.post("/testbench/tp/index.php/TPH/MCode/viewModelCode", 
		{'modelName' : modelName, 'moduleName': moduleName, 'tableName' : tableName, 'table1Field' : table1Field, 'joinType' : joinType, 
		'selectColumName' : selectColumName, 'asColumName' : asColumName, 'viewModuleOn1' : viewModuleOn1, 'viewModuleOn2':viewModuleOn2},
		function(data){
			$('#viewCode').html(data);
		}
	);	
}

function addViewCode(){ //添加视图模型代码片段
	var modelName = $('#viewTable1').val();
	var tableName = $('#viewTable2').val();
	var joinType = $('#joinType').val();
	var viewModuleOn1 = $('#viewModuleOn1').val();
	var viewModuleOn2 = $('#viewModuleOn2').val();
	var viewTableColum = $('#viewTableColum input:checked');
	
	checkedBox = $('#viewColum input:checked');
	var selectColumName = [];
	var asColumName = [];
	checkedBox.each(function(){
		selectColumName.push($(this).val());
		asColumName.push($('#as_' + $(this).val()).val());
	});
	$.post("/testbench/tp/index.php/TPH/MCode/addViewModelCode", 
		{'modelName' : modelName, 'tableName' : tableName,  'selectColumName' : selectColumName, 'joinType' : joinType,
		'asColumName' : asColumName, 'viewModuleOn1' : viewModuleOn1, 'viewModuleOn2' : viewModuleOn2},
		function(data){
			code = $('#viewCode').html().replace("//@more", data);
			$('#viewCode').html(code);
		}
	);	
}

function createViewFile(){ //生成视图模型文件
	var code = $('#viewCode').val();
	var moduleName = $('#moduleName').val();
	var modelName =  $('#viewTable1').val();
	$.post("/testbench/tp/index.php/TPH/MCode/createViewModelFile", {'code' : code, 'moduleName' : moduleName, 'modelName' : modelName},
	function(data){
			$('#viewResult').html(data);
		}
	);
}

function readOnColum(){
	var viewTable1 = $('#viewTable1').val();
	var viewTable2 = $('#viewTable2').val();
	if(db_prefix != ''){
		viewTable1 = viewTable1.replace(db_prefix,'');
		viewTable2 = viewTable2.replace(db_prefix,'');
	}
	$.post("/testbench/tp/index.php/TPH/MCode/readOnColum", 
		{'tableName' : viewTable1},
		function(data){
			$('#viewModuleOn1').html(data);
		}
	);
	$.post("/testbench/tp/index.php/TPH/MCode/readOnColum", 
		{'tableName' : viewTable2},
		function(data){
			$('#viewModuleOn2').html(data);
		}
	);
}

jQuery(document).ready(function($) {
	$('#mapping_type').change(function(){
		if($('#mapping_type').val() == 'MANY_TO_MANY'){
			$('#tableName3').removeAttr('disabled');
		}else{
			$('#tableName3').attr('disabled','disabled');
		}
	});
	
	$('#tableName1').change(function(){
		var mappingType = $('#mapping_type').val();
		if(mappingType != 'MANY_TO_MANY'){ //从属于时才使用表1字段作为外键
			$('#relationshipTableInfo').html('');
			return;
		}
		selectTableName = "";
		if(db_prefix != ''){
			selectTableName = $('#tableName1').val().replace(db_prefix,'');
		}else{
			selectTableName = $('#tableName1').val();
		}
		$.post("/testbench/tp/index.php/TPH/MCode/getTableInfo", {'selectTableName' : selectTableName, 'label' : 'relation_foreign_key:'},
			function(data){
				$('#relationshipTableInfo').html(data);
			}
		);
	});
	
	$('#tableName2').change(function(){
		selectTableName = "";
		if(db_prefix != ''){
			selectTableName = $('#tableName2').val().replace(db_prefix,'');
		}else{
			selectTableName = $('#tableName2').val();
		}
		$.post("/testbench/tp/index.php/TPH/MCode/getTableInfo", {'selectTableName' : selectTableName, 'label' : 'foreign_key:'},
			function(data){
				$('#foreignerKeyTableInfo').html(data);
			}
		);
	});
	
	/*
	$('#tableName3').change(function(){
		selectTableName = "";
		if(db_prefix != ''){
			selectTableName = $('#tableName3').val().replace(db_prefix,'');
		}else{
			selectTableName = $('#tableName3').val();
		}
		$.post("/testbench/tp/index.php/TPH/MCode/getTableInfo", {'selectTableName' : selectTableName, 'label' : 'relation_foreign_key:'},
			function(data){
				$('#relationshipTableInfo').html(data);
			}
		);
	});
	*/
	
	$('#viewTable1').change(function(){
		selectTableName = "";
		if(db_prefix != ''){
			selectTableName = $('#viewTable1').val().replace(db_prefix,'');
		}else{
			selectTableName = $('#viewTable1').val();
		}
		$.post("/testbench/tp/index.php/TPH/MCode/getViewTableInfo", {'selectTableName' : selectTableName, 'label' : 'field:'},
			function(data){
				$('#viewTable1Info').html(data);
			}
		);
	});
	
	$('#viewTable2').change(function(){
		selectTableName = "";
		if(db_prefix != ''){
			selectTableName = $('#viewTable2').val().replace(db_prefix,'');
		}else{
			selectTableName = $('#viewTable2').val();
		}
		$.post("/testbench/tp/index.php/TPH/MCode/getViewTableInfo2", {'selectTableName' : selectTableName, 'label' : 'field:'},
			function(data){
				$('#viewTable2Info').html(data);
			}
		);
	});
	
	$('#relationTablesBtn').bind('click', function(){
		relationshipTableInfo();
	});
	$('#relationCodeBtn').bind('click', function(){
		getRelationCode();
	});
	$('#readOnColum').bind('click', function(){
		readOnColum();
	});
	$('#viewCodeBtn').bind('click', function(){
		getViewCode();
	});
	$('#creatRelationFileBtn').bind('click', function(){
		creatRelationFile();
	});
	$('#addRelationCodeBtn').bind('click', function(){
		addRelationCode();
	});
	$('#addViewCodeBtn').bind('click', function(){
		addViewCode();
	});
	$('#createViewFileBtn').bind('click', function(){
		createViewFile();
	});
});

</script>
<div class="mainbar">
	<!-- Page heading -->
	<div class="page-head">
	  <h2 class="pull-left"><i class="icon-home"></i>生成自定义模型代码</h2>

	<div class="clearfix"></div>
	</div>
	<!-- Page heading ends -->


	<!-- Matter -->

	<div class="matter">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
				<div class="widget">
					<div class="widget-head">
					  <div class="pull-left" height="80">
						选择目标模块
					  </div>
					  <div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
						<a href="#" class="wclose"><i class="icon-remove"></i></a>
					  </div>  
					  <div class="clearfix"></div>
					</div>  
					<div class="widget-content" >
					<div class="padd">
					<!--<p>一些注释</p>-->
                      <div class="form quick-post">
						  <!-- Edit profile form (not working)-->
						  <div class="form-horizontal">  
								<div class="form-group">
									<label class="control-label col-lg-3"  style="width:120px">目标模块:</label>
									<div class="col-lg-9">                               
										<select class="form-control" id="moduleName">
										  <?php if(is_array($moduleNameList)): $i = 0; $__LIST__ = $moduleNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$moduleName): $mod = ($i % 2 );++$i;?><option value="<?php echo ($moduleName); ?>"><?php echo ($moduleName); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
										</select> 
									</div>
								  </div>
							</div>	
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
			<div class="row">
			
			<div class="col-md-6">
				<div class="widget">
					<div class="widget-head">
					  <div class="pull-left" height="80">
						关联模型
					  </div>
					  <div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
						<a href="#" class="wclose"><i class="icon-remove"></i></a>
					  </div>  
					  <div class="clearfix"></div>
					</div>  
					<div class="widget-content" >
					<div class="padd">
					<!--<p>一些注释</p>-->
                      <div class="form quick-post">
						  <!-- Edit profile form (not working)-->
						  <div class="form-horizontal">  
								<div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">模型数据表:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="tableName1">
											<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
										</select> 
									</div>	
								</div> 
							 
								<div class="form-group">
									<label class="control-label col-lg-3"  style="width:120px">关联种类:</label>
									<div class="col-lg-9">                               
										<select class="form-control" id="mapping_type">
											<option value="HAS_ONE">一对一(HAS_ONE)</option>
											<option value="HAS_MANY">一对多(HAS_MANY)</option>
											<option value="BELONGS_TO">从属于(BELONGS_TO)</option>
											<option value="MANY_TO_MANY">多对多(MANY_TO_MANY)</option>
										</select> 
									</div>
								</div>							
								<hr>
								<div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">对应数据表:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="tableName2">
											<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
										</select> 
									</div>
								</div> 
								<div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">关系数据表:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="tableName3" disabled='disabled'>
											<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
										</select> 
									</div>
								</div>

							  <hr>
							  <div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">关联名称：</label>
									<div class="col-lg-9"> 
										<input type="text" id="mapping_name"  /> (mapping_name,注意不要和当前模型的字段有重复)
									</div>
								</div>
							  <hr>
							  <div class="form-group">
								<div id="foreignerKeyTableInfo"></div>
								<div id="relationshipTableInfo"></div>
							  </div>
							  <hr>
							  <div class="form-group">
								<textarea class="form-control" id="relationCode" rows="12"></textarea>
							  </div>
							  
							  <!-- Buttons -->
							  <div class="form-group" id="relationshipButton" >
								 <!-- Buttons -->
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-success" id="relationCodeBtn">生成关联模型手工代码</button>
								 </div>
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-info" id="addRelationCodeBtn">添加关联代码片段</button>
								 </div>
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-primary" id="creatRelationFileBtn">直接生成关联模型文件</button>
								 </div>
							  </div>
								<div class="col-lg-offset-1" id="relationResult"></div>
						  </div>
						</div><!--end  paddad-->
					</div>
				</div>	
				</div>	
			</div>
			
		
		<div class="col-md-6">
				<div class="widget">
					<div class="widget-head">
					  <div class="pull-left" height="80">
						视图模型
					  </div>
					  <div class="widget-icons pull-right">
						<a href="#" class="wminimize"><i class="icon-chevron-up"></i></a> 
						<a href="#" class="wclose"><i class="icon-remove"></i></a>
					  </div>  
					  <div class="clearfix"></div>
					</div>  
					<div class="widget-content" >
						<div class="padd">
						<!--<p>一些注释</p>-->
							<div class="form quick-post">
								<div class="form-horizontal">
								 <div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">视图数据表:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="viewTable1">
											<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
										</select> 
									</div>
								<div id="viewTable1Info"></div>
								</div>
							  <hr>
							  <div class="form-group">
									<label class="control-label col-lg-4" style="width:120px">关联数据表:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="viewTable2">
											<?php if(is_array($tableNameList)): $i = 0; $__LIST__ = $tableNameList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$table): $mod = ($i % 2 );++$i;?><option value="<?php echo ($table); ?>" ><?php echo ($table); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
										</select> 
									</div>
								<div id="viewTable2Info"></div>
								</div>
							  <hr>
							  <!-- Buttons -->
							  <div class="form-group">
								<label class="control-label col-lg-4" style="width:120px">视图表字段:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="viewModuleOn1">
										</select> 
									</div>
								</div>
								<div class="form-group">
								<label class="control-label col-lg-4" style="width:120px">关联表字段:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="viewModuleOn2">
										</select> 
									</div>
								</div>
								<div class="form-group">
									 <!-- Buttons -->
									 <div class="col-lg-offset-2 col-lg-9">
										<button class="btn btn-success" id="readOnColum">读取关联条件字段</button>
									 </div>
								</div>
								
								<div class="form-group">
									 <label class="control-label col-lg-4" style="width:120px">JOIN类型:</label>
									<div class="col-lg-9"> 
										<select class="form-control" id="joinType">
											<option value="JOIN">(JOIN)</option>
											<option value="INNER">INNER</option>
											<option value="LEFT">LEFT</option>
											<option value="RIGHT">RIGHT</option>
											<option value="FULL">FULL</option>
										</select> 
									</div>
								</div>
							   <hr>
							  <div class="form-group">
								<textarea class="form-control" id="viewCode" rows="12"></textarea>
							  </div>
							  
							  <!-- Buttons -->
							  <div class="form-group" id="relationshipButton" >
								 <!-- Buttons -->
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-success" id="viewCodeBtn">生成视图模型手工代码</button>
								 </div>
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-info" id="addViewCodeBtn">添加关联代码片段</button>
								 </div>
								 <div class="col-lg-offset-1 col-lg-2">
									<button class="btn btn-primary" id="createViewFileBtn">直接生成关联模型文件</button>
								 </div>
							  </div>
								<div class="col-lg-offset-1" id="viewResult"></div>
								</div> 
							</div>	
						</div><!--end  paddad-->
					</div>	
				</div>	
			</div>
		</div>
		  
		 <div id="msg"></div> 
		</div><!-- container Graph end -->
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
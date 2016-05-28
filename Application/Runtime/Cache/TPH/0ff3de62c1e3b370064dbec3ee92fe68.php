<?php if (!defined('THINK_PATH')) exit();?>public function all(){
	$<?php echo ($tableName); ?>Model = M('<?php echo ($TableName); ?>');
	$count = $<?php echo ($tableName); ?>Model->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$<?php echo ($tableName); ?>List = $<?php echo ($tableName); ?>Model->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('<?php echo ($tableName); ?>List', $<?php echo ($tableName); ?>List);
	$this->display();
}
<?php if (!defined('THINK_PATH')) exit();?>public function edit(){
	$<?php echo ($tableName); ?>Model = M('<?php echo ($TableName); ?>');
	if(IS_POST){
		$<?php echo ($tableName); ?>Model ->create();
		$flag = $<?php echo ($tableName); ?>Model ->save();
		if($flag){
			$this->success('编辑成功',U('<?php echo ($TableName); ?>/all')); 
		}else{
			$this->error('编辑失败',U('<?php echo ($TableName); ?>/all')); 
		}
	}else{
		$id = I('id'); 
		$<?php echo ($tableName); ?> = $<?php echo ($tableName); ?>Model->find($id);
		$this->assign('<?php echo ($tableName); ?>', $<?php echo ($tableName); ?>);
		$this->display();
	}
}
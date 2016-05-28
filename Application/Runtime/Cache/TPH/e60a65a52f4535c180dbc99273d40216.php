<?php if (!defined('THINK_PATH')) exit();?>public function add(){
	if(IS_POST){
		$<?php echo ($tableName); ?>Model = M('<?php echo ($TableName); ?>');
		$<?php echo ($tableName); ?>Model ->create();
		$flag = $<?php echo ($tableName); ?>Model ->add();
		if($flag){
			$this->success('新建成功',U('<?php echo ($TableName); ?>/all')); 
		}else{
			$this->error('新建失败',U('<?php echo ($TableName); ?>/all')); 
		}
	}else{
		$this->display(); 
	}
}
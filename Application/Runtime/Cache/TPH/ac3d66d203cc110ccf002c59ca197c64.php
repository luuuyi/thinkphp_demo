<?php if (!defined('THINK_PATH')) exit();?>public function delete(){
	$<?php echo ($tableName); ?>Model = M('<?php echo ($tableName); ?>');
	$id = I('id'); 
	$flag = $<?php echo ($tableName); ?>Model->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('<?php echo ($TableName); ?>/all'));
	}else{
		$this->error('删除失败', U('<?php echo ($TableName); ?>/all'));
	}
}
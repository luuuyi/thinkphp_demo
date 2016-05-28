<?php
//由ThinkphpHelper自动生成,请根据需要修改
namespace Home\Controller;
use Think\Controller;

class FileinfoController extends Controller {
public function all(){
	$fileinfoModel = M('Fileinfo');
	$count = $fileinfoModel->where()->count();
	$Page = new \Think\Page($count,15);	//实例化分页类 传入总记录数和每页显示的记录数(15)
	$show = $Page->show();	//分页显示输出
	$fileinfoList = $fileinfoModel->where()->limit($Page->firstRow.','.$Page->listRows)->select();	//分页查询
	$this->assign('page',$show);	//赋值分页输出
	$this->assign('fileinfoList', $fileinfoList);
	$this->display();
}

public function add(){
	if(IS_POST){
		$fileinfoModel = M('Fileinfo');
		$fileinfoModel ->create();
		$flag = $fileinfoModel ->add();
		if($flag){
			$this->success('新建成功',U('Fileinfo/all')); 
		}else{
			$this->error('新建失败',U('Fileinfo/all')); 
		}
	}else{
		$this->display(); 
	}
}

public function edit(){
	$fileinfoModel = M('Fileinfo');
	if(IS_POST){
		$fileinfoModel ->create();
		$flag = $fileinfoModel ->save();
		if($flag){
			$this->success('编辑成功',U('Fileinfo/all')); 
		}else{
			$this->error('编辑失败',U('Fileinfo/all')); 
		}
	}else{
		$id = I('id'); 
		$fileinfo = $fileinfoModel->find($id);
		$this->assign('fileinfo', $fileinfo);
		$this->display();
	}
}

public function delete(){
	$fileinfoModel = M('fileinfo');
	$id = I('id'); 
	$flag = $fileinfoModel->where('id='.$id)->delete();
	if($flag){
		$this->success('删除成功', U('Fileinfo/all'));
	}else{
		$this->error('删除失败', U('Fileinfo/all'));
	}
}

}
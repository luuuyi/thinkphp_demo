<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	function __construct(){
		parent::__construct();
		if (!session('?logined')) {
			$this->redirect('user/login',0);
		}
		else{

		}
	}

	public function index(){
		$messageModel = M('message');
		if ($list = $messageModel->order('id desc')->limit(10)->select()) {
			$this->assign('list', $list);
			$this->display();
		}
		else{
			$this->error($messageModel->getError());
		}
	}

	public function fileList(){
		$userModel = M('user');
		$dataSearch['username'] = session('loginName');
        $result = $userModel->where($dataSearch)->select();
        $fileinfoModel = M('fileinfo');
		if ($list = $fileinfoModel->order('id desc')->limit(10)->select()) {
			$this->assign('list', $list);
			$this->assign('telephone', $result[0]['telephone']);
			$this->assign('email', $result[0]['email']);
			$this->display();
		}
		else{
			$this->error($messageModel->getError());
		}
	}

    public function hello(){
        echo 'hello, thinkphp';
    }
}
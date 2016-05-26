<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	public function index(){
		echo 'hello, thinkphp';
	}

	public function login(){
    	if (!session('?logined')) {
    		if (IS_POST) {
    			$data['username'] = trim(I('post.name'));
    			$data['password'] = trim(I('post.passwd'));
    			$data['passwordmd5'] = md5(trim(I('post.passwd')));
    			$userModel = M('user');
    			if ($info = $userModel->where($data)->select()) {
    				$dataInsert['lastlogintime'] = $info[0]['logintime'];
    				$dataInsert['lastloginip'] = $info[0]['loginip'];
    				$dataInsert['logintime'] = date("Y-m-d H:i:s", time());
    				$dataInsert['loginip'] = get_client_ip();
    				if ($userModel->where($data)->create($dataInsert)) {
    					if (false !== $userModel->where($data)->save()) {
    						session('logined','yes');
    						session('loginName', $data['username']);
    						session('uid', $info[0]['id']);
    						session('userTelephone', $info[0]['telephone']);
    						session('userEmail', $info[0]['email']);
    						$this->success('登录成功',U('index/index'));
    					}
    					else{
    						$this->error($userModel->getError());
    					}
    				}
    				else{
    					$this->error($userModel->getError());
    				}
    			}
    			else{
    				$this->error('账号密码错误，请重试!');
    			}
    		}
    		else{
    			$this->display('login');
    		}
    	}
    	else{
    		$this->success('您已经登录！', U('Index/index'));
    	}
    }

    public function writeMessage(){
    	if (session('?logined')) {
    		if (IS_POST) {
    			$data['username'] = session('loginName');
    			$data['telephone'] = session('userTelephone')?session('userTelephone'):'';
    			$data['email'] = session('userEmail')?session('userEmail'):'';
    			$data['message'] = trim(I('post.message'));
    			$data['messagetype'] = trim(I('post.messageType'));
    			$data['addtime'] = date('Y-m-d H:i:s', time());
    			$data['addip'] = get_client_ip();
    			$messageModel = M('message');
    			if ($messageModel->create($data)) {
    				if ($messageModel->add()) {
    					$this->success('留言成功！', U('Index/index'));
    				}
    				else{
    					$this->error($messageModel->getError());
    				}
    			}
    			else{
    				$this->error($messageModel->getError());
    			}
    		}
    		else{
    			$this->display();
    		}
    	}
    	else{
    		$this->success('您还未登录！', U('login'));
    	}
    }

    public function uploadFile(){
    	if (session('?logined')) {
    		if (IS_POST) {
                $fileType = $_FILES['file']['type'];
                echo $fileType.'<br>';
                if ((($fileType === 'image/jpeg') || ($fileType === 'image/pjpeg') || ($fileType === 'image/gif'))){
                    $config = array(
                        'maxSize'    =>    3145728,
                        'rootPath'   =>    './Public/Home/upload/',
                        'savePath'   =>    'images/',
                        'saveName'   =>    array('uniqid',''),
                        'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
                        'autoSub'    =>    true,
                        'subName'    =>    array('date','Ymd'),
                    );
                }
                else if ((($fileType === 'text/plain') || ($fileType === 'application/msword') || ($fileType === 'application/octet-stream'))) {
                    $config = array(
                        'maxSize'    =>    3145728,
                        'rootPath'   =>    './Public/Home/upload/',
                        'savePath'   =>    'texts/',
                        'saveName'   =>    array('uniqid',''),
                        'exts'       =>    array('txt', 'doc', 'docx'),
                        'autoSub'    =>    true,
                        'subName'    =>    array('date','Ymd'),
                    );
                }
				$upload = new \Think\Upload($config);
                if ($info = $upload->upload()) {
                    $dataSearch['username'] = session('loginName');
                    $dataSearch['id'] = session('uid');
                    $data['username'] = session('loginName');
                    $data['file_origin_name'] = $info['file']['name'];
                    $data['file_save_name'] = $info['file']['savename'];
                    $data['file_save_path'] = $info['file']['savepath'];
                    $data['notes'] = trim(I('post.notes'));
                    $data['filetype'] = trim(I('post.type'));
                    $data['uploadtime'] = date('Y-m-d H:i:s', time());
                    $fileinfoModel = M('fileinfo');
                    if ($fileinfoModel->data($data)->add()) {
                        dump($data);
                        $this->success('上传成功！', U('Index/index'), 60);
                    }
                    else{
                        $this->error($fileinfoModel->getError());
                    }
                }
                else{
                    $this->error($upload->getError());
                }
    		}
    		else{
    			$this->display();
    		}
    	}
    	else{
    		$this->success('您还未登录！', U('login'));
    	}
    }

    public function userInfo(){
    	if (session('?logined')) {
    		if (IS_POST) {
    			$data['telephone'] = trim(I('post.telephone'));
    			$data['email'] = trim(I('post.email'));
    			$dataSearch['username'] = session('loginName');
    			$dataSearch['id'] = session('uid');
    			$userModel = M('user');
    			if ($userModel->where($dataSearch)->data($data)->save()) {
                    session('userTelephone', $data['telephone']);
                    session('userEmail', $data['email']);
    				$this->success('修改成功！', U('Index/index'));
    			}
    			else{
    				$this->error($userModel->getError());
    			}
    		}
    		else{
    			$this->display();
    		}
    	}
    	else{
    		$this->success('您还未登录！', U('login'));
    	}
    }

    public function register(){
    	if (!session('?logined')) {
    		if (IS_POST) {
    			$data['username'] = trim(I('post.name_register'));
    			$data['password'] = trim(I('post.passwd_register'));
    			$data['passwordmd5'] = md5(trim(I('post.passwd_register')));
    			$userModel = M('user');
		    	if ($userModel->create($data)) {
		    		if ($userModel->add()) {
		    			$this->success('注册成功！',U('login'));
		    		}
		    		else{
		    			$this->error($userModel->getError());
		    		}
		    	}
		    	else{
		    		$this->error($userModel->getError());
		    	}
    		}
    		else{
    			$this->display('login');
    		}
    	}
    	else{
    		$this->success('您已经登录！', U('Index/index'));
    	}
    }

    public function logout(){
    	if (session('?logined')) {
    		session(null);
    		$this->success('success logout!', U('User/login'));
    		//echo 'success logout!';
    	}
    	else{
    		$this->error('非法操作!');
    	}
    }    

    public function test(){
    	testCommon();
        echo '<br>haha';
    }

    public function testdb($name='luuuyi', $password='123456'){
    	$userModel = M('user');
        $result = $userModel->join('think_fileinfo as f on f.username = think_user.username')->select();
    	dump($result);
    }
}
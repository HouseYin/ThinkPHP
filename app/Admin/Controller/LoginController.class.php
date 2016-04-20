<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
   		$this->display();
  }
  function login(){
  	header("Content-Type:text/html;charset=utf-8");
  	$user = M('User');
  	$username = $_POST['name'];
  	$password = $_POST['password'];
  	//查找输入的用户名是否存在
	if($user->where("username ='$username' AND pwd = '$password'")->find()){                   		
		session('username',$username);
		$url=U('/Admin/Index/');		
		redirect($url,0, '跳转中...');
	}else{
		$url = U("/Admin/login");
		redirect($url,2, '账号或密码错误，正在返回登录页，请稍等...');
	}
  }
  	function checklen($data){
			if(strlen($data)>15 || strlen($data)<6){
			return false;
		}
		return true;
	}
}
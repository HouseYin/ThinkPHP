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
  	if (!$this->checklen($username)) {
			$this->error(strlen($username).'用户名长度必须在6~15个字符之间');
  	}
  	//查找输入的用户名是否存在
	if($user->where("username ='$username' AND pwd = '$password'")->find()){
			
		session(username,$username);
		$url=U('/Admin/Index/');			
		redirect($url,0, '跳转中...');
	}else{
		$this->error($username.'用户名或密码错误'.$password);
	}
  }
  	function checklen($data){
			if(strlen($data)>15 || strlen($data)<6){
			return false;
		}
		return true;
	}
}
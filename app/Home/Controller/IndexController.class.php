<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	/*实例化模型*/
    	$bigClass = D('Bigclass');
    	$smallClass = M('Smallclass');
    	$bigcount = $bigClass->count();
    	//$smallcount = $smallClass->count();
  
    	$bigClass_list=$bigClass->field(array('id','bid','bname'))->order('id')->select();
    	$smallClass_list=$smallClass->field(array('id','bid','sid','sname'))->order('id')->select();
    	$this->assign("bigClass_list",$bigClass_list);
    	$this->assign("smallClass_list",$smallClass_list);
    	
    	$this->display();
    }

}
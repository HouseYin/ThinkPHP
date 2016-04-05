<?php
namespace Admin\Controller;
use Think\Controller;
class AddController extends Controller {
    public function index(){
    	$this->display();
  }
  function add(){
  		header("Content-Type:text/html;charset=utf-8");
  }

}
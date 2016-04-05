<?php
namespace Admin\Controller;
use Think\Controller;
class EditController extends Controller {
    public function index(){
        /*呈现模板*/
    	$this->display();
  }
    function edit(){
        header("Content-Type:text/html;charset=utf-8");
        $typeclass = $_POST['typeclass'];
        $bid = $_POST['bid'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        echo  $bid;
    }
}
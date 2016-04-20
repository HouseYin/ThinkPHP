<?php
namespace Admin\Controller;
use Think\Controller;
class EditController extends Controller {
    public function index(){
        if(!session('username')){
            $url=U('/Admin/login/');        
            redirect($url,2, '未登录，跳转中...');
        }

        /*呈现模板*/
        $this->assign("name",session("username"));
        $this->display();
    }
    function edit(){
        header("Content-Type:text/html;charset=utf-8");
        $typeclass = $_POST['typeclass'];
        $bid = $_POST['bid'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        if ($typeclass ==='文章') {
            $article = M("Article");
            $data['title'] = $title;
            $data["bid"] = $bid;
            $data["content"] = $content;
            $data["sendTime"] = date("Y-m-d H:i:s");
            $add_result = $article -> add($data);
        }else if($typeclass==="新闻"){
            $news = M("News");
            $data['title'] = $title;
            $data["bid"] = $bid;
            $data["content"] = $content;
            $data["sendTime"] = date("Y-m-d H:i:s");
            $add_result = $news -> add($data);
        }
        echo  $bid.'*'.$title.'*'.$content.'*'.$typeclass;
    }
}
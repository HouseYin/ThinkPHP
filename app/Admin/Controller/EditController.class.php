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
        $id = $_POST['id'];        
        $title = $_POST['title'];
        $content = $_POST['content'];

        if ($typeclass ==='文章') {
            $article = M("Article");
            $data['title'] = $title;
            $data["bid"] = $id;
            $data["content"] = $content;
            $data["sendTime"] = date("Y-m-d H:i:s");
            if($add_result = $article -> add($data)){
                echo json_encode(array(code=>0,msg=>'发表成功！'));
            }else{
                echo json_encode(array(code=>1,msg=>'发表失败！'));
            };
        }else if($typeclass==="新闻"){
            $news = M("News");
            $data['title'] = $title;
            $data["nid"] = $id;
            $data["content"] = $content;
            $data["sendTime"] = date("Y-m-d H:i:s");
             if($add_result = $news -> add($data)){
                echo json_encode(array(code=>0,msg=>'发表成功！'));
            }else{
                echo json_encode(array(code=>1,msg=>'发表失败！'));
            };
        }
    }
}
<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        /*基本信息*/
        if(!session('username')){
            $url=U('/Admin/login/');        
            redirect($url,0, '未登录，跳转中...');
        }else{
            $config = M("Config");
            $config_list=$config->order('id')->select();
            $this->assign("config_list",$config_list);
            $name = session('username');
            $this->assign("name",$name);

        /*
        /*文章
        $article = M("Article");
        $article_list = $article->order('id')->page($_GET['p'].',3')->select();
        $this->assign("article_list",$article_list);
        $article_count = $article->count();// 查询满足要求的总记录数
        $article_page  = new \Think\Page($article_count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $article_show = $article_page->show();
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this -> assign("article_page",$article_show);

        /*新闻
        $news = M("News");
        $news_list=$news->order('id')->page($_GET['p'].',3')->select();
        $this->assign("news_list",$news_list);
        $news_count = $news->count();
        $news_page = new \Think\page($news_count,3);
        $news_show = $news_page->show();
        $this -> assign("news_page",$news_show);

        */

        /*呈现模板*/
        $this->display();
    }

}
function addConfig(){
    header("Content-Type:text/html;charset=utf-8");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $config = M("Config");
    $data['title'] = $title;
    $data["content"] = $content;
    if($add_result = $config -> add($data)){
        echo json_encode($arrayName = array('code' => 0,'msg'=>"添加成功" ));
    }else{
        echo json_encode($arrayName = array('code' => 1,'msg'=>"添加失败" ));
    }
}

function delConfig(){
    header("Content-Type:text/html;charset=utf-8");
    $id = $_POST['id'];
    $config = M("Config");
    if($config->where("id=$id")->delete()){
        echo json_encode($arrayName = array('code' => 0,'msg'=>"删除成功" ));
    }else{
        echo json_encode($arrayName = array('code' => 1,'msg'=>"删除失败" ));

    }
}
function logout(){
    header("Content-Type:text/html;charset=utf-8");
    session("username",null);
    echo json_encode($arrayName = array('code' => 0, 'msg'=>null));    
}
}
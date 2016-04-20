<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        if(!session('username')){
            $url=U('/Admin/login/');        
            redirect($url,2, '未登录，跳转中...');
        }
        /*文章*/
        $article = M("Article");
        $article_list = $article->order('id')->page($_GET['p'].',3')->select();
        $this->assign("article_list",$article_list);
    	$article_count = $article->count();// 查询满足要求的总记录数
		$article_page  = new \Think\Page($article_count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $article_show = $article_page->show();
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this -> assign("article_page",$article_show);
        $this->assign("name",session("username"));

        /*呈现模板*/
    	$this->display();
  }

    function delete(){
        header("Content-Type:text/html;charset=utf-8");
        $id = $_POST['id'];
        $article = M("Article");
        if($article->where("id=$id")->delete()){
            echo json_encode($data = array('code' => 0,'msg'=>"删除成功" ));
        }else{
            echo json_encode($data = array('code' => 1,'msg'=>"删除失败" ));
        };
    }

}
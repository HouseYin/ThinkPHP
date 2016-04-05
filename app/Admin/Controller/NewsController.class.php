<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
        /*基本信息*/
    	$config = M("Config");
    	$config_list=$config->order('id')->select();
    	$this->assign("config_list",$config_list);

        /*文章*/
        $article = M("Article");
        $article_list = $article->order('id')->page($_GET['p'].',3')->select();
        $this->assign("article_list",$article_list);
    	$article_count = $article->count();// 查询满足要求的总记录数
		$article_page  = new \Think\Page($article_count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $article_show = $article_page->show();
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this -> assign("article_page",$article_show);

        /*新闻*/
        $news = M("News");
    	$news_list=$news->order('id')->page($_GET['p'].',3')->select();
    	$this->assign("news_list",$news_list);
        $news_count = $news->count();
        $news_page = new \Think\page($news_count,3);
        $news_show = $news_page->show();
        $this -> assign("news_page",$news_show);



        /*呈现模板*/
    	$this->display();
  }

}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	/*实例化模型*/
    	$bigClass = D('Bigclass');
    	$smallClass = M('Smallclass');
        $article = M('Article');
        $config = M('Config');
        $news = M("News");
    	$bigcount = $bigClass->count();
    	//$smallcount = $smallClass->count();
  
    	$bigClass_list=$bigClass->field(array('id','bid','bname'))->order('id')->select();
    	$smallClass_list=$smallClass->field(array('id','bid','sid','sname','aid'))->order('id')->select();
        $article_list=$article->field(array('id','bid','title'))->order('id')->select();
    	$this->assign("bigClass_list",$bigClass_list);
    	$this->assign("smallClass_list",$smallClass_list);
        $this->assign("article_list",$article_list);
        $config_list=$config->select();
    	

        $new_est = $news->order('id DESC')->find();
        $this->assign("new_est",$new_est);
        $this->assign('config_list',$config_list);

        $kcjj = $config ->where("title='课程简介'")->find();
        $this->assign('kcjj',$kcjj);

        $news = M("News");
        $news_1=$news->where("nid=1")->select();
        $news_2=$news->where("nid=2")->select();
        $news_3=$news->where("nid=3")->select();
        $news_4=$news->where("nid=4")->select();
        $this->assign("news_1",$news_1);
        $this->assign("news_2",$news_2);
        $this->assign("news_3",$news_3);
        $this->assign("news_4",$news_4);
    	$this->display();
    }

}
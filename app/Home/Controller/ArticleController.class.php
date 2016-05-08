<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
    /*实例化模型*/
        $bigClass = D('Bigclass');
        $smallClass = M('Smallclass');
        $article = M('Article');
        $config = M('Config');
        $news = M('News');
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
        $this->assign('article_list',$article_list);
        $this->assign('config_list',$config_list);

        $this->display();
    }
    function article(){
        $article = D("Article");
        $id = $_POST['id']; 
        $a_condition['id'] = $id;
        $a = $article ->where($a_condition)->find();
        $bid = $a['bid'];
        $condition['bid'] = $bid;
        $arr = $article->where($condition)->select();
        echo json_encode([code=>0,msg=>$a,arr=>$arr]);
    }
}
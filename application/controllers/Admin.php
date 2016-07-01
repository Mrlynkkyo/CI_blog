<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('PATH3',"/admin/");
define('PATH1',"/");
require("Pageset.php");

CLASS admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    //控制台
    public function index()
    {
        $query = $this->db->get('visitor');
        $data['cvisitor'] = $query->num_rows();
        $query = $this->db->get('wz');
        $data['cwz'] = $query->num_rows();
        $query = $this->db->get('message');
        $data['cmessage'] = $query->num_rows();
        @$name = $_COOKIE['twpe'];
        if($name == 844385)
            $this->load->view('admin',$data);
        else{
            $data['log'] = '审核未通过';
            $this->load->view('login',$data);
        }

    }




    //访客
    public function visit(){
        $p = new Page('20','5','visitor');

        $data = $p->sel("order by time desc ",0);

        $fz = $p->myPage();

        $log=array();

        $log['page']=$fz;


        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
        {
            $log['log'][] = $row;

        }

        $this->load->view('visit',$log);
    }




    //文章管理
    public function article(){
        $p = new Page('5','3','wz');

        $data = $p->sel("order by time desc ");

        $fz = $p->myPage();

        $log=array();

        $log['page']=$fz;


        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
        {
            $log['log'][] = $row;

        }

        $this->load->view('articles_admin',$log);
    }
    



    //留言管理
    public function message(){
        $p = new Page('15','3','message');

        $data = $p->sel("order by time desc ");

        $fz = $p->myPage();

        $log=array();

        $log['page']=$fz;


        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
        {
            $log['log'][] = $row;

        }

        $this->load->view('message_admin',$log);
        
        
    }
    


    //处理
    public function handle(){
        $id = $this->input->get('id');
        $type = $this->input->get('type');
        //判断一下参数
        if($type==1){
            $table = 'visitor';
            $control = 'visit';
        }
        elseif($type==2){
            $table = 'wz';
            $control = 'article';
        }
        elseif($type==3){
            $table = 'message';
            $control = 'message';
        }
        else{
            $talbe = 'wz';
        }
        //执行删除操作
        if($type!=4&&$type!=5){
            $this->db->where('id',$id)->delete("$table");
            redirect("/admin/$control");
        }

        //转到文章编辑
        else {
            if($type==4)
                redirect("/admin/edit?id=$id");
            else
                redirect("/admin/edit");
        }

    }


    //文章编辑
    public function edit(){
        $id = $this->input->get('id');
        //判断是否为删除操作
        if(!empty($id)){
            $data = $this->db->where('id',$id)->get('wz');
            $data = $data->row_array();
            $this->load->view('edit_article',$data);
        }

        //编辑文章
        else{

            if(!empty($_POST['bt'])){
                $id2 = $this->input->post('wid');
                if($id2==''){
                    //发布文章
                    $bid = (!empty($this->input->post('bid')))?$this->input->post('bid'):0;
                    $title = $this->input->post('title');
                    $content = $this->input->post('content');
                    $this->db->query("INSERT INTO wz VALUES(0,'$bid','$title','$content',NOW())");
                }
                else{
                    //修改文章
                    $bid = (!empty($this->input->post('bid')))?$this->input->post('bid'):0;
                    $title = $this->input->post('title');
                    $content = $this->input->post('content');
                    $this->db->query("UPDATE  wz SET id='$id2',bid='$bid',title='$title',content='$content',time=NOW() where id='$id2' ");
                    }
                redirect("/admin/article");
                }
            else{
                //防止视图出现错误提醒
                $data['title'] = '';
                $data['content'] = '';
                $data['id'] = '';
                $this->load->view('edit_article',$data);
            }

        }
    }

    //登录
    public function login(){
        if(empty($_POST['username'])){
            $data['log'] = '';
            $this->load->view('login',$data);
        }
        else{
            if($this->input->post('username')=="twpe" && $this->input->post('password')=="844385"){
                setcookie("twpe",844385,time()+3600*24*30,'/');
                redirect("/admin/index");
            }
            else{
                $data['log'] = '审核未通过';
                $this->load->view('login',$data);
            }
        }
        
    }
    
    //注销
    public function logout(){
        setcookie("twpe",'',  time()-120,'/');
        redirect("/blog/index");
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('PATH2',"/blog/");
define('PATH1',"/");
require("Pageset.php");

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    //主页
    public function index()
    {
        $this->load->helper('url');
        $data=$this->db->query('SELECT * FROM wz where bid=1 ORDER BY TIME DESC ');
        $log=array();

        while ($row = $data->unbuffered_row('array'))
       {
           $log['log'][] = $row;
       }

        $this->load->view('index',$log);


    }



    //文章
    public function article(){
        $p = new Page('5','4','wz');

        $data = $p->sel("order by id desc ");

        $fz = $p->myPage();

        $log=array();

        $log['page']=$fz;

        
        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC))
        {
            $log['log'][] = $row;

        }

        $this->load->view('article',$log);

    }


    //文章查看
    public function articlelook(){
        $id=$this->input->GET('id');

        $data=$this->db->query('SELECT * FROM wz where id='.$id);

        $data=$data->row_array();

        $this->load->view('articlelook',$data);
    }


    //生活
    public function life(){

        $this->load->view('life');

    }




    //留言
    public function message(){
        //处理表单数据
        if((!empty($this->input->POST('name')))&&(!empty($this->input->POST('message')))&&($this->input->POST('name')!=" ")&&($this->input->POST('message')!=null)){
            $con = new mysqli('localhost','root','844385','ci_blog');
            $name = addslashes($this->input->POST('name'));
            $name = trim($name);
            $message = addslashes($this->input->POST('message'));
            $message = trim($message);
            $con->query("SET NAMES UTF8");
            $name = mysqli_real_escape_string($con,$name);
            $message = mysqli_real_escape_string($con,$message);

            $sql="INSERT INTO message VALUES(0,'$name','$message',NOW())";
            $con->query($sql);
        }

        //使用分页类
        
        $p = new Page('10','6','message');
        $data = $p->sel("order by id desc ");
        $fz = $p->myPage();
        $log=array();
        $log['page']=$fz;
        while ($row = mysqli_fetch_array($data,MYSQLI_ASSOC)){
            $log['log'][] = $row;
        }
        $this->load->view('message',$log);
    }


    //搜索
    public function search(){
        if(isset($_POST['search'])){
            $data = array();
            $q = trim($this->input->post('q'));

            if(preg_match("/[ '.,:;*?~`!@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$q)) {
                $data['key'] = '<b style="color: #6a7358">不允许有特殊字符</b>';
            }

            elseif(empty($q)) {
                $data['key'] = '<b style="color: #6a7358">关键字为空或无效</b>';
            }

            else {
                $all = @$this->db->query('SELECT * FROM wz where id like "%' .$q. '%" OR title like "%' .$q. '%" OR content like "%' .$q. '%" ');
                while ($row = $all->unbuffered_row('array')) {
                    $data['log'][] = $row;
                }
            }

                if (count($data) == 0)
                    $data['key'] = '<b style="color: #6a7358">抱歉,没有找到所需的信息</b>';
                else
                    $data['q'] = $q;
            $this->load->view('article',$data);
        }
        


    }
}

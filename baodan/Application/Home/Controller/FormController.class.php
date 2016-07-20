<?php
namespace Home\Controller;
use Think\Controller;
    
class FormController extends Controller
{
    public function manager()  
     {
       $this->display();
     }

    public function pwd()
     { 
        session_start();
  //    $_SESSION['username'] = $_POST['username'];
  //    $_SESSION['password'] = $_POST['password']; 
        $_SESSION['username'] = I('username');
        $_SESSION['password'] = I('password'); 
        $_SESSION['mylogintime'] = time();
        
        $User   =   M('users');
        $data1 = $User->where('username = "admin" ')->field('username,password')->find();
        $_SESSION['data1'] = $data1;
        $data2 = $User->where('username = "admin1"')->field('username,password')->find();
        $_SESSION['data2'] = $data2;
        if(  $_SESSION['username'] == $data2['username'] && md5($_SESSION['password']) == $data2['password'] )
        {
  //        redirect('http://zrrrt.com/baodan/index.php/Home/Form/read.html');
             redirect(U('Home/Form/read'));
        }
        elseif( $_SESSION['username'] == $data1['username'] && md5($_SESSION['password']) == $data1['password'])
        {

           
     //     redirect('http://zrrrt.com/baodan/index.php/Home/Form/read1.html');
             redirect(U('Home/Form/read1'));
        }
        else
        {
                $this->error('管理员名称或密码错误！');
        }
        
     }

     public function insert()
     {
        $Form   =   D('Form');
        
        if($Form->create()) {

            $result =   $Form->add();
        
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }

      //  $map['insurance&name'] =array(array('notlike','%险%'), $_name,'_multi'=>true);
       // $map['idcard&name'] =array($_idcard, $_name,'_multi'=>true);
      //  $Form->where($map)->save($_insurance);
    }

    public function read($id=0)
    {

    if( $_SESSION['username'] ==  $_SESSION['data2']['username'] && md5($_SESSION['password']) == $_SESSION['data2']['password'] )
    {
    $Form   =   M('Form');
    $data = $Form->select();
    $this->assign('data',$data);
    $this->display();
    }else
        {
                $this->error('管理员名称或密码错误！!');
            }
    }

    public function read1($id=0)
    {
        if( $_SESSION['username'] ==  $_SESSION['data1']['username'] && md5($_SESSION['password']) == $_SESSION['data1']['password'] )
    {
    $Form   =   M('Form');
    $data = $Form->select();
    $this->assign('data',$data);
    
    $this->display();
    }else
        {
                $this->error('管理员名称或密码错误！!');
            }
    }

public function edit1($id=0)
{
    
    $this->display();
 }

public function edit2($id=0)
{
    $Form   =   M('Form');
    $id = decode(trim(I("get.id")));
    $this->assign('vo',$Form->find($id));
    $this->display();
 }

 public function edit3($id=0)
{
    $Form   =   M('Form');
    $id = decode(trim(I("get.id")));
    $this->assign('vo',$Form->find($id));
    $this->display();
 }

public function edit($id=0)
{
   session_start();
// $_SESSION['idcard'] = $_POST["idcard"];
   $_SESSION['idcard'] = I("idcard");

    $Form   =   M('Form');
    
    $this->assign('vo',$Form->where($_SESSION)->find());
    $this->display();
 }
 public function update()
 {


    $Form   =   D('Form');
    if($Form->create()) 
    {
        $result =   $Form->save();
        if($result) 
        {
            $this->success('数据更改成功！');
        }else
        {
            $this->error('所有数据皆未变化,故勿需重新写入！');
        }
    }else{
        $this->error($Form->getError());
    }
 }

}

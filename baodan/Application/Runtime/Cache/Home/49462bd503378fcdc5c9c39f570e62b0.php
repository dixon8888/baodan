<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Beautiful design tables in HTML in the style of a zebra.</title>
  <link rel="stylesheet" href="/baodan/application/home/view/form/css/style.css" type="text/css">

<script language="javascript"> 
      
window.onbeforeunload = function() {
  <?php
 if ((time() - $_SESSION['mylogintime']) > (60*10)) { unset($_SESSION["username"]); unset($_SESSION["password"]); } ?>
    return '';

}
　　　</script> 
  
</head>

<body>

<div id="container">   

  <table class="zebra">
    <caption>深圳中融保险经纪有限公司保险平台</caption>
    <thead>
      <tr>
        <th>投保人姓名</th>
        <th>身份证号</th>
        <th>险种</th>
        <th>车牌号</th>
        <th>车架号</th>
        <th>发动机号</th>
        <th>注册日期</th>
        <th>车辆品牌型号</th>
        <th>保险起期</th>
        <th>保费</th>
        <th>是否已经缴费</th>
        <th>备注</th>
        <th>编辑</th>
      </tr>
    </thead>
        <tbody>
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
              <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["idcard"]); ?></td>
                <td><?php echo ($vo["insurance"]); ?></td>
                <td><?php echo ($vo["car_plate"]); ?></td>
                <td><?php echo ($vo["car_frame"]); ?></td>
                <td><?php echo ($vo["car_motor"]); ?></td>
                <td><?php echo ($vo["car_register_date"]); ?></td>
                <td><?php echo ($vo["car_model"]); ?></td>
                <td><?php echo ($vo["car_insurance_date"]); ?></td>
                <td><?php echo ($vo["insurance_price"]); ?></td>
                <td><?php echo ($vo["ispaid"]); ?></td>
                <td><?php echo ($vo["note"]); ?></td>
                <td><button style="background:red" onclick="window.open('<?php echo U('Home/Form/edit3',array('id'=>encode($vo['id'])));?>')">编辑</button> </td>
              
            </tr><?php endforeach; endif; ?>
        </tbody>

  </table>
</div>
    
</body>
</html>
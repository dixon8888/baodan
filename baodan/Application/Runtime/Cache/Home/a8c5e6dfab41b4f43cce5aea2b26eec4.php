<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>深圳中融保险经纪有限公司保险平台</title>
<h1 align="center"><b> <font color="#FF0000" size="6" > 深圳中融保险经纪有限公司保险平台 </font> </b></h1>
</head>
<body>

<FORM method="post" action="/baodan/index.php/Home/Form/update">
      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="5">

            

             <tr>
             <td align="right">保险分销商编号</td>
             <td><input name="code" type="text" id="code" value="<?php echo ($vo["code"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>

             <tr>
             <td align="right">投保人姓名</td>
             <td><input name="name" type="text" id="name" value="<?php echo ($vo["name"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>
             
             <tr>
             <td align="right">身份证号</td>
             <td><input name="idcard" type="text" id="idcard" value="<?php echo ($vo["idcard"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>

             <tr>
             <td align="right">手机号</td>
             <td><input name="mobile" type="text" id="mobile"  value="<?php echo ($vo["mobile"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>

             <tr>
             <td align="right">邮箱</td>
             <td><input name="email" type="text" id="email" value="<?php echo ($vo["email"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>

            <tr>
             <td align="right">已选险种</td>
            <td><?php echo ($vo["insurance"]); ?></td>
             </tr>

             <tr>
             <td align="right">险种 <span style="color:#F00;">*</span> </td>
             <td><select name="insurance" id="insurance"  />
                 <option value='车险'>车险</option>
                 <option value='非车险'>非车险</option> 
                 <option value='农水险'>农水险</option>                
            </td>
             </tr>
            
            

            <tr>
             <td align="right">车牌号(车险必填)</td>
             <td><input name="car_plate" type="text" id="car_plate" value="<?php echo ($vo["car_plate"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">车架号(车险必填)</td>
             <td><input name="car_frame" type="text" id="car_frame" value="<?php echo ($vo["car_frame"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">发动机号(车险必填)</td>
             <td><input name="car_motor" type="text" id="car_motor" value="<?php echo ($vo["car_motor"]); ?>" />
             </td>
             </tr>


             <tr>
             <td align="right">注册日期(年/月/日)(车险必填)</td>
             <td><input name="car_register_date" type="text" id="car_register_date" value="<?php echo ($vo["car_register_date"]); ?>" />
             </td>
             </tr>


            <tr>
             <td align="right">车辆品牌型号(车险必填)</td>
             <td><input name="car_model" type="text" id="car_model" value="<?php echo ($vo["car_model"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">保险起期(年/月/日)(车险必填)</td>
             <td><input name="car_insurance_date" type="text" id="car_insurance_date" value="<?php echo ($vo["car_insurance_date"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">应缴保费</td>
             <td><input name="insurance_price" type="text" id="insurance_price" disabled="disabled" value="<?php echo ($vo["insurance_price"]); ?>" />
             </td>
             </tr>
       
             <tr>
             <td align="right">是否已缴保费</td>
            <td><?php echo ($vo["ispaid"]); ?></td>
             </tr>

            <tr>
             <td align="right">是否已缴保费</td>
             <td><select name="ispaid" id="ispaid"  />
                 <option value='否' disabled="disabled">否</option>
                 <option value='是' disabled="disabled">是</option>  
            </td>
             </tr>

             <tr>
             <td align="right">实缴保费</td>
             <td><input name="insurance_price_paid" type="text" id="insurance_price_paid" disabled="disabled" value="<?php echo ($vo["insurance_price_paid"]); ?>" />
             </td>
             </tr>
             
             <tr>
             <td align="right">缴费日期(年/月/日)</td>
             <td><input name="insurance_paydate" type="text" id="insurance_paydate" disabled="disabled" value="<?php echo ($vo["insurance_paydate"]); ?>" />
             </td>
             </tr>
             
             <tr>
             <td align="right">缴费录入员</td>
             <td><input name="insurance_recordman" type="text" id="insurance_recordman" disabled="disabled" value="<?php echo ($vo["insurance_recordman"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">缴费录入员所属保险公司</td>
             <td><input name="insurance_company" type="text" id="insurance_company" disabled="disabled" value="<?php echo ($vo["insurance_company"]); ?>" />
             </td>
             </tr>

             <tr>
             <td align="right">保险积分</td>
             <td><input name="insurance_points" type="text" id="insurance_points" value="<?php echo ($vo["insurance_points"]); ?>" disabled="disabled"/>
             </td>
             </tr>

            <tr>
             <td align="right">省份</td>
             <td><input name="province" type="text" id="province" value="<?php echo ($vo["province"]); ?>" />
               <span style="color:#F00;">*</span></td>
           </tr>
           

            <tr>
             <td align="right">城市</td>
             <td><input name="city" type="text" id="city" value="<?php echo ($vo["city"]); ?>" />
               <span style="color:#F00;">*</span></td>
           </tr>
          

            <tr>
             <td align="right">城区</td>
             <td><input name="area" type="text" id="area" value="<?php echo ($vo["area"]); ?>" />
               <span style="color:#F00;">*</span></td>
           </tr>
           

           <tr>
             <td align="right">更新时间(年/月/日)</td>
             <td><input name="updatetime" type="text" id="updatetime" value="<?php echo ($vo["updatetime"]); ?>" />
               <span style="color:#F00;">*</span></td>
             </tr>
             

             <tr>
             <td align="right">备注(填写车险项目等)</td>
             <td><TEXTAREA name="note" rows="5" cols="45"><?php echo ($vo["note"]); ?></TEXTAREA></td>
             </tr>
             

             <INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
             <tr>
             <td align="right">
             <INPUT style="background:green" type="submit" value="提交更新资料">
             </td>
             </tr>

             <tr>
             <td align="right">
             <button style="background:red" onclick="window.open('http://zrrrt.com/baodan/index.php/Home/Form/add.html')">返回首页</button> 
             </td>
            </tr>

             </table>
            
            
             
</FORM>

</body>
</html>
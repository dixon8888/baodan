<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jQuery省市区四级联动菜单-在线演示</title>

<link href="/baodan/index.php/Home/Form/css/city.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/baodan/index.php/Home/Form/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/baodan/index.php/Home/Form/js/city4.city.js"></script>
<script type="text/javascript" src="/baodan/index.php/Home/Form/js/city4.js"></script>

</head>
<body>

<div class="demo">                 
	<form action="/baodan/index.php/Home/Form/insert" name="form1" method="post">
		<div class="infolist">
			<lable>所在地区保险公司：</lable>
			<div class="liststyle">
				<span id="Province">
					<i>请选择省份</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
					</ul>
					<input type="hidden" name="cho_Province" value="请选择省份">
				</span>
				<span id="City">
					<i>请选择城市</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
					</ul>
					<input type="hidden" name="cho_City" value="请选择城市">
				</span>
				<span id="Area">
					<i>请选择地区</i>
					<ul>
						<li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>

					</ul>
					<input type="hidden" name="cho_Area" value="请选择地区">
				</span>
				
			</div>
		</div>
		<input type="submit" value="提交">
	</form> 
</div>
   <div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
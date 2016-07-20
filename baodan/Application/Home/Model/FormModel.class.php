<?php
namespace Home\Model;
use Think\Model;
class FormModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
    	array('code','require','大哥,带*号的为必填项啊!!'),
        array('name','require','大哥,带*号的为必填项啊!!'),
        array('idcard','require','大哥,带*号的为必填项啊!!'),
        array('mobile','require','大哥,带*号的为必填项啊!!'),
        array('email','require','大哥,带*号的为必填项啊!!'),
        array('insurance','require','大哥,带*号的为必填项啊!!'),
        array('province','require','大哥,带*号的为必填项啊!!'),
        array('city','require','大哥,带*号的为必填项啊!!'),
        array('area','require','大哥,带*号的为必填项啊!!'),
        array('updatetime','require','大哥,带*号的为必填项啊!!'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
 }
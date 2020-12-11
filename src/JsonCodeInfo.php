<?php
namespace JsonCode;

class JsonCodeInfo
{
    //设置一个布尔类型，数据类型，信息类型，通过类型
    public static function apply($bool = true, $data = [], $message = '', $pass = true)
    {
        $res = [];//定义一个空集合
        $data && $res['data'] = $data;
        if ($message) {
            $res['message'] = $message;
        } else {
            $res['message'] = $bool ? '操作成功！' : '操作失败！';
        }
        if ($pass) {
            header('Access-Control-Allow-Origin:*');
        }
        $res['status'] = $bool ? 1 : 0;
        return json_encode($res);
    }
}
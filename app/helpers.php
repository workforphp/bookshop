<?php

if(!function_exists('toMsg')){
    /**
     *根据code返回相应的信息
     */
    function toMsg($code)
    {
        $msg = [
            '0' => '返回成功',
            '1' => 'token不存在',
            '2' => '验证码错误',
            '80001' => '缺少必要参数',
            '9000' => '插入数据库失败'
        ];
        return $msg[$code];
    }

}
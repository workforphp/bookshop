<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseController;

class UserController extends BaseController
{
    //
    public function getInfo()
    {
        return '这是我的个人信息';
    }
}

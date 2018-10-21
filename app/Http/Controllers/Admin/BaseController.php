<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    public $mid;            //会员id
    public $sid;            //商家id

    public function __construct()
    {
        $this->mid = (int)request('mid');
        $this->sid = (int)request('sid');
//        $this->sid = $request->input('sid');
    }

    public function responseMsg($code,$msg,$data)
    {
        $json = json_encode(compact('code','msg','data'),JSON_UNESCAPED_UNICODE);
//        echo response($json);
        echo $json;
        exit;
    }

    public function my()
    {
        return 'baseController';
    }
}


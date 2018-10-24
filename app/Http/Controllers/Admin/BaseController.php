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
        $this->aid = (int)request('aid');
//        $this->sid = $request->input('sid');
    }

    public function responseMsg($code = 0,$msg = '',$data = [])
    {
        if(!$msg){
            $msg = toMsg($code);
        }
        $json = json_encode(compact('code','msg','data'),JSON_UNESCAPED_UNICODE);
        echo $json;
        exit;
    }

    public function my()
    {
        return 'baseController';
    }
}


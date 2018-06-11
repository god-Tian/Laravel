<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/11 0011
 * Time: 下午 2:06
 */

namespace App\Http\Controllers\Liuyan;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LiuyanController extends Controller
{
    public function index() {
        $list = DB::table('liuyanban')->simplePaginate(3);
        return view('liuyan.index', [
            'list' => $list
        ]);
    }

    public function addsave() {
//        var_dump($request->all());die;
        $token = $_POST['_token'];
        unset($_POST['_token']);
        $_POST['username'] = '张三';
        $_POST['create_time'] = $_POST['update_time'] = time();
        DB::table('liuyanban')->insert($_POST);
        return json_encode($_POST);
    }

    public function delete() {
        DB::table('liuyanban')->delete($_GET['id']);
        return redirect('/liuyan/index');
    }
}
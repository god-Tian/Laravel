<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/10 0010
 * Time: 下午 9:04
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LiuyanbanController extends Controller
{
    public function index() {
        $list = DB::table('liuyanban')->get();
        return view('liuyanban.index', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('liuyanban.add');
    }

    public function addsave() {
//        var_dump($request->all());die;
        unset($_POST['_token']);
        $_POST['create_time'] = $_POST['update_time'] = time();
        DB::table('liuyanban')->insert($_POST);
        return redirect('/liuyanban/index');
    }

    public function delete() {
        DB::table('liuyanban')->delete($_GET['id']);
        return redirect('/liuyanban/index');
    }

    public function edit() {
        $id = empty($_GET['id']) ? null : $_GET['id'];
        $info = empty($id) ? null : DB::table('liuyanban')->where(['id' => $id])->first();
//        var_dump($info);die;
        return view('liuyanban.edit', [
            'list' => $info
        ]);
    }

    public function editsave() {
        unset($_POST['_token']);
        DB::table('liuyanban')->where(['id' => $_POST['id']])->update($_POST);
        return redirect('/liuyanban/index');
    }
}
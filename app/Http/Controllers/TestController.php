<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(){
        // 取数据列表
        $select = DB::table('user')->get();  
        // 取一条数据
        $select1 = DB::table('user')->where('id',1)->first();
        $name = 'xiaoyu';
        return view('test',['list' => $select,'info'=>$select1]);
    }
}

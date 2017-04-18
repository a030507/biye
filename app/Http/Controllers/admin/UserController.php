<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
     //
    public function index()
    {
    	$data = DB::table('users')->get();
    	return view('admin.user.index',['list'=> $data]);
    }
    public function add()
    {
    	return view('admin.user.add');
    }
    public function doAdd(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('users')->insert($data);
    	$data = DB::table('users')->get();
    	return view('admin.user.index',['data'=> $data]);
    	
    }
    public function edit($id)
    {
    	$userinfo = DB::table('users')->where('id',$id)->first();
    	return view('admin.user.edit',['userinfo' => $userinfo]);
    }
    public function doEdit(Request $request)
    {
    	$data = $request->except('_token');
    	DB::table('users')->where('id',$data['id'])->update($data);
    	$data = DB::table('users')->get();
    	return view('admin.user.index',['data'=> $data]);
    }
    public function delete($id)
    {
    	DB::table('users')->where('id',$id)->delete();
    	$data = DB::table('users')->get();
    	return view('admin.user.index',['data'=>$data]);
    }
    
}

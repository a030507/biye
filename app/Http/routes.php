<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 使用as关键字来为路由命名：helloworld
Route::get('/hello',['as'=>'helloworld',function(){
	return 'Hello world!';
}]);

// 重定向链接跳转到/hello
// Route::get('/test', function () {
//     return redirect()->route('helloworld');
// });

// 带参数的路由命名：

Route::get('/hello/test/{id}',['as'=>'helloworld',function($id){
    return 'Hello helloworld '.$id.'！';
}]);

// 对应的测试路由
Route::get('/test1',function(){
    return redirect()->route('helloworld',['id'=>1]);
});

// 中间件
Route::group(['middleware'=>'test'],function(){
    Route::get('/write/laravelacademy',function(){
        //使用Test中间件
    });
    Route::get('/update/laravelacademy',function(){
       //使用Test中间件
    });
});

Route::get('/age/refuse',['as'=>'refuse',function(){
    return "未成年人禁止入内！";
}]);

Route::resource('post','PostController');


// 控制器路由  路由分组，公共前缀
Route::group(['prefix' => 'mysql'],function(){
    Route::get('select','MysqlController@select');//访问mysql/select
    Route::get('insert','MysqlController@insert');
});


// 视图路由
Route::get('/index/index','IndexController@view');

Route::get('/greet', function ()    {
    return view('greeting', ['name' => 'James']);
});

Route:get('/greeting','IndexController@greet');

Route::get('blade', function () {
    return view('child');
});


// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('profile','UserController@profile');

Route::get('test','TestController@test');


    Route::get('/admin','admin\indexController@index');
    Route::get('/admin/user/','admin\UserController@index');

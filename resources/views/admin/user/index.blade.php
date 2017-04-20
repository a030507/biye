@extends('admin.layout.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>用户列表</small>
            </h1>
            <a href="" class="btn btn-primary margin-bottom margin-top">新增用户</a>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
                <li>用户管理</li>
                <li class="active">用户列表</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">用户列表</h3>
                            <div class="box-tools">
                                <form action="" method="get">

                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm pull-right sk-input" name="sk" value="{{ session('sk') }}"  placeholder="搜索">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>用户编号</th>
                                    <th>昵称</th>
                                    <th>所属家族</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($list as $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->nickname}}
                                    </td>
                                    <td> 4</td>
                                    <td>
                                        <a href="/admin/user/edit/{{$v->id}}">
                                        修改</a>
                                        |
                                        <a href="/admin/user/delete/{{$v->id}}">
                                        删除</a>     </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  <!-- /.content-wrapper -->
@endsection



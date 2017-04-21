@extends('admin.layout.layout')
@section('content')

               <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        用户列表
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            @if(isset($data)&&$data->id)
              <h3 class="box-title">修改用户</h3>
            @else
              <h3 class="box-title">新增用户</h3>
            @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <style>
              .box-body{
                padding: 50px 30px;}
            </style>
            <form class="form-horizontal addForm" method="post" action="{{asset("/admin/user/doEdit")}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{$data->id}}">

              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Email" value="{{isset($data)?$data->name:''}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">密码</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" value="{{isset($data)?$data->password:''}}">
                  </div>
                </div>
<!--                 <div class="form-group">
                  <label for="inputAvatar3" class="col-sm-2 control-label">上传图片</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control fileup" id="inputAvatar3" name="avatar" >
                  </div>
                </div>
 -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">取消</button>
                <button type="submit" class="btn btn-info pull-right">提交</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
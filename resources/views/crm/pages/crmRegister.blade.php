@extends('crm.layouts.master')

@section('content')
    @include('crm.partials.navbar')
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">新员工账号注册</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="register_form" class="form-horizontal" role="form" method="POST" action="{{ url('/crm/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group">
                            <label class="col-md-4 control-label">用户名:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">电话:</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tel" value="{{ old('tel') }}">
                            </div>
                        </div>

                        {{--<div class="form-group">
                            <label class="col-md-4 control-label">邮箱:</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>--}}

                        <div class="form-group">
                            <label class="col-md-4 control-label">密码:</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">确认密码:</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 submit-button">
                                <button type="submit" class="btn btn-primary">
                                    确认注册
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('crm.partials.footer')
@endsection

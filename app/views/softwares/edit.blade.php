@extends('softwares.main')

@section('title')
    Chỉnh sửa phần mềm
@stop

@section('content')
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{asset('admin/home')}}"> Trang Chủ</a></li>
            <li><a href="{{asset('softwares/index')}}"> Phần mềm</a></li>
            @if(empty($softwarecheck))
                <li class="active"> Chỉnh sửa phần mềm</li>
            @else
                <li><a href="{{asset('softwares/edit/0')}}"> Chỉnh sửa phần mềm</a></li>
                <li class="active">{{ $softwarecheck->id }}</li>
            @endif
        </ol>
        <h2><img src="{{asset('assets/image/icon.png')}}" alt="icon"> Phần Mềm</h2>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li><a href="{{asset('softwares/index')}}">Phần mềm</a></li>
                <li><a href="{{asset('softwares/create')}}">Thêm phần mềm</a></li>
                <li class="active"><a href="{{asset('softwares/edit/0')}}">Chỉnh sửa phần mềm</a></li>
                <li><a href="{{asset('softwares/delete/0')}}">Xóa phần mềm</a></li>      
                <li><a href="{{asset('softwares/show')}}">Thông tin phần mềm</a></li>
            </ul>
            <br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Chỉnh Sửa Phần Mềm</h3>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <label>Điều khoản sử dụng</label>
                        <ol>
                           
                        </ol>     
                    </div>
                    <div>
                        <form class="well" href="{{asset('softwares/edit')}}" method="post"> 
                            @if ($errors->any())
                                <div class='alert alert-danger'>
                                    <ul>    
                                        {{ implode('', $errors->all('<span class="glyphicon glyphicon-exclamation-sign"></span> :message<br>')) }}
                                    </ul>
                                </div>   
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-exclamation-sign" style="padding-left:40px"></span> {{Session::get('fail')}}
                                    {{ Session::forget("fail") }}
                                </div>
                            @endif 
                            
                            <p><button class="btn btn-default">Xác nhận</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
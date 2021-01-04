@extends('admin.layouts.master')
@section('title','修改會員資料')
@section('content')
    <div id="layoutSidenav_content">
        <div class="container-fluid">
            <div class="card mb-4">
<!-- Page Heading -->
    <div class="card uper">

        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-edit"></i> 更改會員資料
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->



        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.member.update', $user->id ) }}" method="POST" role="form" >

                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">姓名：</label>
                        <input id="name" name="name" class="form-control" placeholder="{{$user->name}}" value="{{$user->name}}"required>
                    </div>
                    <div class="form-group">
                        <label for="email">電子郵件：</label>
                        <input id="email" name="email" class="form-control" placeholder="{{$user->email}}" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="room_id">房間編號：</label>
                        <input type="number" id="room_id" name="room_id" class="form-control" placeholder="{{$user->room_id}}" value="{{$user->room_id}}">
                    </div>
                    <div class="form-group">
                        <label for="account">帳號：</label>
                        <input id="account" name="account" class="form-control" disabled="disabled" value="{{$user->account}}">
                    </div>
                    <div class="form-group">
                        <label for="contact_id">聯絡人編號：</label>
                        <input type="number" id="contact_id" name="contact_id" class="form-control" placeholder="{{$user->contact_id}}" value="{{$user->contact_id}}">
                    </div>
                    <div class="form-group">
                        <label for="phone">電話：</label>
                        <input type="number" id="phone" name="phone" class="form-control" placeholder="{{$user->phone}}" value="{{$user->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="address">地址：</label>
                        <input id="address" name="address" class="form-control" placeholder="{{$user->address}}" value="{{$user->address}}">
                    </div>
                    <div class="form-group">
                        <label for="id_number">身份證字號：</label>
                        <input id="id_number" name="id_number" class="form-control" placeholder="{{$user->id_number}}" value="{{$user->id_number}}">
                    </div>
                    <div class="form-group">
                        <label for="StartTime">開始租屋日期：</label>
                        <input type="date" id="StartTime" name="StartTime" class="form-control" placeholder="{{$user->StartTime}}" value="{{Carbon\Carbon::parse($user->StartTime)->format('Y-m-d')}}">
                    </div><div class="form-group">
                        <label for="EndTime">結束租屋日期：</label>
                        <input type="date" id="EndTime" name="EndTime" class="form-control" placeholder="{{$user->EndTime}}" value="{{Carbon\Carbon::parse($user->EndTime)->format('Y-m-d')}}">
                    </div>
                    <button type="submit" class="btn-sm btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection

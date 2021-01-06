@extends('admin.layouts.master')
@section('title','新增信件')
@section('content')

    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 新增信件資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.mail.store') }}" method="POST" role="form">

                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="room_id">房間編號：</label>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{$room->first()->id}}" disabled="disabled" required>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{$room->first()->id}}" type="hidden" required>
                        </div>
                        <div class="form-group">
                            <label for="category">來件種類：</label>
                            <select id="category" name="category" required>
                                <option value="0" >信件</option>
                                <option value="1">包裹</option>
                                <option value="2">信件及包裹</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ArrivalTime">抵達日期：</label>
                            <input type="date" id="ArrivalTime" name="ArrivalTime" class="form-control"
                                   value="{{Carbon\Carbon::parse(Carbon\Carbon::now())->format('Y-m-d')}}" >

                        </div>
                        <div class="form-group">
                            <label for="statu">領取狀態：</label>
                            <select id="statu" name="statu">
                                <option value="0" selected>未領取</option>
                                <option value="1">已領取</option>
                                <option value="2">信件及包裹</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-sm btn-primary">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

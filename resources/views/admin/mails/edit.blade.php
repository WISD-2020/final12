@extends('admin.layouts.master')
@section('title','修改信件資料')
@section('content')


    <div class="card mb-4" >
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 更改信件資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.mail.update', $mails->id ) }}" method="POST" role="form" >

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="room_id">房間編號：</label>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{$mails->room_id}}" disabled="disabled" required>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{$mails->room_id}}" type="hidden" required>
                        </div>
                        <div class="form-group">
                            <label for="category">來件種類：</label>
                            <select id="category" name="category" required>
                                <option value="0" @if(($mails->category)==0)selected @endif>信件</option>
                                <option value="1">包裹</option>
                                <option value="2">信件及包裹</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ArrivalTime">抵達日期：</label>
                            <input type="date" id="ArrivalTime" name="ArrivalTime" class="form-control"
                                   value="{{Carbon\Carbon::parse($mails->ArrivalTime)->format('Y-m-d')}}" >

                        </div>
                        <div class="form-group">
                            <label for="collection_time">取件日期：</label>
                            <input type="date" id="collection_time" name="collection_time" class="form-control"
                                   value="{{Carbon\Carbon::parse($mails->collection_time)->format('Y-m-d')}}" >

                        </div>
                        <div class="form-group">
                            <label for="statu">領取狀態：</label>
                            <select id="statu" name="statu">
                                <option value="0" @if($mails->statu==0)selected @endif>未領取</option>
                                <option value="1"@if($mails->statu==1)selected @endif>已領取</option>

                            </select>
                        </div>

                        <button type="submit" class="btn-sm btn-primary">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

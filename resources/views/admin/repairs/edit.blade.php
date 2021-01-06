@extends('admin.layouts.master')
@section('title','修改修繕資料')
@section('content')


    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 更改修繕資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.repair.update', $repairs->id ) }}" method="POST" role="form">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="id">修繕回報編號：</label>
                            <input id="id" name="id" class="form-control"
                                   value="{{$repairs->id}}" disabled="disabled" >
                            <input id="id" name="id" class="form-control"
                                   value="{{$repairs->id}}" type="hidden">
                        </div>
                        <div class="form-group">
                            <label for="room_id">房間編號：</label>
                            <input id="room_id" name="room_id" class="form-control" placeholder="{{$repairs->room_id}}"
                                   value="{{$repairs->room_id}}" disabled="disabled" >
                        </div>
                        <div class="form-group">
                            <label for="content">報修內容：</label>
                            <input id="content" name="content" class="form-control"
                                   value="{{$repairs->content}}"disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="raintenance_staff">維修人員：</label>
                            <input id="raintenance_staff" name="raintenance_staff" class="form-control"
                                   placeholder="輸入維修人員姓名" value="{{$repairs->raintenance_staff}}">
                        </div>
                        <div class="form-group">
                            <label for="repair_date">維修日期：</label>
                            <input type="date" id="repair_date" name="repair_date" class="form-control"
                                   value="{{Carbon\Carbon::parse($repairs->repair_date)->format('Y-m-d')}}">
                        </div>
                        <div class="form-group">
                            <label for="repair_fess">維修費用：</label>
                            <input type="number" id="repair_fess" name="repair_fess" class="form-control"
                                   placeholder="{{$repairs->repair_fess}}" value="{{$repairs->repair_fess}}">
                        </div>
                        <div class="form-group">
                            <label for="repairs_statu">報修狀態：</label>
                            <select id="repairs_statu" name="repairs_statu">
                                <option value="0" @if(($repairs->repairs_statu)==0) selected @endif>未修繕</option>
                                <option value="1" @if(($repairs->repairs_statu)==1) selected @endif>修繕中</option>
                                <option value="2" @if(($repairs->repairs_statu)==2) selected @endif>修繕完畢</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-sm btn-primary">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

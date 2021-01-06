@extends('tenant.layouts.master')

@section('title','edit_repair')

@section('content')
    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 更改修繕單資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-lg-12">
                    <form action="{{route('repair.update',$repairs->id)}}" method="POST" role="form">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="room_id">房間編號：</label>
                            <input id="room_id" name="room_id" class="form-control" placeholder="{{auth()->user()->room_id}}"
                                   value="{{auth()->user()->room_id}}" disabled="disabled" required>


                        </div>
                        <div class="form-group">
                            <label for="content">報修內容：</label>
                            <input  id="content" name="content" class="form-control"
                                    value="{{$repairs->content}}">
                        </div>
                        <div class="form-group">
                            <label for="return_date">報修日期：</label>
                            <input id="return_date" type="date" name="return_date" class="form-control"
                                   placeholder="{{Carbon\Carbon::parse($repairs->return_date)->format('Y-m-d')}}"
                                   value="{{Carbon\Carbon::parse($repairs->return_date)->format('Y-m-d')}}">
                        </div>


                        <button type="submit" class="btn-sm btn-primary">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

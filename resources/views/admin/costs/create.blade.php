@extends('admin.layouts.master')
@section('title','新增費用')
@section('content')

    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 新增費用資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.cost.store') }}" method="POST" role="form">

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
                            <label for="cost_month">費用月份：</label>
                            <input id="cost_month" type="date" name="cost_month" class="form-control"
                                   placeholder="請選擇日期"
                                   value="">
                        </div>
                        <div class="form-group">
                            <label for="waterbill">水費：</label>
                            <input type="number" id="waterbill" name="waterbill" class="form-control"
                                   value="100" disabled="disabled">
                            <input id="waterbill" name="waterbill" class="form-control"
                                   value="100" type="hidden">
                        </div>
                        <div class="form-group">
                            <label for="rent">租金：</label>
                            <input type="number" id="rent" name="rent" class="form-control" disabled="disabled"
                                   value="{{$room->first()->room_price}}">
                            <input id="rent" name="rent" class="form-control"
                                   value="{{$room->first()->room_price}}" type="hidden">
                        </div>
                        <div class="form-group">
                            <label for="consumption">度數：</label>
                            <input type="number" id="consumption" name="consumption" class="form-control"
                                   placeholder="輸入用電度數" value="">
                        </div>
                        <div class="form-group">
                            <label for="public_e">公共電費：</label>
                            <input type="number" id="public_e" name="public_e" class="form-control"
                                   placeholder="輸入公共電費" value="">
                        </div>
                        <div class="form-group">
                            <label for="w_status">水費繳交：</label>
                            <select id="w_status" name="w_status">
                                <option value="0" selected>未繳費</option>
                                <option value="1">已繳費</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="e_status">電費繳交：</label>
                            <select id="e_status" name="e_status">
                                <option value="0" selected>未繳費</option>
                                <option value="1">已繳費</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="r_status">租金繳交：</label>
                            <select id="r_status" name="r_status">
                                <option value="0" selected>未繳費</option>
                                <option value="1">已繳費</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-sm btn-primary">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

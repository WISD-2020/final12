@extends('admin.layouts.master')
@section('title','修改費用資料')
@section('content')


    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 更改費用資料
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('admin.cost.update', $costs->id ) }}" method="POST" role="form">

                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="room_id">房間編號：</label>
                            <input id="room_id" name="room_id" class="form-control" placeholder="{{$costs->room_id}}"
                                   value="{{$costs->room_id}}" disabled="disabled" required>
                        </div>
                        <div class="form-group">
                            <label for="cost_month">費用月份：</label>
                            <input id="cost_month" type="date" name="cost_month" class="form-control"
                                   placeholder="{{Carbon\Carbon::parse($costs->cost_monthCarbon)->format('Y-m-d')}}"
                                   value="{{Carbon\Carbon::parse($costs->cost_monthCarbon)->format('Y-m-d')}}">
                        </div>
                        <div class="form-group">
                            <label for="waterbill">水費：</label>
                            <input type="number" id="waterbill" name="waterbill" class="form-control"
                                   placeholder="{{$costs->waterbill}}" value="{{$costs->waterbill}}"disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="rent">租金：</label>
                            <input type="number" id="rent" name="rent" class="form-control" disabled="disabled"
                                   value="{{$costs->rent}}">
                        </div>
                        <div class="form-group">
                            <label for="consumption">度數：</label>
                            <input type="number" id="consumption" name="consumption" class="form-control"
                                   placeholder="{{$costs->consumption}}" value="{{$costs->consumption}}">
                        </div>
                        <div class="form-group">
                            <label for="public_e">公共電費：</label>
                            <input type="number" id="public_e" name="public_e" class="form-control"
                                   placeholder="{{$costs->public_e}}" value="{{$costs->public_e}}">
                        </div>
                        <div class="form-group">
                            <label for="w_status">水費繳交：</label>
                            <select id="w_status" name="w_status">
                                <option value="0" @if($costs->w_status==0) selected @endif>未繳費</option>
                                <option value="1" @if($costs->w_status==1) selected @endif>已繳費</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="e_status">電費繳交：</label>
                            <select id="e_status" name="e_status">
                                <option value="0" @if($costs->e_status==0)selected @endif>未繳費</option>
                                <option value="1" @if($costs->e_status==1)selected @endif>已繳費</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="r_status">租金繳交：</label>
                            <select id="r_status" name="r_status">
                                <option value="0" @if($costs->r_status==0)selected @endif>未繳費</option>
                                <option value="1" @if($costs->r_status==1)selected @endif>已繳費</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-sm btn-primary">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

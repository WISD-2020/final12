@extends('tenant.layouts.master')

@section('title','users_information')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">房客資訊查看</h1>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    房客資訊列表
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>房間編號</th>
                                <th>帳號</th>
                                <th>性別</th>
                                <th>信箱</th>
                                <th>手機</th>
                                <th>地址</th>
                                <th>生日</th>
                                <th>租金</th>
                                <th>房型</th>
                                <th>租約日期</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($shows as $show)
                                <tr>
                                    <td>{{$show->name}}</td>
                                    <td>{{$show->room_id }}</td>
                                    <td>{{$show->account}}</td>
                                    <td>
                                        @if(($show->gender)==0)女
                                        @else男
                                        @endif
                                    </td>
                                    <td>{{$show->email}}</td>
                                    <td>{{$show->phone}}</td>
                                    <td>{{$show->address}}</td>
                                    <td>{{Carbon\Carbon::parse($show->birthday)->format('m/d')}}</td>
                                    <td>{{$show->room_price}}</td>
                                    <td>{{$show->room_type}}</td>
                                    <td>{{Carbon\Carbon::parse($show->StartTime)->format('Y/m/d')}}~{{Carbon\Carbon::parse($show->EndTime)->format('Y/m/d')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

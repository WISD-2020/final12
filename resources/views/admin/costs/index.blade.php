<?php


?>
@extends('admin.layouts.master')

@section('title', '費用管理')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">費用管理 <a href="{{ route('admin.member.create') }}" class="btn btn-success">新增費用</a></h1>
                {{--                <ol class="breadcrumb mb-4">--}}
                {{--                    <li class="breadcrumb-item active">Dashboard</li>--}}
                {{--                    <li class="breadcrumb-item active">Dashboard</li>--}}
                {{--                </ol>--}}

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        費用列表
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>房間編號</th>
                                    <th>費用月份</th>
                                    <th>水費</th>
                                    <th>電費</th>
                                    <th>租金</th>
                                    <th>水費繳交</th>
                                    <th>電費繳交</th>
                                    <th>租金繳交</th>
                                    <th>編輯</th>
                                    <th>刪除</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>房間編號</th>
                                    <th>費用月份</th>
                                    <th>水費</th>
                                    <th>電費</th>
                                    <th>租金</th>
                                    <th>水費繳交</th>
                                    <th>電費繳交</th>
                                    <th>租金繳交</th>
                                    <th>編輯</th>
                                    <th>刪除</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach ($costs as $cost)
                                    <tr>
                                        <!-- 任務名稱 -->
                                        <td class="table-text">
                                            <div>{{ $cost->room_id }}</div>
                                        </td>
                                        <td>{{Carbon\Carbon::parse($cost->cost_month)->format('m')}}</td>
                                        <td>{{$cost->waterbill}}</td>

                                        <td>{{(($cost->consumption)*5)+$cost->public_e}}</td>
                                        <td>{{$cost->rent}}</td>
                                        <td>
                                            @if(($cost->w_status)==0)未繳費
                                            @elseif(($cost->w_status)==1)已繳費

                                            @endif
                                        </td>
                                        <td>@if(($cost->e_status)==0)未繳費
                                            @elseif(($cost->e_status)==1)已繳費
                                            @endif
                                        </td>
                                        <td>@if(($cost->r_status)==0)未繳費
                                            @elseif(($cost->r_status)==1)已繳費
                                            @endif
                                        </td>


                                        <!-- 編輯按鈕 -->
                                        <td>
                                            <a href="{{ route('admin.cost.edit', $cost->id) }}"
                                               class="btn btn-primary">編輯</a>

                                        </td>
                                        <!-- 刪除按鈕 -->
                                        <td>
                                            <form action="{{route('admin.cost.destroy',$cost->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>


@endsection

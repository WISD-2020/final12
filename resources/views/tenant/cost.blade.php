@extends('tenant.layouts.master')

@section('title','Cost')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">費用查看</h1>

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
                                <th>姓名</th>
                                <th>房間編號</th>
                                <th>費用月份</th>
                                <th>水費</th>
                                <th>電費</th>
                                <th>租金</th>
                                <th>水費繳交</th>
                                <th>電費繳交</th>
                                <th>租金繳交</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>姓名</th>
                                <th>房間編號</th>
                                <th>費用月份</th>
                                <th>水費</th>
                                <th>電費</th>
                                <th>租金</th>
                                <th>水費繳交</th>
                                <th>電費繳交</th>
                                <th>租金繳交</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($costs as $cost)
                                <tr>
                                    <td>{{ $cost->name}}</td>
                                    <td>{{ $cost->room_id }}</td>
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


<?php


?>
@extends('admin.layouts.master')

@section('title', '修繕回報管理')

@section('content')



    <h1 class="mt-4">修繕回報管理 </h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            信件列表
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>修繕回報編號</th>
                        <th>房間編號</th>
                        <th>報修內容</th>
                        <th>維修人員</th>
                        <th>維修日期</th>
                        <th>維修費用</th>
                        <th>報修狀態</th>
                        <th>編輯</th>
                        <th>刪除</th>


                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>修繕回報編號</th>
                        <th>房間編號</th>
                        <th>報修內容</th>
                        <th>維修人員</th>
                        <th>維修日期</th>
                        <th>維修費用</th>
                        <th>報修狀態</th>
                        <th>編輯</th>
                        <th>刪除</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($repairs as $repair)
                        <tr>
                            <!-- 任務名稱 -->
                            <td class="table-text">
                                <div>{{ $repair->id }}</div>
                            </td>
                            <td>{{$repair->room_id}}</td>
                            <td>{{$repair->content}}</td>
                            <td>
                                {{$repair->raintenance_staff}}

                            </td>
                            <td>
                                {{Carbon\Carbon::parse($repair->repair_date)->format('Y-m-d')}}

                            </td>

                            <td>
                                {{$repair->repair_fess}}
                            </td>
                            <th>@if(($repair->repairs_statu)==0)未修繕
                                @elseif(($repair->repairs_statu)==1)修繕中
                                @elseif(($repair->repairs_statu)==2)修繕完畢
                                @endif
                            </th>
                            <!-- 編輯按鈕 -->
                            <td>
                                <a href="{{ route('admin.repair.edit', $repair->id) }}"
                                   class="btn btn-primary">編輯</a>

                            </td>
                            <!-- 刪除按鈕 -->
                            <td>
                                <form action="{{route('admin.repair.destroy',$repair->id)}}" method="POST">
                                   @csrf
                                   @method('DELETE')

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






@endsection

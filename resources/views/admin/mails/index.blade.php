<?php


?>
@extends('admin.layouts.master')

@section('title', '信件管理')

@section('content')



    <h1 class="mt-4">信件管理 </h1>
    <form action="{{ route('admin.mail.create') }}" method="POST" role="form">

        @csrf
        @method('POST')
        <div class="form-group">
            <label for="id">房間編號：</label>
            <select id="id" name="id">
                @foreach($rooms as $room)
                    <option value="{{$room->id}}">{{$room->id}}</option>
                @endforeach

            </select>
            <button type="submit" class="btn-sm btn-success">新增信件</button>
        </div>
    </form>

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
                        <th>信件編號</th>
                        <th>房間編號</th>
                        <th>來件日期</th>
                        <th>取件日期</th>
                        <th>來件種類</th>
                        <th>取件狀態</th>
                        <th>編輯</th>
                        <th>刪除</th>


                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>信件編號</th>
                        <th>房間編號</th>
                        <th>抵達日期</th>
                        <th>取件日期</th>
                        <th>來件種類</th>
                        <th>取件狀態</th>
                        <th>編輯</th>
                        <th>刪除</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($mails as $mail)
                        <tr>
                            <!-- 任務名稱 -->
                            <td class="table-text">
                                <div>{{ $mail->id }}</div>
                            </td>
                            <td>{{$mail->room_id}}</td>
                            <td>{{Carbon\Carbon::parse($mail->ArrivalTime)->format('Y-m-d')}}</td>
                            <td>
                                @if(($mail->collection_time)==null)尚未領取
                                @else{{Carbon\Carbon::parse($mail->collection_time)->format('Y-m-d')}}
                                @endif
                            </td>
                            <td>
                                @if(($mail->category)==0)信件
                                @elseif(($mail->category)==1)包裹
                                @elseif(($mail->category)==2)信件及包裹
                                @endif
                            </td>

                            <td>@if(($mail->statu)==0)未領取
                                @elseif(($mail->statu)==1)已領取
                                @endif
                            </td>

                            <!-- 編輯按鈕 -->
                            <td>
                                <a href="{{ route('admin.mail.edit', $mail->id) }}"
                                   class="btn btn-primary">編輯</a>

                            </td>
                            <!-- 刪除按鈕 -->
                            <td>
                                <form action="{{route('admin.mail.destroy',$mail->id)}}" method="POST">
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






@endsection

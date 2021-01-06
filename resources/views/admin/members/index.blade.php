
<?php


    ?>
@extends('admin.layouts.master')

@section('title', '會員管理')

@section('content')

                <h1 class="mt-4">會員管理</h1>
                    <a href="{{ route('admin.member.create') }}" class="btn btn-success">新增會員資料</a>


                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                            會員帳號
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>姓名</th>
                                    <th>房號</th>
                                    <th>帳號</th>
                                    <th>性別</th>
                                    <th>電子郵件</th>
                                    <th>電話</th>
                                    <th>身分證字號</th>
{{--                                    <th>聯絡人姓名</th>--}}
{{--                                    <th>聯絡人電話</th>--}}
                                    <th>編輯</th>
                                    <th>刪除</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>姓名</th>
                                    <th>房號</th>
                                    <th>帳號</th>
                                    <th>性別</th>
                                    <th>電子郵件</th>
                                    <th>電話</th>
                                    <th>身分證字號</th>
{{--                                    <th>聯絡人姓名</th>--}}
{{--                                    <th>聯絡人電話</th>--}}
                                    <th>編輯</th>
                                    <th>刪除</th>
                                </tr>
                                </tfoot>
                                <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <!-- 任務名稱 -->
                                    <td class="table-text">
                                        <div>{{ $user->name }}</div>
                                    </td>
                                    <td>{{$user->room_id}}</td>
                                    <td>{{$user->account}}</td>
                                    <td>
                                        @if(($user->gender)==0)女
                                        @elseif(($user->gender)==1)男
                                        @else null
                                        @endif
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->id_number}}</td>
{{--                                    <td>{{$user->contact_name}}</td>--}}
{{--                                    <td>{{$user->contact_phone}}</td>--}}



                                    <!-- 編輯按鈕 -->
                                    <td>
                                        <a href="{{ route('admin.member.edit', $user->id) }}" class="btn btn-primary">編輯</a>

                                    </td>
                                    <!-- 刪除按鈕 -->
                                    <td>
                                        <form action="{{route('admin.member.update',$user->id)}}" method="POST">
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

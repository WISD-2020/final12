@extends('tenant.layouts.master')

@section('title','Mail')

@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">信件包裹查看</h1>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    信件包裹列表
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>房間編號</th>
                                <th>郵件類別</th>
                                <th>抵達日期</th>
                                <th>狀態</th>
                                <th>領取時間</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>姓名</th>
                                <th>房間編號</th>
                                <th>郵件類別</th>
                                <th>抵達日期</th>
                                <th>狀態</th>
                                <th>領取時間</th>
                            </tr>
                            </tfoot>

                            <tbody>
                            @foreach ($mails as $mail)
                                <tr>
                                    <td>{{$mail->name}}</td>
                                    <td>{{$mail->room_id }}</td>
                                    <td>
                                        @if(($mail->category)==0)信件
                                        @elseif(($mail->category)==1)包裹
                                        @endif
                                    </td>
                                    <td>{{$mail->ArrivalTime}}</td>
                                    <td>
                                        @if(($mail->statu)==0)已通知
                                        @elseif(($mail->statu)==1)已領取
                                        @endif
                                    </td>
                                    <td>
                                        @if(($mail->collection_time)==null)未領取
                                        @else{{$mail->collection_time}}
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

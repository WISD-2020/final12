@extends('tenant.layouts.master')

@section('title','Repair')

@section('content')



    <h1 class="mt-4">修繕回報</h1>

    <a href="{{route('repair.create',auth()->user()->room_id)}}"class="btn btn-success">新增修繕單</a>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            修繕列表
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>房號</th>
                        <th>報修內容</th>
                        <th>報修日期</th>
                        <th>報修狀態</th>
                        <th>編輯</th>
                        <th>刪除</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>房號</th>
                        <th>報修內容</th>
                        <th>報修日期</th>
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
                                <div>{{ $repair->room_id }}</div>
                            </td>
                            <td>{{$repair->content}}</td>
                            <td>{{Carbon\Carbon::parse($repair->return_date)->format('Y/m/d')}}</td>
                            <td>
                                @if(($repair->repairs_statu==0))未修繕
                                @elseif(($repair->repairs_statu==1))修繕中
                                @elseif(($repair->repairs_statu==2))修繕完畢
                                @endif

                            <!-- 編輯按鈕 -->
                            <td>
                                <a href="{{ route('repair.edit', $repair->id) }}" class="btn btn-primary">編輯</a>

                            </td>
                            <!-- 刪除按鈕 -->
                            <td>
                                <form action="{{route('repair.destroy',$repair->id)}}" method="POST">
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

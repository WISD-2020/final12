@extends('tenant.layouts.master')

@section('title','create_repair')

@section('content')
    <div class="card mb-4">
        <!-- Page Heading -->
        <div class="card uper">

            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> 新增修繕單
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('repair.store') }}" method="POST" role="form">

                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="room_id">房號：</label>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{auth()->user()->room_id}}" disabled="disabled" required>
                            <input id="room_id" name="room_id" class="form-control"
                                   value="{{auth()->user()->room_id}}" type="hidden" required>
                        </div>
                        <div class="form-group">
                            <label for="repair_content">報修內容：</label>
                            <input id="repair_content" type="text" name="repair_content" class="form-control"
                                   placeholder="請輸入內容"
                                   value="">
                        </div>

                        <div class="form-group">
                            <label for="return_date">報修日期：</label>
                            <input id="return_date" type="date" name="return_date" class="form-control"
                                   placeholder="請選擇日期"
                                   value="">
                        </div>

                        <button type="submit" class="btn-sm btn-primary">送出</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

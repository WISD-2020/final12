

@extends('admin.layouts.master')

@section('title', '會員管理')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">會員管理</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>

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
                                    <th>聯絡人姓名</th>
                                    <th>聯絡人電話</th>
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
                                    <th>聯絡人姓名</th>
                                    <th>聯絡人電話</th>
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
                                        @if(($user->gender)===0)女
                                        @elseif(($user->gender)===1)男
                                        @else null
                                        @endif
                                    </td>

                                    <!-- 刪除按鈕 -->
                                    <td>
                                        <form action="/admin/member/{{ $user->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-danger">刪除</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr><tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>123</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>$320,800</td>
                                </tr>

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
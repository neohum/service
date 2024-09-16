@extends('../layouts.app')
@section('content')
<div class="row h-100 align-items-center justify-content-center">
    <div class="col-lg-8">
        <div class="hero-text-content text-center">
            @if($message = Session::get('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <h3>{{ $rent->rent_service_name }} IT 기기 대여 서비스</h3>
            <br>
            <br>



            <form action="{{ route('lists.store') }}" method="POST">
                @csrf

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                @endif
                <div class="form-group">
                    <div class="position-relative position-absolute top-100 start-50">
                        <label class="text-light ">학년</label>
                    </div>
                    <br>
                    <input type="text" class="form-control" id="grade" name="grade" autofocus required placeholder="예)1학년, 전담실">
                    <br>

                    <div class="position-relative position-absolute top-100 start-50">
                        <label class="text-light ">반</label>
                    </div>
                    <br>
                    <input type="text" class="form-control" id="class" name="class" placeholder="1반" >
                    <br>

                    <div class="position-relative position-absolute top-100 start-50">
                        <label class="text-light ">기기명</label>
                    </div>
                    <br>
                    <input type="text" class="form-control" id="device_name" name="device_name"  required>
                    <br>

                    <div class="position-relative position-absolute top-100 start-50">
                        <label class="text-light ">대여자</label>
                    </div>
                    <br>
                    <input type="text" class="form-control" id="name" name="name"  required>
                    <input type="hidden" name="hex_address" value="{{ $rent->hex_address }}">
                    <button type="submit" class="btn btn-primary mt-3">대여하기</button>
                </div>
            </form>
            <h3>대여/반납 기록</h3>
            <table class="table table-striped text-light">
                <thead>
                    <tr>
                        <th>학년</th>
                        <th>반</th>
                        <th>기기명</th>
                        <th>대여자</th>
                        <th>대여일</th>
                        <th>반납일</th>
                        <th>대여 상태</th>
                        <th>반납</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!is_countable($lists))
                    <tr>
                        <td colspan="6">대여/반납 기록이 없습니다.</td>
                    </tr>
                    @else
                    @foreach($lists as $list)
                    <tr>
                        <td>{{ $list->grade }}</td>
                        <td>{{ $list->class }}</td>
                        <td>{{ $list->device_name }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->created_at }}</td>
                        <td>{{ $list->updated_at }}</td>
                        <td>
                            @if($list->status == 0)
                            <span class="badge bg-danger">대여중</span>
                            @else
                            <span class="badge bg-success">반납완료</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('lists.update', $list->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $list->id }}">
                                <input type="hidden" name="status" value="{{ $list->status }}">

                                <input type="hidden" name="hex_address" value="{{ $rent->hex_address }}">
                                <button type="submit" class="btn btn-primary">반납</button>
                            </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

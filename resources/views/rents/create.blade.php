@extends('layouts.app')
@section('content')
<div class="row h-100 align-items-center justify-content-center">
    <div class="col-lg-8">
        <div class="hero-text-content text-center">

            <h3>
                서비스 신청 페이지
            </h3>
            <form action="{{ route('rents.store') }}" method="POST">
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
                <div class="form-group  mt-50">
                    <label for="school_name"><h6>학교명</h6></label>
                    <input type="text" class="form-control" id="rent_service_name" name="rent_service_name" autofocus required>
                    <button type="submit" class="btn btn-primary mt-3">서비스 생성하기</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

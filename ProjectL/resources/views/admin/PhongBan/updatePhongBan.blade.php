@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$phongban->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên Phòng Mới</label>
        <input
            type="text"
            class="form-control"
            name="tenphong"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$phongban->tenphong}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Email Phòng Mới</label>
        <input
            type="email"
            class="form-control"
            name="email"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$phongban->email}}"
        />
<button
    type="submit"
    name="btnInsert"
    class="btn btn-primary"
>
    Submit
</button>
</form>

@endsection

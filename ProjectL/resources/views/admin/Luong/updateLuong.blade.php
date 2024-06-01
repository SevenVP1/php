@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$luong->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Cơ Bản Mới</label>
        <input
            type="text"
            class="form-control"
            name="luongcoban"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$luong->luongcoban}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Ngày Công Mới</label>
        <input
            type="number"
            class="form-control"
            name="luongngaycong"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$luong->luongngaycong}}"
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

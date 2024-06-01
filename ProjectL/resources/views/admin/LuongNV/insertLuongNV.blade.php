@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="insertLuongNV">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID Lương</label>
        <input
            type="text"
            class="form-control"
            name="lid"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Cơ Bản</label>
        <input
            type="number"
            class="form-control"
            name="luongcoban"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Ngày Công</label>
        <input
            type="number"
            class="form-control"
            name="luongngaycong"
            id=""
            aria-describedby="helpId"
            placeholder=""
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

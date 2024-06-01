@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="insertChucVuNV">
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
        <label for="" class="form-label">Nhập ID Chức Vụ</label>
        <input
            type="text"
            class="form-control"
            name="cvid"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên chức Vụ</label>
        <input
            type="text"
            class="form-control"
            name="chucvu"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Chức Vụ</label>
        <input
            type="number"
            class="form-control"
            name="luongchucvu"
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

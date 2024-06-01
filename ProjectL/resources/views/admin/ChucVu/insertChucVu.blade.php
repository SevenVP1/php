@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="insertChucVu">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
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
        <label for="" class="form-label">Nhập Tên Chức Vụ</label>
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
    </div>
<button
    type="submit"
    name="btnInsert"
    class="btn btn-primary"
>
    Submit
</button>
</form>

@endsection

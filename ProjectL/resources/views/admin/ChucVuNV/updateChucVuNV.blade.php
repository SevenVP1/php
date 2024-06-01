@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$chucvunv->cvid}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập ID Mới</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$chucvunv->id}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên Chức Vụ Mới</label>
        <input
            type="text"
            class="form-control"
            name="chucvu"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$chucvunv->chucvu}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Lương Chức Vụ Mới</label>
        <input
            type="number"
            class="form-control"
            name="luongchucvu"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$chucvunv->luongchucvu}}"
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

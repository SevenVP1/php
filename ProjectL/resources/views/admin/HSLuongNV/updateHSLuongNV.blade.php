@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$hsluongnv->hsid}}">
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
            value="{{$hsluongnv->id}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Bậc Lương Mới</label>
        <input
            type="text"
            class="form-control"
            name="bacluong"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$hsluongnv->bacluong}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Hệ Số Lương Mới</label>
        <input
            type="float"
            class="form-control"
            name="hesoluong"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$hsluongnv->hesoluong}}"
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

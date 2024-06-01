@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$chamcong->cid}}">
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
            value="{{$chamcong->id}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Ngày Làm Mới</label>
        <input
            type="number"
            class="form-control"
            name="ngaylam"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$chamcong->ngaylam}}"
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

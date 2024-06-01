@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$phucap->pcid}}">
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
            value="{{$phucap->id}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Số Tiền Mới</label>
        <input
            type="text"
            class="form-control"
            name="sotien"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$phucap->sotien}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Ngày Áp Dụng Mới</label>
        <input
            type="date"
            class="form-control"
            name="ngayapdung"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$phucap->ngayapdung}}"
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

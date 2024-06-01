@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="insertHSLuong">
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
        <label for="" class="form-label">Nhập Tên Bậc Lương</label>
        <input
            type="number"
            class="form-control"
            name="bacluong"
            id=""
            aria-describedby="helpId"
            placeholder="Bậc"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Hệ Số Lương</label>
        <input
            type="float"
            class="form-control"
            name="hsluong"
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

@extends('layout.master')
@section('Content')
@if(session('Note'))
<div class="alert alert-success">
    {{session('Note')}}
@endif
<form method="post" action="{{$hsluong->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Tên Bậc Lương Mới</label>
        <input
            type="text"
            class="form-control"
            name="bacluong"
            id=""
            aria-describedby="helpId"
            placeholder="Bậc"
            value="{{$hsluong->bacluong}}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nhập Hệ Số Lương Mới</label>
        <input
            type="float"
            class="form-control"
            name="hsluong"
            id=""
            aria-describedby="helpId"
            placeholder=""
            value="{{$hsluong->hesoluong}}"
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
